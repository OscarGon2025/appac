<?php

namespace App\Repository;

use App\Entity\SiteVisit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception as DbalException;
use Doctrine\Persistence\ManagerRegistry;

class SiteVisitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) { parent::__construct($registry, SiteVisit::class); }

    /** FR: Incrémente (ou crée) le compteur du jour. Tolère les collisions de concurrence (contrainte unique sur visit_date). */
    public function incrementToday(): void
    {
        $today = new \DateTimeImmutable('today');
        $em = $this->getEntityManager();

        $visit = $this->findOneBy(['visitDate' => $today]);

        if (!$visit) {
            $visit = (new SiteVisit())->setVisitDate($today)->setCount(0);
            $em->persist($visit);
        }

        $visit->increment();

        try {
            $em->flush();
        } catch (DbalException) {
            // FR: deux requêtes concurrentes ont créé la ligne du jour en même temps: on ignore, ce n'est qu'un compteur approximatif.
        }
    }

    public function getTotalVisits(): int
    {
        return (int) $this->createQueryBuilder('v')
            ->select('COALESCE(SUM(v.count), 0)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return array<string, int> Nombre de visites par jour sur les $days derniers jours
     *                             (clé au format 'Y-m-d', y compris les jours à 0 visite).
     */
    public function getDailyCounts(int $days): array
    {
        $since = new \DateTimeImmutable(sprintf('-%d days', $days - 1));

        $rows = $this->createQueryBuilder('v')
            ->andWhere('v.visitDate >= :since')
            ->setParameter('since', $since)
            ->getQuery()
            ->getResult();

        $byDate = [];
        foreach ($rows as $visit) {
            $byDate[$visit->getVisitDate()->format('Y-m-d')] = $visit->getCount();
        }

        $series = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $date = (new \DateTimeImmutable(sprintf('-%d days', $i)))->format('Y-m-d');
            $series[$date] = $byDate[$date] ?? 0;
        }

        return $series;
    }
}
