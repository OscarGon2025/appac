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
            ->andWhere('a.status = :s')->setParameter('s', 'published')
            ->orderBy('a.publishedAt', 'DESC')
            ->setMaxResults($limit)->getQuery()->getResult();
    }
}
