<?php

//
// namespace App\Controller\Admin;
//
// use App\Entity\BoardMember;
// use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
// use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
// use Vich\UploaderBundle\Form\Type\VichImageType;
//
// class BoardMemberCrudController extends AbstractCrudController
// {
//    public static function getEntityFqcn(): string
//    {
//        return BoardMember::class;
//    }
//
//    public function configureFields(string $pageName): iterable
//    {
//        yield TextField::new('surname', 'Prénom');
//        yield TextField::new('name', 'Nom');
//        yield TextField::new('role', 'Rôle');
//
//        yield TextField::new('photoFile', 'Photo')
//            ->setFormType(VichImageType::class)
//            ->onlyOnForms();
//
//        yield ImageField::new('photo', 'Photo')
//            ->setBasePath('/uploads/board_members')
//            ->onlyOnIndex();
//    }
// }

namespace App\Controller\Admin;

use App\Entity\BoardMember;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class BoardMemberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BoardMember::class;
    }

    //    public function configureFields(string $pageName): iterable
    //    {
    //        yield IdField::new('id')->onlyOnIndex();
    //
    //        yield TextField::new('surname', 'Nom');
    //        yield TextField::new('name', 'Prénom');
    //        yield TextField::new('role', 'Rôle');
    //
    //        // Champ d’upload avec VichUploader
    //        yield FormField::addPanel('Photo du membre');
    //        yield TextField::new('photoFile', 'Fichier photo')
    //            ->setFormType(VichImageType::class)
    //            ->onlyOnForms();
    //
    //        // Champ pour afficher l’image actuelle
    //        yield ImageField::new('photoName', 'Photo')
    //            ->setBasePath('/uploads/board_members')
    //            ->onlyOnIndex();
    //    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('surname', 'Prénom'),
            TextField::new('name', 'Nom'),
            TextField::new('role', 'Rôle'),

            // Affichage de l'image
            ImageField::new('photoName', 'Photo')
                ->setBasePath('/uploads/board_members')
                ->onlyOnIndex(), // visible seulement dans la liste

            // Upload via VichUploader
            TextField::new('photoFile', 'Photo')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
        ];
    }
}
