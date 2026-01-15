<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\BoardMember;
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
use App\Entity\User;

use App\Controller\Admin\ArticleCrudController;
use App\Controller\Admin\ClassifiedAdCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\ArchiveImage;



final class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {}

    #[Route('/admin', name: 'admin', methods: ['GET'])]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(ArticleCrudController::class)
            ->generateUrl();

        return $this->redirect($url);
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
        yield MenuItem::linkToCrud('Événements', 'fas fa-calendar', Event::class);
        yield MenuItem::linkToCrud('Pages', 'fas fa-file-alt', Page::class);

        yield MenuItem::section('Médiathèque');
        yield MenuItem::linkToCrud('Albums', 'fas fa-images', Album::class);
        yield MenuItem::linkToCrud('Photos', 'fas fa-image', Photo::class);
        yield MenuItem::linkToCrud('Pièces jointes', 'fas fa-paperclip', ArticleAttachment::class);

        yield MenuItem::section('Organisation');
        yield MenuItem::linkToCrud('Organigramme', 'fas fa-sitemap', BoardMember::class);


        yield MenuItem::section('Archives');
        yield MenuItem::linkToCrud('Photos articles', 'fas fa-archive', ArchiveImage::class);

        yield MenuItem::section('Petites annonces');
        yield MenuItem::linkToCrud('Annonces', 'fas fa-bullhorn', ClassifiedAd::class)
            ->setController(ClassifiedAdCrudController::class);

        yield MenuItem::section('Partenaires & Liens');
        yield MenuItem::linkToCrud('Liens utiles', 'fas fa-link', PartnerLink::class);

        yield MenuItem::section('Adhésions');
        yield MenuItem::linkToCrud('Demandes d’adhésion', 'fas fa-user-plus', MembershipApplication::class);
        yield MenuItem::linkToCrud('Adhésions', 'fas fa-id-card', Membership::class);

        yield MenuItem::section('Inscriptions sorties');
        yield MenuItem::linkToCrud('Demandes de sortie', 'fas fa-ship', OutingRequest::class);

        yield MenuItem::section('Site');
        yield MenuItem::linkToRoute('Voir le site', 'fas fa-globe', 'app_home');

        yield MenuItem::section('Utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
    }
}
