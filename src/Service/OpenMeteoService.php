<?php

namespace App\Service;

use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Service Open-Meteo (gratuit, sans clé).
 * - Météo "courant" (température, vent)
 * - Marées indicatives depuis Marine API (sea_level_height_msl)
 *
 * ⚠ Données de marée: à titre indicatif (non adapté à la navigation).
 */
final class OpenMeteoService
{
    public function __construct(
        private HttpClientInterface $http,
        private CacheInterface $cache
    ) {}

    /**
     * Météo courante (température, vent) en Europe/Paris.
     * Retour: ['temp'=>int,'wind'=>int,'dir'=>int,'code'=>int]
     */
    public function getCurrentWeather(float $lat, float $lon): array
    {
        $key = sprintf('om_current_%0.3f_%0.3f', $lat, $lon);

        return $this->cache->get($key, function (ItemInterface $item) use ($lat, $lon) {
            $item->expiresAfter(300); // 5 min

            $url = 'https://api.open-meteo.com/v1/forecast';
            $query = [
                'latitude'  => $lat,
                'longitude' => $lon,
                // variables "current" (API 2025)
                'current'   => 'temperature_2m,wind_speed_10m,wind_direction_10m,weather_code',
                'wind_speed_unit' => 'kmh',
                'timezone'  => 'Europe/Paris',
            ];

            $data = $this->http->request('GET', $url, ['query' => $query])->toArray(false);

            if (!isset($data['current'])) {
                return [];
            }

            $c = $data['current'];
            return [
                'temp' => isset($c['temperature_2m']) ? (int) round($c['temperature_2m']) : null,
                'wind' => isset($c['wind_speed_10m']) ? (int) round($c['wind_speed_10m']) : null,
                'dir'  => $c['wind_direction_10m'] ?? null,
                'code' => $c['weather_code'] ?? null,
            ];
        });
    }

    /**
     * Prochaine marée (indicative) via Marine API: sea_level_height_msl
     * Analyse un créneau de 48h et détecte le prochain extremum (PM/BM).
     * Retour: ['type'=>'PM'|'BM','time'=>\DateTimeImmutable,'height'=>float|null] ou []
     */
    public function getNextTide(float $lat, float $lon): array
    {
        $key = sprintf('om_tide_next_%0.3f_%0.3f', $lat, $lon);

        return $this->cache->get($key, function (ItemInterface $item) use ($lat, $lon) {
            $item->expiresAfter(900); // 15 min

            $url = 'https://marine-api.open-meteo.com/v1/marine';
            $query = [
                'latitude'  => $lat,
                'longitude' => $lon,
                'hourly'    => 'sea_level_height_msl',
                'forecast_hours' => 48,             // 48h suffit pour trouver le prochain extremum
                'timezone'  => 'Europe/Paris',
            ];

            $data = $this->http->request('GET', $url, ['query' => $query])->toArray(false);

            if (!isset($data['hourly']['time'], $data['hourly']['sea_level_height_msl'])) {
                return [];
            }

            $times  = $data['hourly']['time'];
            $levels = $data['hourly']['sea_level_height_msl'];

            $now = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));

            // Chercher l'index du "prochain" pas de temps
            $start = 0;
            foreach ($times as $i => $t) {
                $dt = new \DateTimeImmutable($t);
                if ($dt > $now) { $start = max(1, $i); break; }
            }

            // Détection d'extremum local simple (max/min) dans la série horaire
            for ($i = $start; $i < count($levels) - 1; $i++) {
                $prev = (float) $levels[$i - 1];
                $curr = (float) $levels[$i];
                $next = (float) $levels[$i + 1];

                $isMax = ($curr > $prev && $curr > $next);
                $isMin = ($curr < $prev && $curr < $next);

                if ($isMax || $isMin) {
                    $time = new \DateTimeImmutable($times[$i]);
                    return [
                        'type'   => $isMax ? 'PM' : 'BM', // Pleine / Basse Mer
                        'time'   => $time,
                        'height' => $curr,
                    ];
                }
            }

            return [];
        });
    }
}
