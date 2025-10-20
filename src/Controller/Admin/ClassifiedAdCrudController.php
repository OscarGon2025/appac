<?php

namespace App\Controller\Admin;

use App\Entity\ClassifiedAd;
use App\Enum\AdStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

final class ClassifiedAdCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ClassifiedAd::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // Mapa "etiqueta visible" => enum case (lo necesita ChoiceField)
        $statusChoices = [];
        foreach (AdStatus::cases() as $case) {
            $statusChoices[$case->value] = $case;
        }

        yield TextField::new('title', 'Titre');

        // INDEX: enum como badges (sin cast a string)
        yield ChoiceField::new('status', 'Statut')
            ->setChoices($statusChoices)
            ->renderAsBadges([
                AdStatus::APPROVED->value => 'success',
                AdStatus::PENDING->value  => 'warning',
                AdStatus::REJECTED->value => 'danger',
                AdStatus::ARCHIVED->value => 'secondary',
            ])
            ->onlyOnIndex();

        // DETAIL: enum como texto (ChoiceField ya sabe mostrar el label)
        yield ChoiceField::new('status', 'Statut')
            ->setChoices($statusChoices)
            ->onlyOnDetail();

        // FORM: selección del enum
        yield ChoiceField::new('status', 'Statut')
            ->setChoices($statusChoices)
            ->renderAsNativeWidget()
            ->onlyOnForms();

        // Otros campos
        yield MoneyField::new('price', 'Prix')->setCurrency('EUR')->setStoredAsCents(false);
        yield TextField::new('location', 'Localisation')->hideOnIndex();
        yield TextEditorField::new('description', 'Description')->hideOnIndex();
        yield AssociationField::new('owner', 'Auteur')->hideOnForm(); // si existe relación con User
        yield DateTimeField::new('publishedAt', 'Publiée le')->hideOnForm();
        yield DateTimeField::new('updatedAt', 'Modifiée le')->hideOnForm();
    }
}
