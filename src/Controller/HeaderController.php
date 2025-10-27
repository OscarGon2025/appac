<?php

namespace App\Controller;

use App\Service\OpenMeteoService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HeaderController extends AbstractController
{
    public function __construct(
        #[Autowire(param: 'app.weather_lat')] private float $weatherLat,
        #[Autowire(param: 'app.weather_lon')] private float $weatherLon,
        #[Autowire(param: 'app.tide_lat')]    private float $tideLat,
        #[Autowire(param: 'app.tide_lon')]    private float $tideLon,

        // OJO: puede no existir el parámetro; lo hacemos opcional y fijamos por código el valor por defecto
        #[Autowire(param: 'app.timezone')] private ?string $tz,
    ) {
        // Valor por defecto si el parámetro no está definido
        if ($this->tz === null || $this->tz === '') {
            $this->tz = 'Europe/Paris';
        }
    }

    #[Route('/_site/header', name: 'site_header', methods: ['GET'])]
    public function siteHeader(OpenMeteoService $om, LoggerInterface $logger): Response
    {
        // Fallbacks
        $weather = ['temp' => null, 'wind' => null, 'dir' => null];
        $tide    = ['type' => null, 'time' => null];

        // Météo
        try {
            $wx = $om->getCurrentWeather($this->weatherLat, $this->weatherLon);
            if (\is_array($wx)) {
                $weather['temp'] = isset($wx['temp']) ? (float) $wx['temp'] : null;
                $weather['wind'] = isset($wx['wind']) ? (float) $wx['wind'] : null;
                $weather['dir']  = isset($wx['dir'])  ? (int) \round((float) $wx['dir']) : null;
            }
        } catch (\Throwable $e) {
            $logger->warning('OpenMeteo: erreur météo dans le header', ['error' => $e->getMessage()]);
        }

        // Marée
        try {
            $td = $om->getNextTide($this->tideLat, $this->tideLon);
            if (\is_array($td)) {
                $tide['type'] = $td['type'] ?? null;

                $time = $td['time'] ?? null;
                if ($time instanceof \DateTimeInterface) {
                    $tide['time'] = $time;
                } elseif (\is_string($time) && $time !== '') {
                    $tide['time'] = new \DateTime($time, new \DateTimeZone($this->tz));
                }
            }
        } catch (\Throwable $e) {
            $logger->warning('OpenMeteo: erreur marée dans le header', ['error' => $e->getMessage()]);
        }

        $response = $this->render('partials/site_header.html.twig', [
            'header' => ['weather' => $weather, 'tide' => $tide],
        ]);

        // Cache court
        $response->setPublic();
        $response->setMaxAge(300);
        $response->setSharedMaxAge(300);

        return $response;
    }
}
