<?php

namespace App\Repository;

use App\Entity\Page;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Page::class);
    }

    /** @return Page[] */
    public function findPublished(int $limit = 20): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.isPublished = :pub')->setParameter('pub', true)
            ->orderBy('p.updatedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }

    public function findOnePublishedBySlug(string $slug): ?Page
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.slug = :slug')->setParameter('slug', $slug)
            ->andWhere('p.isPublished = :pub')->setParameter('pub', true)
            ->getQuery()->getOneOrNullResult();
    }

    /** @return Page[] */
    public function search(string $q, bool $onlyPublished = true, int $limit = 20): array
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('LOWER(p.title) LIKE :q OR LOWER(p.body) LIKE :q')
            ->setParameter('q', '%'.mb_strtolower($q).'%')
            ->orderBy('p.updatedAt', 'DESC')
            ->setMaxResults($limit);

        if ($onlyPublished) {
            $qb->andWhere('p.isPublished = :pub')->setParameter('pub', true);
        }

        return $qb->getQuery()->getResult();
    }
}
