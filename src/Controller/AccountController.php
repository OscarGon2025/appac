<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    // Page du compte utilisateur
    #[Route('/mon-compte', name: 'app_account')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('account/index.html.twig');
    }

    // Modifier profil
    #[Route('/mon-compte/modifier', name: 'app_account_edit')]
    public function edit(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        // Formulaire d’édition du profil
        $profileForm = $this->createForm(UserProfileType::class, $user);
        $profileForm->handleRequest($request);

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
        }

        return $this->render('account/edit_account.html.twig', [
            'profileForm' => $profileForm->createView(),
            'passwordForm' => $passwordForm->createView(),
        ]);
    }
}
