<?php

namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EventRepository $eventRepository): Response
    {
        // Pour récupérer les évènements publiés, à venir et triés par date
        $events = $eventRepository->createQueryBuilder('e')
            ->where('e.status = :status')
            ->andWhere('e.startAt >= :now')
            ->setParameter('status', 'PUBLISHED')
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('e.startAt', 'ASC')
            ->setMaxResults(6) // c'est la limite d’évènements affichés
            ->getQuery()
            ->getResult();

        return $this->render('public/home.html.twig', [
            'events' => $events,
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
