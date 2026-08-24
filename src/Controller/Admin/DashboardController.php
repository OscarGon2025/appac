<?php

namespace App\Controller\Admin;

use App\Entity\Album;
use App\Entity\ArchiveImage;
use App\Entity\Article;
use App\Entity\ArticleAttachment;
use App\Entity\BoardMember;
use App\Entity\ClassifiedAd;
use App\Entity\Document;
use App\Entity\Event;
use App\Entity\Membership;
use App\Entity\MembershipApplication;
use App\Entity\OutingRequest;
use App\Entity\PartnerLink;
use App\Entity\Photo;
use App\Entity\User;
use App\Service\Admin\DashboardStatsProvider;

use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
final class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private readonly DashboardStatsProvider $stats,
    ) {
    }

    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'stats' => $this->stats->getStats(),
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('UPAC Back-Office')
            ->renderContentMaximized()
            ->setFaviconPath('favicon.ico');
    }

    public function configureAssets(): Assets
    {
        return Assets::new()
            ->addCssFile('styles/admin-theme.css')
            ->addJsFile('scripts/admin-picker.js');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::section('Contenus');
        yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Événements', 'fas fa-calendar', Event::class);

        yield MenuItem::section('Médiathèque');
        yield MenuItem::linkToCrud('Albums', 'fas fa-images', Album::class);
        yield MenuItem::linkToCrud('Photos', 'fas fa-image', Photo::class);
        yield MenuItem::linkToCrud('Pièces jointes', 'fas fa-paperclip', ArticleAttachment::class);

        yield MenuItem::section('Organisation');
        yield MenuItem::linkToCrud('Organigramme', 'fas fa-sitemap', BoardMember::class);

        yield MenuItem::section('Photos pour articles');
        yield MenuItem::linkToCrud('Photos articles', 'fas fa-archive', ArchiveImage::class);

        yield MenuItem::section('Documents');
        yield MenuItem::linkToCrud('Archives et Statuts', 'fas fa-file-pdf', Document::class);

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
