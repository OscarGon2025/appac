<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use EasyCorp\Bundle\EasyAdminBundle\Config\{Crud, Filters};
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{
    TextField, TextEditorField, SlugField, BooleanField, ImageField,
    DateTimeField, AssociationField
};

final class ArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Article')
            ->setEntityLabelInPlural('Articles')
            ->setDefaultSort(['publishedAt' => 'DESC', 'createdAt' => 'DESC'])
            ->setSearchFields(['title', 'content', 'slug'])
            ->showEntityActionsInlined();
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('title', 'Titre');

        // Si usas Gedmo\Slug, mejor no regenerar desde EA; solo mostrar u ocultar:
        yield SlugField::new('slug')->setFormTypeOption('disabled', true)->hideOnIndex();

        yield TextEditorField::new('content', 'Contenu');

        // Ajusta paths si usas VichUploader; si es string simple, puedes dejarlo como TextField.
        // Ejemplo simple con ImageField (carpeta pública):
        yield ImageField::new('cover', 'Image de couverture')
            ->setBasePath('/uploads/articles')
            ->setUploadDir('public/uploads/articles')
            ->setRequired(false)
            ->hideOnIndex(); // en index el nombre no suele ser útil

        yield BooleanField::new('isPublished', 'Publié')->renderAsSwitch(false);
        yield BooleanField::new('isMembersOnly', 'Réservé aux membres')->hideOnIndex();
        yield BooleanField::new('pinned', 'Épinglé');

        yield DateTimeField::new('publishedAt', 'Publié le')->hideOnForm();
        yield AssociationField::new('author', 'Auteur');

        yield DateTimeField::new('createdAt', 'Créé le')->hideOnForm();
        yield DateTimeField::new('updatedAt', 'Modifié le')->hideOnForm();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('isPublished')
            ->add('isMembersOnly')
            ->add('pinned')
            ->add('publishedAt')
            ->add('author')
            ->add('createdAt')
            ->add('updatedAt');
    }
}
