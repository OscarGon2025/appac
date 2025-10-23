<?php

namespace App\Controller;

use App\Enum\PublishStatus;
use App\Repository\ArticleRepository;
use App\Repository\EventRepository;
use App\Repository\PartnerLinkRepository;
use App\Service\ClassifiedAdService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(
        ArticleRepository $articles,
        EventRepository $eventRepository,
        ClassifiedAdService $classifieds,
        PartnerLinkRepository $partnerLinks
    ): Response {

        $latestArticles = $articles->latestPublished(6);

        $now = new \DateTimeImmutable('now');

        $qb = $eventRepository->createQueryBuilder('e')
            ->andWhere('e.status = :published')
            ->andWhere('e.startAt >= :now')
            ->setParameter('published', PublishStatus::PUBLISHED)
            ->setParameter('now', $now)
            ->orderBy('e.startAt', 'ASC')
            ->setMaxResults(6);


        if (!$this->isGranted('ROLE_MEMBER')) {
            $qb->andWhere('e.isMembersOnly = :publicOnly')
                ->setParameter('publicOnly', false);
        }

        $upcomingEvents = $qb->getQuery()->getResult();


        $latestAds = $classifieds->latestApproved(6);


        $partners = $partnerLinks->createQueryBuilder('p')
            ->andWhere('p.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('p.position', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('public/home.html.twig', [
            'actus'     => $latestArticles,
            'events'    => $upcomingEvents,
            'partners'  => $partners,
            'latestAds' => $latestAds,
        ]);
    }


}
