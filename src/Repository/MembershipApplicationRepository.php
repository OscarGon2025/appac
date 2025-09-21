<?php

namespace App\Repository;

use App\Entity\MembershipApplication;
use App\Enum\ApplicationStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MembershipApplicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MembershipApplication::class);
    }

    /** @return MembershipApplication[] */
    public function pending(int $limit = 50): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.status = :s')->setParameter('s', ApplicationStatus::PENDING)
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }

    /** @return MembershipApplication[] */
    public function forYear(int $year, ?ApplicationStatus $status = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->andWhere('a.targetYear = :y')->setParameter('y', $year)
            ->orderBy('a.createdAt', 'DESC');

        if ($status) {
            $qb->andWhere('a.status = :s')->setParameter('s', $status);
        }

        return $qb->getQuery()->getResult();
    }
}
