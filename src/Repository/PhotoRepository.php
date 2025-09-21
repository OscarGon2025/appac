<?php

namespace App\Repository;

use App\Entity\Photo;
use App\Enum\MediaVisibility;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PhotoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Photo::class);
    }

    /** @return Photo[] */
    public function latestPublic(int $limit = 12): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.visibility = :v')->setParameter('v', MediaVisibility::PUBLIC)
            ->orderBy('p.uploadedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()->getResult();
    }

    /** @return Photo[] */
    public function forAlbum(int $albumId, ?bool $publicOnly = null): array
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.album = :a')->setParameter('a', $albumId)
            ->orderBy('p.uploadedAt', 'DESC');

        if ($publicOnly === true) {
            $qb->andWhere('p.visibility = :v')->setParameter('v', MediaVisibility::PUBLIC);
        }

        return $qb->getQuery()->getResult();
    }

    /** @return Photo[] */
    public function forAd(int $adId): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.classifiedAd = :ad')->setParameter('ad', $adId)
            ->orderBy('p.uploadedAt', 'ASC')
            ->getQuery()->getResult();
    }
}
