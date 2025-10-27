<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login', methods: ['GET','POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l’utilisateur est connecté et approuvé, on le redirige vers l’espace membre
        if ($this->getUser() && method_exists($this->getUser(), 'isApproved') && $this->getUser()->isApproved()) {
            return $this->redirectToRoute('app_membre');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony gère la déconnexion via le firewall; ce code n'est jamais exécuté.
    }

    #[Route('/membre', name: 'app_membre', methods: ['GET'])]
    public function membre(): Response
    {
        $user = $this->getUser();
        if (!$user || (method_exists($user, 'isApproved') && !$user->isApproved())) {
            $this->addFlash('warning', 'Vous devez être approuvé pour accéder à cette page.');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('membre.html.twig');
    }
}
