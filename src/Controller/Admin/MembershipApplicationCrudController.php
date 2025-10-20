<?php

namespace App\Controller\Admin;

use App\Entity\MembershipApplication;
use App\Enum\ApplicationStatus;
use App\Service\MembershipApprover;

use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class MembershipApplicationCrudController extends AbstractCrudController
{
    public function __construct(
        private readonly MembershipApprover $approver,
        private readonly AdminUrlGenerator $adminUrlGenerator,
    ) {}

    public static function getEntityFqcn(): string
    {
        return MembershipApplication::class;
    }

    /**
     * FR: Ajoute l’action “Valider l’adhésion” sur l’index et la page détail.
     * - Visible seulement si la demande est au statut PENDING.
     * - Droit appliqué au niveau d’Actions via setPermission().
     */
    public function configureActions(Actions $actions): Actions
    {
        $approve = Action::new('approveAdhesion', 'Valider l’adhésion')
            ->linkToCrudAction('approveAdhesion')
            ->setIcon('fa fa-check')
            ->setCssClass('btn btn-success')
            ->displayIf(fn (MembershipApplication $app) => $app->getStatus() === ApplicationStatus::PENDING);

        return $actions
            ->add(Crud::PAGE_INDEX, $approve)
            ->add(Crud::PAGE_DETAIL, $approve)
            ->setPermission('approveAdhesion', 'ROLE_ADMIN');
    }

    /**
     * FR: Champs — formate le statut (enum) pour index/détail et fournit des
     * choix lisibles dans le formulaire.
     */
    public function configureFields(string $pageName): iterable
    {

        $statusForm = ChoiceField::new('status', 'Statut')
            ->setChoices(\array_combine(
                \array_map(fn($c) => $c->label(), ApplicationStatus::cases()),
                ApplicationStatus::cases()
            ))
            ->setFormTypeOption('choice_label', fn(ApplicationStatus $c) => $c->label())
            ->renderAsBadges()
            ->onlyOnForms();


        $statusIndex = TextField::new('statusBadge', 'Statut')
            ->renderAsHtml()
            ->onlyOnIndex();


        $statusDetail = TextField::new('statusLabel', 'Statut')
            ->onlyOnDetail();

        yield IdField::new('id')->onlyOnIndex();
        yield TextField::new('firstName', 'Prénom');
        yield TextField::new('lastName', 'Nom');
        yield EmailField::new('email');
        yield TelephoneField::new('phone')->hideOnIndex();
        yield IntegerField::new('targetYear', 'Année');


        yield $statusIndex;
        yield $statusDetail;


        yield $statusForm;

        yield TextareaField::new('message', 'Message')->hideOnIndex();
        yield DateTimeField::new('createdAt', 'Créé le')->onlyOnDetail();
        yield DateTimeField::new('updatedAt', 'MAJ le')->onlyOnDetail();
    }

    /**
     * FR: Labels et tri par défaut.
     */
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Demande d’adhésion')
            ->setEntityLabelInPlural('Demandes d’adhésion')
            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    /**
     * FR: Action “Valider l’adhésion”.
     * - Appelle le service métier et gère les erreurs avec un flash.
     */
    #[IsGranted('ROLE_ADMIN')]
    public function approveAdhesion(AdminContext $context): Response
    {
        $entity = $context->getEntity()->getInstance();

        if (!$entity instanceof MembershipApplication) {
            $this->addFlash('danger', 'Type d’entité inattendu.');
            return $this->back($context);
        }

        if ($entity->getStatus() === ApplicationStatus::APPROVED) {
            $this->addFlash('info', 'Cette demande est déjà approuvée.');
            return $this->back($context);
        }

        if ($entity->getStatus() !== ApplicationStatus::PENDING) {
            $this->addFlash('warning', 'Seules les demandes “En attente” peuvent être validées.');
            return $this->back($context);
        }

        try {
            $this->approver->approve($entity);
            $this->addFlash('success', 'Adhésion validée et accès membre accordé.');
        } catch (\Throwable $e) {
            $this->addFlash('danger', 'Une erreur est survenue lors de la validation.');
        }

        return $this->back($context);
    }

    /**
     * FR: Retourne au référent ou à l’index de cette entité.
     */
    private function back(AdminContext $context): RedirectResponse
    {
        if ($ref = $context->getReferrer()) {
            return $this->redirect($ref);
        }

        $url = $this->adminUrlGenerator
            ->setController(self::class)
            ->setAction(Crud::PAGE_INDEX)
            ->generateUrl();

        return $this->redirect($url);
    }
}
