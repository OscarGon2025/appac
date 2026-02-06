<?php

namespace App\Controller;

use App\Entity\Document;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StatuteController extends AbstractController
{
    #[Route('/statuts', name: 'app_statuts')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Récupérer uniquement les documents de type "statut"
        $documents = $doctrine->getRepository(Document::class)
            ->findBy(['type' => Document::TYPE_STATUT]);

        // Passer la variable au template
        return $this->render('public/statuts.html.twig', [
            'documents' => $documents,
        ]);
    }

}


