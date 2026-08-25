<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function __construct(string $environment, bool $debug)
    {
        // Le site est destiné à un public français (UPAC) : sans ceci, PHP utilise
        // UTC par défaut alors que tous les formulaires admin (dates d'événements,
        // d'annonces...) sont saisis en heure de Paris, ce qui décale silencieusement
        // les comparaisons "maintenant" de 1 à 2h selon la saison.
        date_default_timezone_set('Europe/Paris');

        parent::__construct($environment, $debug);
    }
}
