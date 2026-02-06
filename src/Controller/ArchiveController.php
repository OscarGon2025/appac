<?php

namespace App\Controller;

use App\Entity\Document;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArchiveController extends AbstractController
{
    #[Route('/archives', name: 'app_archives')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Récupérer uniquement les documents de type "archive"
        $archives = $doctrine->getRepository(Document::class)
            ->findBy(['type' => 'archive']);

        // Passer la variable au template
        return $this->render('public/archives.html.twig', [
            'archives' => $archives,
        ]);
    }
}

