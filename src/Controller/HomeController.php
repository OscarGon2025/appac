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
    // — Unifier la logique dans une seule action pour "/" — //
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(
        ArticleRepository $articles,
        EventRepository $events,
        ClassifiedAdService $service,
        PartnerLinkRepository $partners
    ): Response {
        // Derniers articles publiés
        $latest = $articles->latestPublished(6);

        // Prochains événements publiés (triés par date)
        $upcomingEvents = $events->createQueryBuilder('e')
            ->where('e.status = :status')
            ->andWhere('e.startAt >= :now')
            ->setParameter('status', PublishStatus::PUBLISHED)
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('e.startAt', 'ASC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();

        // Annonces approuvées (aperçu Home)
        $latestAds = $service->latestApproved(6);

        // Partenaires actifs triés par position
        $partnersList = $partners->createQueryBuilder('p')
            ->where('p.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('p.position', 'ASC')
            ->getQuery()
            ->getResult();

        // Un seul render, toutes les données
        return $this->render('public/home.html.twig', [
            'actus'      => $latest,
            'events'     => $upcomingEvents,
            'partners'   => $partnersList,
            'latestAds'  => $latestAds,
        ]);
    }

    #[Route('/evenements/{slug}', name: 'app_event_show')]
    public function show(string $slug, EventRepository $eventRepository): Response
    {
        $event = $eventRepository->findOneBy(['slug' => $slug]);

        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé.');
        }

        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
}
