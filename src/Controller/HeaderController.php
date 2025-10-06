<?php

namespace App\Controller;

use App\Service\OpenMeteoService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

final class HeaderController extends AbstractController
{
    public function __construct(
        #[Autowire(param: 'app.weather_lat')] private float $weatherLat,
        #[Autowire(param: 'app.weather_lon')] private float $weatherLon,
        #[Autowire(param: 'app.tide_lat')]    private float $tideLat,
        #[Autowire(param: 'app.tide_lon')]    private float $tideLon,
    ) {}

    #[Route('/_header', name: 'site_header', methods: ['GET'])]
    public function siteHeader(OpenMeteoService $om): Response
    {
        $weather = $om->getCurrentWeather($this->weatherLat, $this->weatherLon);
        $tide    = $om->getNextTide($this->tideLat, $this->tideLon);

        return $this->render('partials/site_header.html.twig', [
            'header' => ['weather' => $weather, 'tide' => $tide],
        ]);
    }
}
