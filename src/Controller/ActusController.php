<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/actus', name: 'actus_')]
class ActusController extends AbstractController
{
    #[Route('', name: 'index', methods: ['GET'])]
    public function index(UrlGeneratorInterface $urlGen): RedirectResponse
    {
        // Redirige a la home con ancla #actus
        $url = $urlGen->generate('app_home');
        return $this->redirect($url . '#actus');
    }

    #[Route('/{slug}', name: 'show', methods: ['GET'])]
    public function show(string $slug, ArticleRepository $articles): Response
    {
        $article = $articles->findOneBy(['slug' => $slug]);
        if (!$article || !$article->isPublished() || ($article->getPublishedAt() && $article->getPublishedAt() > new \DateTimeImmutable())) {
            throw $this->createNotFoundException();
        }

        // Si es “solo miembros”, aplicamos la regla (login + membership)
        if ($article->isMembersOnly()) {
            if (!$this->getUser()) {
                $this->addFlash('warning', 'Contenu réservé aux membres. Connectez-vous pour continuer.');
                return $this->redirectToRoute('app_login');
            }
            $this->denyAccessUnlessGranted('VIEW', $article);
        }

        return $this->render('actus/show.html.twig', [
            'article' => $article,
        ]);
    }
}
