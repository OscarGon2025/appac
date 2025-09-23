<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) { parent::__construct($registry, Article::class); }

    /** @return Article[] */
    public function latestPublished(int $limit = 6): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.isPublished = :yes')
            ->andWhere('a.publishedAt <= :now')
            ->setParameter('yes', true)
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('a.pinned', 'DESC')
            ->addOrderBy('a.publishedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

}
