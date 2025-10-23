<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Action, Actions, Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    TextField, TextEditorField, SlugField, ChoiceField, BooleanField,
    DateTimeField, IntegerField, NumberField, AssociationField
};
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Core\User\UserInterface;

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
            ->showEntityActionsInlined()
            // grupos de validación (como en tu entidad)
            ->setFormOptions([
                'validation_groups' => fn(FormInterface $form) =>
                ($form->getData() && null === $form->getData()->getId())
                    ? ['Default', 'create']
                    : ['Default'],
            ]);
    }

    public function configureActions(Actions $actions): Actions
    {
        // ❗ TODAS las acciones del CRUD quedan reservadas a ROLE_ADMIN
        return $actions
            ->setPermission(Action::INDEX,   'ROLE_ADMIN')
            ->setPermission(Action::DETAIL,  'ROLE_ADMIN')
            ->setPermission(Action::NEW,     'ROLE_ADMIN')
            ->setPermission(Action::EDIT,    'ROLE_ADMIN')
            ->setPermission(Action::DELETE,  'ROLE_ADMIN');
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');
        yield SlugField::new('slug', 'Slug')->setTargetFieldName('title')->setFormTypeOption('disabled', true)->hideOnIndex();
        yield TextEditorField::new('description', 'Description');

        yield ChoiceField::new('type', 'Type')->setChoices([
            'Sortie'  => 'OUTING',
            'Régate'  => 'REGATTA',
            'Réunion' => 'MEETING',
            'Autre'   => 'OTHER',
        ])->renderAsBadges();

        yield BooleanField::new('registrationOpen', 'Inscriptions ouvertes');
        yield BooleanField::new('isMembersOnly', 'Réservé aux membres')->hideOnIndex();

        yield DateTimeField::new('startAt', 'Début')->setFormTypeOptions(['widget'=>'single_text','required'=>true,'html5'=>true]);
        yield DateTimeField::new('endAt', 'Fin')->setFormTypeOptions(['widget'=>'single_text','required'=>false,'html5'=>true]);

        yield TextField::new('locationName', 'Lieu')->hideOnIndex();
        yield NumberField::new('lat', 'Latitude')->setNumDecimals(6)->hideOnIndex();
        yield NumberField::new('lng', 'Longitude')->setNumDecimals(6)->hideOnIndex();

        yield IntegerField::new('maxParticipants', 'Capacité')->setFormTypeOption('required', false);

        yield ChoiceField::new('status', 'Statut')->setChoices([
            'Brouillon' => 'DRAFT',
            'Publié'    => 'PUBLISHED',
            'Annulé'    => 'CANCELLED',
        ])->renderAsBadges();

        yield AssociationField::new('createdBy', 'Créé par')->hideOnForm();
        yield DateTimeField::new('createdAt', 'Créé le')->hideOnForm();
        yield DateTimeField::new('updatedAt', 'Modifié le')->hideOnForm();
    }

    // Auto-asigna el creador (admin conectado)
    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if ($entityInstance instanceof Event && null === $entityInstance->getCreatedBy()) {
            $user = $this->getUser();
            if ($user instanceof UserInterface) {
                $entityInstance->setCreatedBy($user);
            }
        }
        parent::persistEntity($em, $entityInstance);
    }
}
