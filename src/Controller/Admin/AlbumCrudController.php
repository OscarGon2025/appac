<?php
//
//namespace App\Controller\Admin;
//
//use App\Entity\Album;
//use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
//use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
//use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, TextEditorField, BooleanField, AssociationField};
//
//class AlbumCrudController extends AbstractCrudController
//{
//    public static function getEntityFqcn(): string
//    {
//        return Album::class;
//    }
//
//    public function configureCrud(Crud $crud): Crud
//    {
//        return $crud
//            ->setEntityLabelInSingular('Album')
//            ->setEntityLabelInPlural('Albums')
//            ->setDefaultSort(['createdAt' => 'DESC'])
//            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des albums');
//    }
//
//    public function configureFields(string $pageName): iterable
//    {
//        yield IdField::new('id')->onlyOnIndex();
//        yield TextField::new('title', 'Titre');
//        yield TextEditorField::new('description', 'Description');
//        yield BooleanField::new('isPrivate', 'Privé (réservé aux membres)');
//        // Choix du parent pour créer un sous-album
//        yield AssociationField::new('parent', 'Album parent')
//            ->setRequired(false)
//            ->setFormTypeOptions([
//                'placeholder' => 'Aucun album parent (album principal)',
//            ])
//            ->hideOnIndex();
//        // Affichage hiérarchique des sous-albums sur la vue détail
//        yield AssociationField::new('children', 'Sous-albums')
//            ->setTemplatePath('admin/fields/album_hierarchy.html.twig')
//            ->onlyOnDetail();
//        // Liste des photos liées à l'album (lecture seule)
//        yield AssociationField::new('photos', 'Photos')
//            ->onlyOnDetail();
//    }
//}


namespace App\Controller\Admin;

use App\Entity\Album;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\{IdField, TextField, TextEditorField, BooleanField, AssociationField};

class AlbumCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Album::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Album')
            ->setEntityLabelInPlural('Albums')
            ->setDefaultSort(['createdAt' => 'DESC'])
            ->setPageTitle(Crud::PAGE_INDEX, 'Liste des albums')
            ->setPageTitle(Crud::PAGE_NEW, 'Créer un album')
            ->setPageTitle(Crud::PAGE_EDIT, 'Modifier un album')
            ->setPageTitle(Crud::PAGE_DETAIL, 'Détail de l\'album')
            ->overrideTemplates(['crud/index' => 'admin/album/index_hierarchy.html.twig',]);
    }

    public function configureFields(string $pageName): iterable
    {
        // Champ ID sur l'index
        yield IdField::new('id')->onlyOnIndex();

        // Titre et description
        yield TextField::new('title', 'Titre');
        yield TextEditorField::new('description', 'Description');

        yield AssociationField::new('parent', 'Appartient à l\'album')
            ->setRequired(false)
            ->onlyOnIndex();

        // Privé/public
        yield BooleanField::new('isPrivate', 'Privé (réservé aux membres)');

        // Choix du parent pour créer un sous-album dans détail ou création
        yield AssociationField::new('parent', 'Album parent')
            ->setRequired(false)
            ->setFormTypeOptions([
                'placeholder' => 'Aucun album parent (album principal)',
            ])
            ->hideOnIndex();

        // Affichage hiérarchique des sous-albums sur la vue détail
        yield AssociationField::new('children', 'Sous-albums')
            ->setTemplatePath('admin/fields/album_hierarchy.html.twig')
            ->onlyOnDetail();

    }
}
