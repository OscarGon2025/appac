<?php

namespace App\Controller;

use App\Repository\AnnouncementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AnnouncementPopupController extends AbstractController
{
    #[Route('/_site/announcement-popup', name: 'site_announcement_popup', methods: ['GET'])]
    public function __invoke(AnnouncementRepository $announcements): Response
    {
        $announcement = $announcements->findCurrentlyActive();

        if (null === $announcement) {
            return new Response('');
        }

        return $this->render('partials/_announcement_popup.html.twig', [
            'announcement' => $announcement,
        ]);
    }
}
