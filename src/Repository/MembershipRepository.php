<?php

namespace App\Repository;

use App\Entity\Membership;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MembershipRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Membership::class);
    }

    /** @return Membership[] */
    public function forUserYear(int $userId, int $year): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.user = :u')->setParameter('u', $userId)
            ->andWhere('m.year = :y')->setParameter('y', $year)
            ->getQuery()->getResult();
    }
}
