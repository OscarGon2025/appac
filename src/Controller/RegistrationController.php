<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

final class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register', methods: ['GET','POST'])]
    public function register(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = new User();

        // Rol por defecto
        if (method_exists($user, 'setRoles')) {
            $user->setRoles(['ROLE_USER']);
        }

        // Si tu User tiene "aprobación" manual
        if (method_exists($user, 'setIsApproved')) {
            $user->setIsApproved(false);
        }

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Lee el campo correcto según tu FormType (preferible 'plainPassword' con mapped=false)
            $plain = $form->has('plainPassword')
                ? (string) $form->get('plainPassword')->getData()
                : (string) $form->get('password')->getData();

            if ($plain === '') {
                $this->addFlash('danger', 'Le mot de passe est requis.');
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }

            // Hash y set
            $user->setPassword($passwordHasher->hashPassword($user, $plain));

            try {
                $em->persist($user);
                $em->flush();
            } catch (\Throwable $e) {
                // Unicidad email u otros fallos de DB
                $this->addFlash('danger', 'Impossible de créer le compte (email déjà utilisé ?).');
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }

            $this->addFlash('success', 'Compte créé avec succès ! ✅');
            return $this->redirectToRoute('app_adhesion'); // o 'app_home' si prefieres
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
