<?php

namespace App\Controller\Admin;

use App\Entity\Membership;
use App\Enum\MembershipStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

final class MembershipCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Membership::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Adhésion')
            ->setEntityLabelInPlural('Adhésions')
            ->setDefaultSort(['year' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {

        $user = AssociationField::new('user', 'Membre')
            ->setFormTypeOption('choice_label', fn($user) => $user->getFullName() ?? $user->getEmail());


        $statusIndex = TextField::new('statusBadge', 'Statut')
            ->renderAsHtml()
            ->onlyOnIndex();

        $statusDetail = TextField::new('statusLabel', 'Statut')->onlyOnDetail();

        $statusForm = ChoiceField::new('status', 'Statut')
            ->setChoices(\array_combine(
                \array_map(fn($c) => $c->label(), MembershipStatus::cases()),
                MembershipStatus::cases()
            ))
            ->setFormTypeOption('choice_label', fn(MembershipStatus $c) => $c->label())
            ->renderAsBadges()
            ->onlyOnForms();

        yield IntegerField::new('year', 'Année');
        yield $user;
        yield $statusIndex;
        yield $statusDetail;
        yield $statusForm;
    }
}
