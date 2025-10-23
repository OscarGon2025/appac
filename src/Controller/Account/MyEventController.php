<?php

namespace App\Controller\Account;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;


#[IsGranted('IS_AUTHENTICATED_FULLY')]
#[Route('/mon-compte/mes-evenements')]
class MyEventController extends AbstractController
{
    #[Route('/', name: 'account_events_index', methods: ['GET'])]
    public function index(EventRepository $repo): Response
    {
        $events = $repo->findBy(['createdBy' => $this->getUser()], ['startAt'=>'DESC']);
        return $this->render('account/event/index.html.twig', ['events'=>$events]);
    }

    #[Route('/nouveau', name: 'account_events_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $event = new Event();

        $form = $this->createForm(EventType::class, $event, [
            'validation_groups' => fn(FormInterface $f) => ['Default','create'],
        ])->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->setCreatedBy($this->getUser());
            $em->persist($event);
            $em->flush();

            $this->addFlash('success','Événement créé.');
            return $this->redirectToRoute('account_events_index');
        }

        return $this->render('account/event/new.html.twig', ['form'=>$form->createView()]);
    }

    #[Route('/{slug}/modifier', name: 'account_events_edit', methods: ['GET','POST'])]
    public function edit(
        #[MapEntity(mapping: ['slug' => 'slug'])] Event $event,   // 👈 mapea el {slug} a Event.slug
        Request $request,
        EntityManagerInterface $em
    ): Response {
        // Solo el propietario (o rol superior) puede editar
        $this->denyAccessUnlessGranted('EVENT_EDIT', $event);

        $form = $this->createForm(EventType::class, $event, [
            'validation_groups' => fn (FormInterface $f) => ['Default'],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Événement mis à jour.');
            return $this->redirectToRoute('account_events_index');
        }

        return $this->render('account/event/edit.html.twig', [
            'form'  => $form->createView(),
            'event' => $event,
        ]);
    }
}
