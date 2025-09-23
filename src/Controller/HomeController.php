<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(ArticleRepository $articles): Response
    {
        //  #actus --> home
        $latest = $articles->latestPublished(6); // nombre d'áctus

        return $this->render('public/home.html.twig', [
            'actus' => $latest,
        ]);
    }
}
