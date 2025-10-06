<?php

//
// namespace App\Controller;
//
// use App\Entity\User;
// use App\Form\LoginFormType;
// use App\Form\RegistrationFormType;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\Form\FormFactoryInterface;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Mailer\MailerInterface;
// use Symfony\Component\Mime\Email;
// use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
// use Symfony\Component\RateLimiter\RateLimiterFactory;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
//
// class SecurityController extends AbstractController
// {
//    #[Route('/inscription', name: 'app_register')]
//    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer, RateLimiterFactory $registerLimiter): Response
//    {
//        $user = new User();
//        $form = $this->createForm(RegistrationFormType::class, $user);
//        $form->handleRequest($request);
//
//        // Pour limiter les tentatives par IP
//        $limiter = $registerLimiter->create($request->getClientIp());
//        if (!$limiter->consume(1)->isAccepted()) {
//            $this->addFlash('error', 'Vous avez atteint le nombre maximum de tentatives. Réessayez plus tard.');
//
//            return $this->redirectToRoute('app_register');
//        }
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            // vérifier le token reCAPTCHA côté serveur
//            $recaptchaToken = $form->get('captcha')->getData();
//            $recaptchaSecret = $this->getParameter('google_recaptcha_secret');
//
//            $response = file_get_contents(
//                "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaToken"
//            );
//            $result = json_decode($response, true);
//
//            if (!$result['success'] || $result['score'] < 0.5) {
//                $form->addError(new FormError('Échec du reCAPTCHA. Vous semblez être un robot.'));
//            } else {
//                // Hash du mot de passe
//                $user->setPassword(
//                    $passwordHasher->hashPassword($user, $form->get('password')->getData())
//                );
//
//                // Compte non approuvé par défaut
//                $user->setIsApproved(false);
//
//                $em->persist($user);
//                $em->flush();
//
//                // Envoi mail à l’admin pour valider
//                $email = (new Email())
//                    ->from('no-reply@mon-site.com')
//                    ->to('admin@mon-site.com')
//                    ->subject('Nouvelle inscription à valider')
//                    ->html(sprintf(
//                        'Un nouvel utilisateur s’est inscrit : %s (%s).<br>
//                    Veuillez valider son compte via l’admin.',
//                        $user->getFullName(),
//                        $user->getEmail()
//                    ));
//
//                $mailer->send($email);
//
//                $this->addFlash('success', 'Compte créé avec succès ! Vous pouvez maintenant vous connecter.');
//
//                return $this->redirectToRoute('app_login'); // route de login
//            }
//
//            dd($this->getParameter('google_recaptcha_site'));
//
// //            return $this->render('security/register.html.twig', [
// //                'registrationForm' => $form->createView(),
// //            ]);
//        }
//
//        return $this->render('security/register.html.twig', [
//            'registrationForm' => $form->createView(),
//        ]);
//    }
//
//    //    #[Route('/login', name: 'app_login')]
//    //    public function login(AuthenticationUtils $authenticationUtils, FormFactoryInterface $formFactory): Response
//    //    {
//    //        // récupérer l'erreur si login échoue
//    //        $error = $authenticationUtils->getLastAuthenticationError();
//    //        $lastUsername = $authenticationUtils->getLastUsername();
//    //
//    //        // Création du mini formulaire avec le captcha
//    //        $form = $formFactory->create(LoginFormType::class);
//    //
//    //        return $this->render('security/login.html.twig', [
//    //            'last_username' => $lastUsername,
//    //            'error' => $error,
//    //            'loginForm' => $form->createView(),
//    //        ]);
//    //    }
//
//    #[Route('/login', name: 'app_login')]
//    public function login(AuthenticationUtils $authenticationUtils, Request $request, RateLimiterFactory $loginLimiter): Response
//    {
//        //        if ($this->getUser()) {
//        //            if (!$this->getUser()->isApproved()) {
//        //                $this->addFlash('warning', 'Votre compte est en attente de validation.');
//        //                return $this->redirectToRoute('app_home');
//        //            }
//        //            return $this->redirectToRoute('app_membre');
//        //        }
//        //
//        //        // Rate Limiter
//        //        $limiter = $loginLimiter->create($request->getClientIp());
//        //        if (!$limiter->consume(1)->isAccepted()) {
//        //            $this->addFlash('danger', 'Trop de tentatives de connexion, réessayez plus tard.');
//        //            return $this->redirectToRoute('app_login');
//        //        }
//
//        $error = $authenticationUtils->getLastAuthenticationError();
//        $lastUsername = $authenticationUtils->getLastUsername();
//
//        return $this->render('security/login.html.twig', [
//            'last_username' => $lastUsername,
//            'error' => $error,
//        ]);
//    }
//
//    #[Route('/logout', name: 'app_logout')]
//    public function logout(): void
//    {
//        // La méthode peut rester vide car Symfony gère la déconnexion automatiquement
//        throw new \Exception();
//    }
//
//    #[Route('/membre', name: 'app_membre')]
//    public function membre(): Response
//    {
//        $user = $this->getUser();
//        if (!$user || !$user->isApproved()) {
//            $this->addFlash('warning', 'Vous devez être approuvé pour accéder à cette page.');
//
//            return $this->redirectToRoute('app_home');
//        }
//
//        return $this->render('membre.html.twig');
//    }
// }

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
        MailerInterface $mailer,
        RateLimiterFactory $registerLimiter,
    ): Response {
        // Récupération des clés reCAPTCHA depuis les paramètres
        $recaptchaSite = $this->getParameter('recaptcha_site');
        $recaptchaSecret = $this->getParameter('recaptcha_secret');

        // Limiter les tentatives par IP
        $limiter = $registerLimiter->create($request->getClientIp());
        if (!$limiter->consume(1)->isAccepted()) {
            $this->addFlash('error', 'Vous avez atteint le nombre maximum de tentatives. Réessayez plus tard.');

            return $this->redirectToRoute('app_register'); // redirection si limite dépassée
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier le token reCAPTCHA côté serveur
            $recaptchaToken = $form->get('captcha')->getData();

            $response = file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaToken"
            );
            $result = json_decode($response, true);

            if (!$result['success'] || $result['score'] < 0.5) {
                $form->addError(new FormError('Échec du reCAPTCHA. Vous semblez être un robot.'));
            } else {
                // Hash du mot de passe
                $user->setPassword(
                    $passwordHasher->hashPassword($user, $form->get('password')->getData())
                );

                // Compte non approuvé par défaut
                $user->setIsApproved(false);

                // Persist et flush avant l’envoi du mail
                $em->persist($user);
                $em->flush();

                // Envoi mail à l’admin pour validation
                $email = (new Email())
                    ->from('no-reply@mon-site.com')
                    ->to('admin@mon-site.com')
                    ->subject('Nouvelle inscription à valider')
                    ->html(sprintf(
                        'Un nouvel utilisateur s’est inscrit : %s (%s).<br>Veuillez valider son compte via l’admin.',
                        $user->getFullName(),
                        $user->getEmail()
                    ));

                try {
                    $mailer->send($email);
                    $this->addFlash('success', 'Compte créé avec succès ! Vous pouvez maintenant vous connecter. Mail envoyé à l’admin.');
                } catch (\Exception $e) {
                    $this->addFlash('warning', 'Compte créé mais impossible d’envoyer le mail : '.$e->getMessage());
                }

                return $this->redirectToRoute('app_login');
            }
        }

        // Affiche le formulaire même si non soumis ou en cas d'erreur
        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
            'recaptcha_site' => $recaptchaSite, // exposer la clé au template Twig
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l’utilisateur est connecté et approuvé, on le redirige vers l’espace membre
        if ($this->getUser() && $this->getUser()->isApproved()) {
            return $this->redirectToRoute('app_membre');
        }

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
        throw new \Exception('Cette méthode peut rester vide car Symfony gère la déconnexion automatiquement.');
    }

    #[Route('/membre', name: 'app_membre')]
    public function membre(): Response
    {
        $user = $this->getUser();
        if (!$user || !$user->isApproved()) {
            $this->addFlash('warning', 'Vous devez être approuvé pour accéder à cette page.');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('membre.html.twig');
    }
}
