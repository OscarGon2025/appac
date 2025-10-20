<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class MembershipController extends AbstractController
{
    #[Route('/adhesion', name: 'app_adhesion')]
    public function adhesion(): Response
    {
        return $this->render('membership/adhesion.html.twig', [
            'organizationSlug' => $this->getParameter('helloasso.organization_slug'),
            'formSlug'         => $this->getParameter('helloasso.form_slug'),
        ]);
    }

    #[Route('/adhesion/merci', name: 'app_adhesion_thanks')]
    public function thanks(): Response
    {
        return $this->render('membership/thanks.html.twig');
    }
}
