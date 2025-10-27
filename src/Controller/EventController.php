<?php

namespace App\Controller;

use App\Entity\Event;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/evenements', name: 'app_event_')]
final class EventController extends AbstractController
{
    public function __construct(private EventRepository $repo) {}

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        $events = $this->repo->findBy([], ['startAt' => 'DESC']);

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/{slug}', name: 'show', requirements: ['slug' => '[a-z0-9-]+'], methods: ['GET'])]
    public function show(string $slug): Response
    {
        $event = $this->repo->findOneBy(['slug' => $slug]);

        if (!$event instanceof Event) {
            throw $this->createNotFoundException('Événement introuvable.');
        }


        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
}
