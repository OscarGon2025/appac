<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ReglementationController extends AbstractController
{
    #[Route('/reglementation', name: 'app_reglementation')]
    public function index(): Response
    {
        return $this->render('public/reglementation.html.twig', [
            'controller_name' => 'ReglementationController',
        ]);
    }
}
