<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Event;
use App\Entity\Page;
use App\Entity\Album;
use App\Entity\Photo;
use App\Entity\ClassifiedAd;
use App\Entity\PartnerLink;
use App\Entity\ArticleAttachment;
use App\Entity\OutingRequest;
use App\Entity\MembershipApplication;
use App\Entity\Membership;

use App\Controller\Admin\ArticleCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AppDashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
    }

    #[Route('/admin', name: 'admin', methods: ['GET'])]
    public function index(): Response
    {
        // Redirige al CRUD de Articles
        $url = $this->adminUrlGenerator
            ->setController(ArticleCrudController::class)
            ->generateUrl();

        return $this->redirect($url);

        // Alternativa:
        // return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('APPAC Back-Office')
            ->renderContentMaximized()
            ->setFaviconPath('favicon.ico');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::section('Contenus');
        yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Evenements', 'fas fa-calendar', Event::class);
        yield MenuItem::linkToCrud('Pages', 'fas fa-file-alt', Page::class);

        yield MenuItem::section('Mediatheque');
        yield MenuItem::linkToCrud('Albums', 'fas fa-images', Album::class);
        yield MenuItem::linkToCrud('Photos', 'fas fa-image', Photo::class);
        yield MenuItem::linkToCrud('Pieces jointes', 'fas fa-paperclip', ArticleAttachment::class);

        yield MenuItem::section('Petites annonces');
        yield MenuItem::linkToCrud('Annonces', 'fas fa-bullhorn', ClassifiedAd::class);

        yield MenuItem::section('Partenaires & Liens');
        yield MenuItem::linkToCrud('Liens utiles', 'fas fa-link', PartnerLink::class);

        yield MenuItem::section('Adhesions');
        yield MenuItem::linkToCrud('Demandes d\'adhesion', 'fas fa-user-plus', MembershipApplication::class);
        yield MenuItem::linkToCrud('Adhesions', 'fas fa-id-card', Membership::class);

        yield MenuItem::section('Inscriptions sorties');
        yield MenuItem::linkToCrud('Demandes de sortie', 'fas fa-ship', OutingRequest::class);

        yield MenuItem::section('Site');
        yield MenuItem::linkToRoute('Voir le site', 'fas fa-globe', 'app_home');
    }
}
