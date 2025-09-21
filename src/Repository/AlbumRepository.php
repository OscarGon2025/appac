<?php

namespace App\Repository;

use App\Entity\Album;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AlbumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Album::class);
    }

    /** @return Album[] */
    public function latest(int $limit = 10): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.updatedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }

    public function findOneByTitle(string $title): ?Album
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.title = :t')->setParameter('t', $title)
            ->getQuery()->getOneOrNullResult();
    }
}
