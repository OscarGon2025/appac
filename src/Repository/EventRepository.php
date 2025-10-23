<?php

namespace App\Repository;

use App\Entity\Event;
use App\Enum\PublishStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**

     *
     * @return Event[]
     */
    public function upcoming(int $limit = 10): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.startAt >= :now')
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('e.startAt', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**

     *
     * @param int                   $limit
     * @param bool                  $allowMembersOnly
     *
     * @param \DateTimeInterface|null $from
     *
     * @return Event[]
     */
    public function upcomingPublished(
        int $limit = 6,
        bool $allowMembersOnly = false,
        ?\DateTimeInterface $from = null
    ): array {
        $from ??= new \DateTimeImmutable();

        $qb = $this->createQueryBuilder('e')
            ->andWhere('e.status = :published')
            ->andWhere('e.startAt >= :from')
            ->setParameter('published', PublishStatus::PUBLISHED)
            ->setParameter('from', $from)
            ->orderBy('e.startAt', 'ASC')
            ->setMaxResults($limit);

        if (!$allowMembersOnly) {
            $qb->andWhere('e.isMembersOnly = :publicOnly')
                ->setParameter('publicOnly', false);
        }

        return $qb->getQuery()->getResult();
    }

    public function countUpcomingPublished(
        bool $allowMembersOnly = false,
        ?\DateTimeInterface $from = null
    ): int {
        $from ??= new \DateTimeImmutable();

        $qb = $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->andWhere('e.status = :published')
            ->andWhere('e.startAt >= :from')
            ->setParameter('published', PublishStatus::PUBLISHED)
            ->setParameter('from', $from);

        if (!$allowMembersOnly) {
            $qb->andWhere('e.isMembersOnly = :publicOnly')
                ->setParameter('publicOnly', false);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }


    public function findPublishedBySlug(string $slug, bool $allowMembersOnly = false): ?Event
    {
        $qb = $this->createQueryBuilder('e')
            ->andWhere('e.slug = :slug')
            ->andWhere('e.status = :published')
            ->setParameter('slug', $slug)
            ->setParameter('published', PublishStatus::PUBLISHED)
            ->setMaxResults(1);

        if (!$allowMembersOnly) {
            $qb->andWhere('e.isMembersOnly = :publicOnly')
                ->setParameter('publicOnly', false);
        }

        return $qb->getQuery()->getOneOrNullResult();
    }
}
