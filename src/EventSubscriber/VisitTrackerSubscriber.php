<?php

namespace App\EventSubscriber;

use App\Repository\SiteVisitRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * FR: Compteur de visites simple pour le tableau de bord admin.
 * On ne compte qu'un ensemble de pages "publiques" connues (pas les routes
 * admin, assets, webhooks, requêtes AJAX/Turbo internes, etc.) pour éviter
 * de fausser les chiffres avec du trafic technique.
 */
class VisitTrackerSubscriber implements EventSubscriberInterface
{
    private const TRACKED_ROUTES = [
        'app_home',
        'actus_index',
        'actus_show',
        'app_event_index',
        'app_event_show',
        'app_classified_index',
        'app_classified_show',
        'app_archives',
        'board_member_organigram',
        'app_reglementation',
        'app_statuts',
        'app_membre',
        'gallery_index',
        'app_adhesion',
        'app_register',
        'app_login',
    ];

    public function __construct(private readonly SiteVisitRepository $siteVisits) {}

    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }

    public function onKernelResponse(ResponseEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();

        if (!$request->isMethod('GET')) {
            return;
        }

        if ($request->isXmlHttpRequest() || $request->headers->has('Turbo-Frame')) {
            return;
        }

        if (!\in_array($request->attributes->get('_route'), self::TRACKED_ROUTES, true)) {
            return;
        }

        if (!$event->getResponse()->isSuccessful()) {
            return;
        }

        $this->siteVisits->incrementToday();
    }
}
