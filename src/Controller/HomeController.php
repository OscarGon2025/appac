<?php

namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Entity\Event;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class HomeController extends AbstractController
{
// — Unifier la logique dans une seule action pour "/" — //
#[Route('/', name: 'app_home', methods: ['GET'])]
public function index(ArticleRepository $articles, EventRepository $events): Response
{
    // — Derniers articles publiés
    $latest = $articles->latestPublished(6);

    // — Prochains événements publiés (triés par date)
    $qb = $events->createQueryBuilder('e')
        ->where('e.status = :status')
        ->andWhere('e.startAt >= :now')
        ->setParameter('status', PublishStatus::PUBLISHED)
        ->setParameter('now', new \DateTimeImmutable())
        ->orderBy('e.startAt', 'ASC')
        ->setMaxResults(6);

    return $this->render('public/home.html.twig', [
        // — Données fusionnées
        'actus'  => $latest,
        'events' => $qb->getQuery()->getResult(),
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
