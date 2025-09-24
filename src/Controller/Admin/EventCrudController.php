<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    TextField, TextEditorField, SlugField, ChoiceField, BooleanField,
    DateTimeField, IntegerField, NumberField, AssociationField
};

final class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Événement')
            ->setEntityLabelInPlural('Événements')
            ->setDefaultSort(['startAt' => 'DESC'])
            ->setSearchFields(['title', 'description', 'locationName', 'slug'])
            ->showEntityActionsInlined();
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');
        yield SlugField::new('slug')->setFormTypeOption('disabled', true)->hideOnIndex();

        yield TextEditorField::new('description', 'Description');

        yield ChoiceField::new('type', 'Type')->setChoices([
            'Sortie' => 'OUTING',
            'Régate' => 'REGATTA',
            'Réunion' => 'MEETING',
            'Autre'   => 'OTHER',
        ])->renderAsBadges();

        yield BooleanField::new('registrationOpen', 'Inscriptions ouvertes');
        yield BooleanField::new('isMembersOnly', 'Réservé aux membres')->hideOnIndex();

        yield DateTimeField::new('startAt', 'Début');
        yield DateTimeField::new('endAt', 'Fin')->setFormTypeOption('required', false);

        yield TextField::new('locationName', 'Lieu')->hideOnIndex();
        yield NumberField::new('lat')->setNumDecimals(6)->hideOnIndex();
        yield NumberField::new('lng')->setNumDecimals(6)->hideOnIndex();

        yield IntegerField::new('maxParticipants', 'Capacité')->setFormTypeOption('required', false);

        yield ChoiceField::new('status', 'Statut')->setChoices([
            'Brouillon' => 'DRAFT',
            'Publié'    => 'PUBLISHED',
            'Annulé'    => 'CANCELLED',
        ])->renderAsBadges();

        yield AssociationField::new('createdBy', 'Créé par');

        yield DateTimeField::new('createdAt', 'Créé le')->hideOnForm();
        yield DateTimeField::new('updatedAt', 'Modifié le')->hideOnForm();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('type')
            ->add('status')
            ->add('registrationOpen')
            ->add('isMembersOnly')
            ->add('startAt')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedAt');
    }
}
