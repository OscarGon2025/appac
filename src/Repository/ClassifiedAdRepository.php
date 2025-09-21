<?php

namespace App\Repository;

use App\Entity\ClassifiedAd;
use App\Enum\AdStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ClassifiedAdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClassifiedAd::class);
    }

    /** @return ClassifiedAd[] */
    public function latestApproved(int $limit = 12): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.status = :s')->setParameter('s', AdStatus::APPROVED)
            ->orderBy('COALESCE(c.publishedAt, c.createdAt)', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }

    /** @return ClassifiedAd[] */
    public function searchPublic(string $q, int $limit = 20): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.status = :s')->setParameter('s', AdStatus::APPROVED)
            ->andWhere('LOWER(c.title) LIKE :q OR LOWER(c.description) LIKE :q OR LOWER(c.location) LIKE :q')
            ->setParameter('q', '%'.mb_strtolower($q).'%')
            ->orderBy('COALESCE(c.publishedAt, c.createdAt)', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }
}
