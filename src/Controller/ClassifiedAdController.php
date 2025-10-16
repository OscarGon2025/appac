<?php

namespace App\Controller;

use App\Entity\ClassifiedAd;
use App\Enum\AdStatus;
use App\Service\ClassifiedAdService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ClassifiedAdController extends AbstractController
{
    /**
     * Liste paginée + filtres de petites annonces approuvées.
     *
     * URL: /annonces
     * Query params:
     *   - q         : texte libre (titre + description)
     *   - min       : prix min (int)
     *   - max       : prix max (int)
     *   - condition : état/condition (string/enum stringifié)
     *   - location  : ville/zone (contient)
     *   - sort      : recent|price_asc|price_desc
     *   - page      : numéro de page (>=1)
     *   - perPage   : éléments par page (>=1)
     */
    #[Route('/annonces', name: 'app_classified_index', methods: ['GET'])]
    public function index(Request $request, ClassifiedAdService $service): Response
    {
        $query = $request->query->all();
        $result = $service->search($query);

        return $this->render('classified_ad/index.html.twig', [
            'ads'      => $result['items'],
            'total'    => $result['total'],
            'pages'    => $result['pages'],
            'page'     => $result['page'],
            'perPage'  => $result['perPage'],

            // Reinyectar filtros en el formulario
            'q'         => $query['q']         ?? null,
            'min'       => $query['min']       ?? null,
            'max'       => $query['max']       ?? null,
            'condition' => $query['condition'] ?? null,
            'location'  => $query['location']  ?? null,
            'sort'      => $query['sort']      ?? 'recent',
        ]);
    }

    /**
     * (Fase 2) Détail d’une annonce.
     * Activa esta ruta cuando tengas la plantilla show lista.
     * - Muestra sólo APPROVED al público.
     * - Admin/propietario pueden ver otras (ajusta la lógica si trabajas con ownership).
     */
    #[Route('/annonces/{id<\d+>}', name: 'app_classified_show', methods: ['GET'])]
    public function show(ClassifiedAd $ad): Response
    {
        // Si no está aprobada, restringimos salvo que sea admin
        if ($ad->getStatus() !== AdStatus::APPROVED && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createNotFoundException();
        }

        return $this->render('classified_ad/show.html.twig', [
            'ad' => $ad,
        ]);
    }
}
