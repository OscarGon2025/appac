<?php

namespace App\Repository;

use App\Entity\PartnerLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PartnerLinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartnerLink::class);
    }

    /** @return PartnerLink[] */
    public function findActiveOrdered(?string $type = null): array
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.isActive = :active')->setParameter('active', true)
            ->orderBy('p.position', 'ASC')
            ->addOrderBy('p.label', 'ASC');

        if ($type !== null) {
            $qb->andWhere('p.type = :type')->setParameter('type', $type);
        }

        return $qb->getQuery()->getResult();
    }

    public function findOneByUrl(string $url): ?PartnerLink
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.url = :u')->setParameter('u', $url)
            ->getQuery()->getOneOrNullResult();
    }
}
