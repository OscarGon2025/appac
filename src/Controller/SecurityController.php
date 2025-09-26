<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Mime\Email;

class SecurityController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer)
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hash du mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword($user, $form->get('password')->getData())
            );

            // Compte non approuvé par défaut
            $user->setIsApproved(false);

            $em->persist($user);
            $em->flush();

            // Envoi mail à l’admin pour valider
            $email = (new Email())
                ->from('no-reply@mon-site.com')
                ->to('admin@mon-site.com')
                ->subject('Nouvelle inscription à valider')
                ->html(sprintf(
                    'Un nouvel utilisateur s’est inscrit : %s (%s).<br>
                    Veuillez valider son compte via l’admin.',
                    $user->getFullName(),
                    $user->getEmail()
                ));

            $mailer->send($email);

            $this->addFlash('success', 'Compte créé avec succès ! Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('app_login'); // route de login
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils)
    {
        // récupérer l'erreur si login échoue
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // La méthode peut rester vide car Symfony gère la déconnexion automatiquement
        throw new \Exception();
    }

    #[Route('/membre', name: 'app_membre')]
    public function membre(): Response
    {
        return $this->render('membre.html.twig');
    }
}
