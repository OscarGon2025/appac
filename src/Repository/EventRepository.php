<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) { parent::__construct($registry, Event::class); }

    /** @return Event[] */
    public function upcoming(int $limit = 10): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.startAt >= :now')->setParameter('now', new \DateTimeImmutable())
            ->orderBy('e.startAt', 'ASC')->setMaxResults($limit)
            ->getQuery()->getResult();
    }
}
