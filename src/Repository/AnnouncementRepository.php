<?php

namespace App\Repository;

use App\Entity\Announcement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AnnouncementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Announcement::class);
    }

    /**
     * L'annonce à afficher en popup en ce moment : active, et dans sa fenêtre
     * de dates si elle en a une. S'il y en a plusieurs, on prend la plus
     * récemment modifiée (une seule popup à la fois).
     */
    public function findCurrentlyActive(): ?Announcement
    {
        $now = new \DateTimeImmutable();

        return $this->createQueryBuilder('a')
            ->andWhere('a.isActive = true')
            ->andWhere('a.startAt IS NULL OR a.startAt <= :now')
            ->andWhere('a.endAt IS NULL OR a.endAt >= :now')
            ->setParameter('now', $now)
            ->orderBy('a.updatedAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
