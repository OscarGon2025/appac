<?php

namespace App\Repository;

use App\Entity\ClassifiedAd;
use App\Enum\AdStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<ClassifiedAd>
 *
 * @method ClassifiedAd|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassifiedAd|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassifiedAd[]    findAll()
 * @method ClassifiedAd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassifiedAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClassifiedAd::class);
    }

    /**
     * QueryBuilder base: sólo anuncios aprobados y publicados (si usas publishedAt).
     */
    private function getBaseApprovedQB(): QueryBuilder
    {
        $qb = $this->createQueryBuilder('a')
            ->andWhere('a.status = :approved')
            ->setParameter('approved', AdStatus::APPROVED)
            ->orderBy('a.publishedAt', 'DESC');

        // Si manejas ARCHIVED como estado distinto y quieres excluirlo explícitamente,
        // quita el comentario de la línea siguiente:
        // ->andWhere('a.status != :archived')->setParameter('archived', AdStatus::ARCHIVED);

        // Opcional: precargar fotos para evitar N+1 en las cards
        // (ajusta el nombre de la relación si es diferente)
        $qb->leftJoin('a.photos', 'p')->addSelect('p');

        return $qb;
    }

    /**
     * Devuelve los últimos anuncios aprobados para la Home.
     *
     * @return ClassifiedAd[]
     */
    public function findLatestApproved(int $limit = 6): array
    {
        return $this->getBaseApprovedQB()
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Búsqueda con filtros y paginación.
     *
     * @param string|null $q        Texto libre (título + descripción)
     * @param int|null    $min      Precio mínimo
     * @param int|null    $max      Precio máximo
     * @param string|null $condition Condición del artículo (ajusta a tu enum si aplica)
     * @param string|null $location  Localidad / ubicación
     * @param string      $sort      recent|price_asc|price_desc
     * @param int         $page      Página actual (>=1)
     * @param int         $perPage   Tamaño de página
     *
     * @return array{items: iterable, total: int, pages: int, page: int, perPage: int}
     */
    public function searchApproved(
        ?string $q,
        ?int $min,
        ?int $max,
        ?string $condition,
        ?string $location,
        string $sort = 'recent',
        int $page = 1,
        int $perPage = 12
    ): array {
        $page = max(1, $page);
        $perPage = max(1, $perPage);

        $qb = $this->getBaseApprovedQB();

        // Texto libre: título + descripción
        if ($q !== null && trim($q) !== '') {
            $qb->andWhere('(LOWER(a.title) LIKE :q OR LOWER(a.description) LIKE :q)')
                ->setParameter('q', '%'.mb_strtolower(trim($q)).'%');
        }

        // Precio mínimo
        if ($min !== null) {
            $qb->andWhere('a.price >= :min')->setParameter('min', $min);
        }

        // Precio máximo
        if ($max !== null) {
            $qb->andWhere('a.price <= :max')->setParameter('max', $max);
        }

        // Condición (ajusta si es enum: e.g., ->setParameter('cond', Condition::USED))
        if ($condition !== null && $condition !== '') {
            $qb->andWhere('a.condition = :cond')->setParameter('cond', $condition);
        }

        // Localidad (match parcial)
        if ($location !== null && trim($location) !== '') {
            $qb->andWhere('LOWER(a.location) LIKE :loc')->setParameter('loc', '%'.mb_strtolower(trim($location)).'%');
        }

        // Ordenación
        switch ($sort) {
            case 'price_asc':
                $qb->addOrderBy('a.price', 'ASC');
                break;
            case 'price_desc':
                $qb->addOrderBy('a.price', 'DESC');
                break;
            case 'recent':
            default:
                // ya viene con publishedAt DESC desde base
                // lo dejamos explícito para claridad
                $qb->addOrderBy('a.publishedAt', 'DESC');
                break;
        }

        // Paginación
        $query = $qb->getQuery()
            ->setFirstResult(($page - 1) * $perPage)
            ->setMaxResults($perPage);

        $paginator = new Paginator($query, true);
        $total = count($paginator);
        $pages = (int) ceil($total / $perPage);

        return [
            'items'   => $paginator, // iterable de ClassifiedAd
            'total'   => $total,
            'pages'   => $pages,
            'page'    => $page,
            'perPage' => $perPage,
        ];
    }
}
