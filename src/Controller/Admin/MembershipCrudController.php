<?php

// src/Controller/Admin/MembershipCrudController.php
namespace App\Controller\Admin;

use App\Entity\Membership;
use App\Enum\MembershipStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MembershipCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Membership::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // Campo para formularios (create/edit)
        $statusForm = ChoiceField::new('status', 'Statut')
            // clave visible -> objeto enum
            ->setChoices(\array_combine(
                \array_map(fn($c) => $c->label(), MembershipStatus::cases()),
                MembershipStatus::cases()
            ))
            // cómo se pinta la opción
            ->setFormTypeOption('choice_label', fn(MembershipStatus $c) => $c->label())
            ->renderAsBadges() // badges también en show/edit si aplican
            ->onlyOnForms();

        // Campo para index/detail (lee la etiqueta)
        $statusList = TextField::new('statusLabel', 'Statut')
            ->formatValue(function ($value, $entity) {
                // $entity es tu Membership
                $label = $entity->getStatus()?->label() ?? '—';
                $class = $entity->getStatus()?->badge() ?? 'secondary';
                // devolvemos HTML con badge
                return sprintf('<span class="badge text-bg-%s">%s</span>', $class, $label);
            })
            ->renderAsHtml()
            ->onlyOnIndex();

        return [
            // ...tus otros campos...
            $statusList,
            $statusForm,
        ];
    }
}
