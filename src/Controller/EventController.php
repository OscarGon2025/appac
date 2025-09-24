<?php

//namespace App\Controller;
//
//use App\Entity\Event;
//use App\Form\EventType;
//use App\Repository\EventRepository;
//use Doctrine\ORM\EntityManagerInterface;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//#[Route('/evenements')]
//class EventController extends AbstractController
//{
//    #[Route('/', name: 'app_event_index')]
//    public function index(EventRepository $eventRepository): Response
//    {
//        $events = $eventRepository->findBy(
//            ['status' => 'PUBLISHED'], // uniquement les événements publiés
//            ['startAt' => 'ASC']
//        );
//
//        return $this->render('event/index.html.twig', [
//            'events' => $events,
//        ]);
//    }
//
//    #[Route('/new', name: 'app_event_new')]
//    public function new(Request $request, EntityManagerInterface $em): Response
//    {
//        // S'assurer que l'utilisateur est connecté
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
//
//        $event = new Event();
//        $form = $this->createForm(EventType::class, $event);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            // Associer le créateur
//            $event->setCreatedBy($this->getUser());
//
//            $em->persist($event);
//            $em->flush();
//
//            $this->addFlash('success', 'Événement créé avec succès !');
//
//            return $this->redirectToRoute('app_event_index');
//        }
//
//        return $this->render('event/new.html.twig', [
//            'form' => $form->createView(),
//        ]);
//    }
//
//    #[Route('/{slug}', name: 'app_event_show')]
//    public function show(Event $event): Response
//    {
//        return $this->render('event/show.html.twig', [
//            'event' => $event,
//        ]);
//    }
//}


namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/evenements')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event_index')]
    public function index(EventRepository $eventRepository): Response
    {
        // Récupère uniquement les événements publiés, triés par date croissante
        $events = $eventRepository->findBy(
            ['status' => 'PUBLISHED'],
            ['startAt' => 'ASC']
        );

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/new', name: 'app_event_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        // S'assurer que l'utilisateur est bien connecté
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Associer le créateur
            $event->setCreatedBy($this->getUser());

            $em->persist($event);
            $em->flush();

            $this->addFlash('success', 'Événement créé avec succès !');

            return $this->redirectToRoute('app_event_index');
        }

        return $this->render('event/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{slug}', name: 'app_event_show')]
    public function show(EventRepository $eventRepository, string $slug): Response
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
