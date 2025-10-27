<?php

declare(strict_types=1);

namespace App\Controller;


use App\Form\ChangePasswordType;
use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AccountController extends AbstractController
/**final class AccountController extends AbstractController
{
    /**
     * Espace membre
     */
    #[Route('/mon-compte', name: 'app_account', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('account/index.html.twig');
    }


    // Modifier profil
    #[Route('/mon-compte/modifier', name: 'app_account_edit')]
    public function edit(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $em): Response

    /**
     * Modifier mon profil
     */
    /**#[Route('/mon-compte/modifier', name: 'app_account_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $em): Response */

    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();

        // Formulaire d’édition du profil
        $profileForm = $this->createForm(UserProfileType::class, $user);
        $profileForm->handleRequest($request);

  /**
        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);        */


        // Formulaire de changement de mot de passe
        $passwordForm = $this->createForm(ChangePasswordType::class);
        $passwordForm->handleRequest($request);

        // Gestion du formulaire de profil
        if ($profileForm->isSubmitted() && $profileForm->isValid()) {
            $em->flush();

            $this->addFlash('success', '✅ Votre profil a été mis à jour avec succès.');

            return $this->redirectToRoute('app_account_edit');
        }

        // Gestion du formulaire de mot de passe
        if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
            $plainPassword = $passwordForm->get('plainPassword')->getData();
            $user->setPassword($hasher->hashPassword($user, $plainPassword));
            $em->flush();

            $this->addFlash('success', '🔒 Votre mot de passe a été modifié avec succès.');

            return $this->redirectToRoute('app_account_edit');

          /**  $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_account');
        }

        return $this->render('account/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Changer mon mot de passe
     */
    /**#[Route('/mon-compte/changer-mot-de-passe', name: 'app_account_change_password', methods: ['GET', 'POST'])]
    public function changePassword(
        Request                     $request,
        UserPasswordHasherInterface $hasher,
        EntityManagerInterface      $em
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            /** $plainPassword = (string)$form->get('plainPassword')->getData();
            $user->setPassword($hasher->hashPassword($user, $plainPassword));
            $em->flush();

            $this->addFlash('success', 'Mot de passe modifié avec succès.');
            return $this->redirectToRoute('app_account'); */

        }

        return $this->render('account/edit_account.html.twig', [
            'profileForm' => $profileForm->createView(),
            'passwordForm' => $passwordForm->createView(),
        ]);
    }

    /**
     * Supprimer mon compte (action irréversible)
     * — Requiere: <form method="post" action="{{ path('account_delete') }}"> + CSRF
     */
    #[Route('/mon-compte/supprimer', name: 'app_account_delete', methods: ['POST'])]
    public function delete(Request $request, EntityManagerInterface $em, EventRepository $eventRepo): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        if (!$this->isCsrfTokenValid('delete_account', $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_account');
        }

        $em->beginTransaction();
        try {
            // Si elegiste la Opción B, reasigna aquí.
            // Opción A (SET NULL) no requiere nada extra.

            $em->remove($user);
            $em->flush();
            $em->commit();

            $this->addFlash('success', 'Votre compte a été supprimé.');
            return $this->redirectToRoute('app_home');
        } catch (\Throwable $e) {
            $em->rollback();
            $this->addFlash('danger', 'Impossible de supprimer le compte : des données y sont encore liées.');
            return $this->redirectToRoute('app_account');
        }
    }
}
