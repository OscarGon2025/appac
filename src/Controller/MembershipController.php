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
        $organizationSlug = $this->getParameter('helloasso.organization_slug');
        $formSlug = $this->getParameter('helloasso.form_slug');

        if (!$organizationSlug || !$formSlug) {
            return $this->render('membership/unavailable.html.twig');
        }

        return $this->render('membership/adhesion.html.twig', [
            'organizationSlug' => $organizationSlug,
            'formSlug' => $formSlug,
        ]);
    }

    #[Route('/adhesion/merci', name: 'app_adhesion_thanks')]
    public function thanks(): Response
    {
        return $this->render('membership/thanks.html.twig');
    }
}
