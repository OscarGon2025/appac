<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    TextField, TextEditorField, SlugField, BooleanField, DateTimeField
};

final class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Page')
            ->setEntityLabelInPlural('Pages')
            ->setDefaultSort(['updatedAt' => 'DESC'])
            ->setSearchFields(['title', 'body', 'slug'])
            ->showEntityActionsInlined();
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');
        yield SlugField::new('slug')->setFormTypeOption('disabled', true)->hideOnIndex();
        yield TextEditorField::new('body', 'Contenu');
        yield BooleanField::new('isPublished', 'Publié');
        yield BooleanField::new('isMembersOnly', 'Réservé aux membres')->hideOnIndex();
        yield DateTimeField::new('updatedAt', 'Modifié le')->hideOnForm();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('isPublished')
            ->add('isMembersOnly')
            ->add('updatedAt');
    }
}
