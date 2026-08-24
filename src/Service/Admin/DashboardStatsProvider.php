<?php

namespace App\Service\Admin;

use App\Entity\Album;
use App\Entity\ArchiveImage;
use App\Entity\Article;
use App\Entity\ArticleAttachment;
use App\Entity\ClassifiedAd;
use App\Entity\Document;
use App\Entity\Event;
use App\Entity\Membership;
use App\Entity\MembershipApplication;
use App\Entity\OutingRequest;
use App\Entity\Page;
use App\Entity\Photo;
use App\Entity\User;
use App\Enum\AdStatus;
use App\Enum\ApplicationStatus;
use App\Enum\MembershipStatus;
use App\Enum\OutingRequestStatus;
use App\Repository\SiteVisitRepository;
use Doctrine\ORM\EntityManagerInterface;

/** FR: Rassemble toutes les statistiques affichées sur le tableau de bord du backoffice. */
final class DashboardStatsProvider
{
    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly SiteVisitRepository $siteVisits,
    ) {
    }

    public function getStats(): array
    {
        return [
            'users' => $this->getUserStats(),
            'content' => $this->getContentStats(),
            'media' => $this->getMediaStats(),
            'classifieds' => $this->getClassifiedStats(),
            'memberships' => $this->getMembershipStats(),
            'outings' => $this->getOutingStats(),
            'visits' => $this->getVisitStats(),
        ];
    }

    private function count(string $entityClass, array $criteria = []): int
    {
        return (int) $this->em->getRepository($entityClass)->count($criteria);
    }

    private function getUserStats(): array
    {
        $total = $this->count(User::class);
        $approved = $this->count(User::class, ['isApproved' => true]);

        $rolesPerUser = $this->em->createQueryBuilder()
            ->select('u.roles')
            ->from(User::class, 'u')
            ->getQuery()
            ->getScalarResult();

        $admins = 0;
        foreach ($rolesPerUser as $row) {
            $roles = $row['roles'] ?? [];
            if (\is_string($roles)) {
                $roles = json_decode($roles, true) ?? [];
            }
            if (\in_array('ROLE_ADMIN', $roles, true)) {
                ++$admins;
            }
        }

        return [
            'total' => $total,
            'approved' => $approved,
            'pending' => $total - $approved,
            'admins' => $admins,
        ];
    }

    private function getContentStats(): array
    {
        return [
            'articles' => $this->count(Article::class),
            'articlesPublished' => $this->count(Article::class, ['isPublished' => true]),
            'events' => $this->count(Event::class),
            'eventsUpcoming' => (int) $this->em->createQueryBuilder()
                ->select('COUNT(e.id)')
                ->from(Event::class, 'e')
                ->andWhere('e.startAt >= :now')
                ->setParameter('now', new \DateTimeImmutable())
                ->getQuery()
                ->getSingleScalarResult(),
            'pages' => $this->count(Page::class),
            'pagesPublished' => $this->count(Page::class, ['isPublished' => true]),
        ];
    }

    private function getMediaStats(): array
    {
        return [
            'albums' => $this->count(Album::class),
            'photos' => $this->count(Photo::class),
            'archiveImages' => $this->count(ArchiveImage::class),
            'attachments' => $this->count(ArticleAttachment::class),
            'documents' => $this->count(Document::class),
        ];
    }

    private function getClassifiedStats(): array
    {
        $byStatus = [];
        foreach (AdStatus::cases() as $status) {
            $byStatus[$status->value] = $this->count(ClassifiedAd::class, ['status' => $status]);
        }

        $recent = $this->em->getRepository(ClassifiedAd::class)->createQueryBuilder('a')
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        return [
            'total' => array_sum($byStatus),
            'byStatus' => $byStatus,
            'recent' => $recent,
        ];
    }

    private function getMembershipStats(): array
    {
        $byStatus = [];
        foreach (MembershipStatus::cases() as $status) {
            $byStatus[$status->value] = $this->count(Membership::class, ['status' => $status]);
        }

        return [
            'total' => array_sum($byStatus),
            'byStatus' => $byStatus,
            'pendingApplications' => $this->count(MembershipApplication::class, ['status' => ApplicationStatus::PENDING]),
        ];
    }

    private function getOutingStats(): array
    {
        return [
            'total' => $this->count(OutingRequest::class),
            'pending' => $this->count(OutingRequest::class, ['status' => OutingRequestStatus::PENDING]),
        ];
    }

    private function getVisitStats(): array
    {
        $daily = $this->siteVisits->getDailyCounts(14);

        return [
            'total' => $this->siteVisits->getTotalVisits(),
            'last14Days' => array_sum($daily),
            'daily' => $daily,
            'max' => max([1, ...array_values($daily)]),
        ];
    }
}
