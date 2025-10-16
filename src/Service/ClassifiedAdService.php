<?php

namespace App\Service;

use App\Repository\ClassifiedAdRepository;

final class ClassifiedAdService
{
    public function __construct(private readonly ClassifiedAdRepository $repo)
    {
    }

    /**
     * Últimos anuncios aprobados para Home.
     * @return array<\App\Entity\ClassifiedAd>
     */
    public function latestApproved(int $limit = 6): array
    {
        return $this->repo->findLatestApproved($limit);
    }

    /**
     * Búsqueda con filtros y paginación.
     * Normaliza inputs del Request para no ensuciar el controller.
     *
     * @param array{
     *   q?: ?string,
     *   min?: ?string|int,
     *   max?: ?string|int,
     *   condition?: ?string,
     *   location?: ?string,
     *   sort?: ?string,
     *   page?: ?string|int,
     *   perPage?: ?string|int
     * } $raw
     *
     * @return array{items: iterable, total: int, pages: int, page: int, perPage: int}
     */
    public function search(array $raw): array
    {
        $q         = $raw['q'] ?? null;
        $min       = $this->toNullableInt($raw['min'] ?? null);
        $max       = $this->toNullableInt($raw['max'] ?? null);
        $condition = $this->toNullableStr($raw['condition'] ?? null);
        $location  = $this->toNullableStr($raw['location'] ?? null);

        // ✅ FIX aquí: no acceder a $raw['sort'] sin comprobar
        $sortRaw = $raw['sort'] ?? null;
        $allowedSorts = ['recent', 'price_asc', 'price_desc'];
        $sort = in_array($sortRaw, $allowedSorts, true) ? $sortRaw : 'recent';

        $page    = (int) max(1, (int) ($raw['page'] ?? 1));
        $perPage = (int) max(1, (int) ($raw['perPage'] ?? 12));

        return $this->repo->searchApproved(
            q: $q,
            min: $min,
            max: $max,
            condition: $condition,
            location: $location,
            sort: $sort,
            page: $page,
            perPage: $perPage
        );
    }


    private function toNullableInt(mixed $v): ?int
    {
        if ($v === null || $v === '') return null;
        return (int) $v;
    }

    private function toNullableStr(mixed $v): ?string
    {
        if ($v === null) return null;
        $s = trim((string) $v);
        return $s === '' ? null : $s;
    }
}
