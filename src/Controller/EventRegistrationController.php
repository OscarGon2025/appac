<?php

// src/Controller/EventRegistrationController.php
namespace App\Controller;

use App\Entity\Event;
use App\Entity\OutingRequest;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
final class EventRegistrationController extends AbstractController
{
    #[Route('/evenements/{id}/register', name: 'app_event_register', methods: ['POST'])]
    public function register(Event $event, Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED');

        if (!$this->isCsrfTokenValid('event_register_' . $event->getId(), $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
        }

// ya inscrito ?
        foreach ($event->getOutingRequests() as $r) {
            if ($r->getUser() === $this->getUser() && $r->getStatus() === OutingRequest::STATUS_CONFIRMED) {
                $this->addFlash('info', 'Vous êtes déjà inscrit(e).');
                return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
            }
        }

// capacidad llena
        if ($event->getMaxParticipants() !== null && ($event->spotsLeft() ?? 0) <= 0) {
            $this->addFlash('warning', 'Désolé, il n\'y a plus de places disponibles.');
            return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
        }

// crear la solicitud (aquí la marco CONFIRMED directo; adapta si necesitas validación)
        $req = (new OutingRequest())
            ->setEvent($event)
            ->setUser($this->getUser())
            ->setSeats(1)
            ->setStatus(OutingRequest::STATUS_CONFIRMED);

        $em->persist($req);
        $em->flush();

        $this->addFlash('success', 'Inscription enregistrée ✅');
        return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
    }

    #[Route('/evenements/{id}/unregister', name: 'app_event_unregister', methods: ['POST'])]
    public function unregister(Event $event, Request $request, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('event_unregister_' . $event->getId(), $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
        }

        foreach ($event->getOutingRequests() as $r) {
            if ($r->getUser() === $this->getUser()) {
                $em->remove($r);
            }
        }
        $em->flush();

        $this->addFlash('success', 'Vous êtes désinscrit(e).');
        return $this->redirectToRoute('app_event_show', ['slug' => $event->getSlug()]);
    }
}
