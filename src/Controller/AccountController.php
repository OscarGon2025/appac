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

 final class AccountController extends AbstractController{
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
     #[Route('/mon-compte/modifier', name: 'app_account_edit', methods: ['GET','POST'])]
     public function edit(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
     {
         $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

         /** @var \App\Entity\User $user */
         $user = $this->getUser();

         $profileForm  = $this->createForm(UserProfileType::class, $user);
         $profileForm->handleRequest($request);

         $passwordForm = $this->createForm(ChangePasswordType::class);
         $passwordForm->handleRequest($request);

         // 1) Perfil
         if ($profileForm->isSubmitted() && $profileForm->isValid()) {
             $em->flush();
             $this->addFlash('success', '✅ Profil mis à jour.');
             return $this->redirectToRoute('app_account_edit'); // PRG SOLO aquí
         }

         // 2) Password
         if ($passwordForm->isSubmitted() && $passwordForm->isValid()) {
             $plain = (string) $passwordForm->get('plainPassword')->getData();
             $user->setPassword($hasher->hashPassword($user, $plain));
             $em->flush();
             $this->addFlash('success', '🔒 Mot de passe modifié.');
             return $this->redirectToRoute('app_account_edit'); // PRG SOLO aquí
         }

         // ⬇️ IMPORTANTE: no redirigir aquí; renderizar
         return $this->render('account/edit_account.html.twig', [
             'profileForm'  => $profileForm->createView(),
             'passwordForm' => $passwordForm->createView(),
         ]);
     }
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
