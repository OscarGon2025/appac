<?php

namespace App\Controller\Account;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/mon-compte/evenements', name: 'account_events_')]
class AccountEventController extends AbstractController
{
    #[Route('/mes-sorties', name: 'my_outings', methods: ['GET'])]
    public function myOutings(EventRepository $eventRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Accès réservé aux membres connectés.');
        }

        // Eventos donde el usuario está inscrito (join con OutingRequest)
        $events = $eventRepo->createQueryBuilder('e')
            ->join('e.outingRequests', 'r')
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->orderBy('e.startAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('account/my_outings.html.twig', [
            'events' => $events,
        ]);
    }
}
