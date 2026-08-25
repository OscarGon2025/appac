<?php

namespace App\Controller\Admin;

use App\Entity\Announcement;
use App\Enum\AnnouncementFrequency;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    BooleanField, ChoiceField, DateTimeField, Field, FormField, ImageField, TextField, TextareaField
};
use Vich\UploaderBundle\Form\Type\VichImageType;

final class AnnouncementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Announcement::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Annonce (popup)')
            ->setEntityLabelInPlural('Annonces (popup)')
            ->setDefaultSort(['updatedAt' => 'DESC'])
            ->setSearchFields(['title', 'bodyText'])
            ->setHelp('index', 'Une seule annonce active (et dans sa période) est affichée à la fois : la plus récemment modifiée.')
            ->showEntityActionsInlined();
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre (repère interne + affiché si le champ n\'est pas vide)');

        yield FormField::addPanel('Image');
        yield Field::new('imageFile')
            ->setFormType(VichImageType::class)
            ->setLabel('Image du popup')
            ->setHelp('Elle s\'ajustera automatiquement à l\'écran (mobile, tablette, ordinateur) sans être déformée.')
            ->onlyOnForms();
        yield ImageField::new('imageFileName')
            ->setBasePath('/uploads/announcements')
            ->setLabel('Aperçu')
            ->onlyOnIndex();

        yield FormField::addPanel('Contenu texte (optionnel, en plus ou à la place de l\'image)');
        yield TextareaField::new('bodyText', 'Message')->hideOnIndex();

        yield FormField::addPanel('Lien (optionnel)');
        yield TextField::new('linkUrl', 'URL du lien')
            ->setHelp('Si renseignée, l\'annonce devient cliquable.')
            ->hideOnIndex();
        yield TextField::new('linkLabel', 'Texte du bouton')
            ->setHelp('Par défaut : "En savoir plus" si une URL est renseignée.')
            ->hideOnIndex();

        yield FormField::addPanel('Diffusion');
        yield BooleanField::new('isActive', 'Active')->renderAsSwitch(false);
        yield ChoiceField::new('frequency', 'Fréquence d\'affichage')
            ->setChoices(array_combine(
                array_map(fn(AnnouncementFrequency $f) => $f->label(), AnnouncementFrequency::cases()),
                AnnouncementFrequency::cases()
            ))
            ->setFormTypeOption('choice_value', fn(?AnnouncementFrequency $f) => $f?->value)
            ->renderAsBadges();
        yield DateTimeField::new('startAt', 'Début (optionnel)')
            ->setFormTypeOptions(['widget' => 'single_text', 'required' => false, 'html5' => true])
            ->hideOnIndex();
        yield DateTimeField::new('endAt', 'Fin (optionnel)')
            ->setFormTypeOptions(['widget' => 'single_text', 'required' => false, 'html5' => true])
            ->hideOnIndex();

        yield DateTimeField::new('updatedAt', 'Modifiée le')->hideOnForm();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('isActive')
            ->add('frequency')
            ->add('startAt')
            ->add('endAt');
    }
}
