<?php

namespace App\Controller\Account;

use App\Entity\ClassifiedAd;
use App\Enum\AdStatus;
use App\Form\ClassifiedAdType;
use App\Repository\ClassifiedAdRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route('/mon-compte/annonces', name: 'account_ad_')]
final class AccountAdController extends AbstractController
{
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(ClassifiedAdRepository $repo): Response
    {
        // Sólo mis anuncios (propietario = usuario actual)
        $ads = $repo->createQueryBuilder('a')
            ->andWhere('a.owner = :me')
            ->setParameter('me', $this->getUser())
            ->orderBy('a.updatedAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('account/ad/index.html.twig', [
            'ads' => $ads,
        ]);
    }

    #[Route('/nouveau', name: 'new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $ad = new ClassifiedAd();
        if (method_exists($ad, 'setOwner')) {
            $ad->setOwner($this->getUser());
        }
        if (method_exists($ad, 'setStatus')) {
            $ad->setStatus(AdStatus::PENDING); // pendiente hasta que admin apruebe
        }

        $form = $this->createForm(ClassifiedAdType::class, $ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($ad);
            $em->flush();

            $this->addFlash('success', 'Annonce créée. Elle sera publiée après validation.');
            return $this->redirectToRoute('account_ad_index');
        }

        return $this->render('account/ad/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id<\d+>}/modifier', name: 'edit', methods: ['GET','POST'])]
    public function edit(Request $request, ClassifiedAd $ad, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('AD_EDIT', $ad);

        // Si está aprobada publicada, puedes decidir bloquear ciertos campos o forzar PENDING:
        // $ad->setStatus(AdStatus::PENDING);

        $form = $this->createForm(ClassifiedAdType::class, $ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Annonce mise à jour.');
            return $this->redirectToRoute('account_ad_index');
        }

        return $this->render('account/ad/edit.html.twig', [
            'form' => $form->createView(),
            'ad'   => $ad,
        ]);
    }

    #[Route('/{id<\d+>}/archiver', name: 'archive', methods: ['POST'])]
    public function archive(Request $request, ClassifiedAd $ad, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('AD_EDIT', $ad);
        $this->isCsrfTokenValid('ad_archive_'.$ad->getId(), $request->request->get('_token')) ?: $this->createAccessDeniedException();

        if (method_exists($ad, 'setStatus')) {
            $ad->setStatus(AdStatus::ARCHIVED);
        }
        $em->flush();

        $this->addFlash('info', 'Annonce archivée.');
        return $this->redirectToRoute('account_ad_index');
    }

    #[Route('/{id<\d+>}/supprimer', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, ClassifiedAd $ad, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('AD_DELETE', $ad);
        $this->isCsrfTokenValid('ad_delete_'.$ad->getId(), $request->request->get('_token')) ?: $this->createAccessDeniedException();

        $em->remove($ad);
        $em->flush();

        $this->addFlash('warning', 'Annonce supprimée.');
        return $this->redirectToRoute('account_ad_index');
    }
}
