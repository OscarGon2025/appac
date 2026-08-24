<?php

namespace App\Controller\Admin;

use App\Entity\OutingRequest;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    AssociationField, ChoiceField, DateTimeField, IdField, IntegerField, TextareaField, TextField
};

class OutingRequestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OutingRequest::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Demande de sortie')
            ->setEntityLabelInPlural('Demandes de sortie')
            ->setDefaultSort(['createdAt' => 'DESC'])
            ->setSearchFields(['contactName', 'email', 'phone', 'guestNames', 'message'])
            ->showEntityActionsInlined();
    }

    public function configureFields(string $pageName): iterable
    {
        yield IdField::new('id')->hideOnForm();
        yield AssociationField::new('event', 'Événement');
        yield AssociationField::new('user', 'Membre')->hideOnIndex();

        yield IntegerField::new('seats', 'Places');
        yield TextField::new('contactName', 'Contact');
        yield TextField::new('email', 'Email');
        yield TextField::new('phone', 'Téléphone')->hideOnIndex();
        yield TextField::new('emergencyPhone', 'Tél. urgence')->hideOnIndex();
        yield TextareaField::new('guestNames', 'Invités')->hideOnIndex();
        yield TextareaField::new('message', 'Message')->hideOnIndex();

        yield ChoiceField::new('status', 'Statut')->setChoices([
            'En attente' => OutingRequest::STATUS_PENDING,
            'Confirmée'  => OutingRequest::STATUS_CONFIRMED,
            'Annulée'    => OutingRequest::STATUS_CANCELLED,
        ])->renderAsBadges([
            OutingRequest::STATUS_PENDING => 'warning',
            OutingRequest::STATUS_CONFIRMED => 'success',
            OutingRequest::STATUS_CANCELLED => 'danger',
        ]);

        yield DateTimeField::new('createdAt', 'Créée le')->hideOnForm();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('event')
            ->add('status')
            ->add('createdAt');
    }
}
