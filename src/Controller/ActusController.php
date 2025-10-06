<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/actus', name: 'actus_')]
class ActusController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ArticleRepository $articles): Response
    {

        $list = $articles->createQueryBuilder('a')
            ->andWhere('a.publishedAt IS NULL OR a.publishedAt <= :now')
            ->setParameter('now', new \DateTimeImmutable())
            ->orderBy('a.pinned', 'DESC')
            ->addOrderBy('a.publishedAt', 'DESC')
            ->addOrderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('actus/index.html.twig', [
            'articles' => $list,
        ]);
    }

    #[Route('/{slug}', name: 'show', methods: ['GET'], requirements: ['slug' => '[a-z0-9\-]+' ])]
    public function show(string $slug, ArticleRepository $articles): Response
    {
        $article = $articles->findOneBy(['slug' => $slug]);
        if (
            !$article ||
            !$article->isPublished() ||
            ($article->getPublishedAt() && $article->getPublishedAt() > new \DateTimeImmutable())
        ) {
            throw $this->createNotFoundException();
        }

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
