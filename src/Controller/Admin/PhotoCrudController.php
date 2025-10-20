<?php

//
// namespace App\Controller\Admin;
//
// use App\Entity\Photo;
// use App\Enum\MediaVisibility;
// use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
// use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
// use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
// use Vich\UploaderBundle\Form\Type\VichImageType;
//
// class PhotoCrudController extends AbstractCrudController
// {
//    public static function getEntityFqcn(): string
//    {
//        return Photo::class;
//    }
//
//    public function configureFields(string $pageName): iterable
//    {
//        // Champ image miniature visible dans la liste
//        $thumbnail = ImageField::new('imageName', 'Aperçu')
//            ->setBasePath('/uploads/photos')
//            ->onlyOnIndex()
//            ->setCssClass('ea-thumbnail');
//
//        // Champ pour uploader l’image dans les formulaires
//        $uploadField = TextField::new('imageFile', 'Fichier image')
//            ->setFormType(VichImageType::class)
//            ->onlyOnForms();
//
//        // Pour uploader des images depuis l'admin
//        $imageFile = ImageField::new('imageName', 'Photo')
//            ->setBasePath('/uploads/photos')
//            ->onlyOnIndex();
//
//        $vichFile = TextField::new('imageFile', 'Fichier')
//            ->setFormType(VichImageType::class)
//            ->onlyOnForms();
//
//        //        return [
//        //            IdField::new('id')->hideOnForm(),
//        //            TextField::new('title', 'Titre'),
//        //            ImageField::new('file')
//        //                ->setBasePath('/uploads/photos')
//        //                ->setUploadDir('public/uploads/photos')
//        //                ->setUploadedFileNamePattern('[uuid].[extension]'),
//        //            TextEditorField::new('description', 'Description')->hideOnIndex(),
//        //            $uploadField,
//        //            $thumbnail,
//        //            $vichFile,
//        //            $imageFile,
//        //
//        //
//        //            ChoiceField::new('visibility', 'Visibilité')
//        //                ->setChoices([
//        //                    'Public' => MediaVisibility::PUBLIC,
//        //                    'Membres' => MediaVisibility::MEMBERS,
//        //                ])
//        //                ->renderAsBadges([
//        //                    MediaVisibility::PUBLIC->value => 'success',
//        //                    MediaVisibility::MEMBERS->value => 'warning',
//        //                ])
//        //                ->formatValue(function ($value) {
//        //                    return $value instanceof MediaVisibility ? $value->label() : $value;
//        //                }),
//        //        ];
//        return [
//            IdField::new('id')->hideOnForm(),
//
//            TextField::new('title', 'Titre'),
//
//            TextEditorField::new('description', 'Description')->hideOnIndex(),
//
//            // Champ pour uploader l’image via VichUploader
//            TextField::new('imageFile', 'Fichier image')
//                ->setFormType(VichImageType::class)
//                ->onlyOnForms(),
//
//            // Affichage de la miniature dans la liste
//            ImageField::new('fileName', 'Aperçu')
//                ->setBasePath('/uploads/photos')
//                ->onlyOnIndex()
//                ->setCssClass('ea-thumbnail'),
//
//            // Visibilité
//            ChoiceField::new('visibility', 'Visibilité')
//                ->setChoices([
//                    'Public' => MediaVisibility::PUBLIC,
//                    'Membres' => MediaVisibility::MEMBERS,
//                ])
//                ->renderAsBadges([
//                    MediaVisibility::PUBLIC->value => 'success',
//                    MediaVisibility::MEMBERS->value => 'warning',
//                ])
//                ->formatValue(fn ($value) => $value instanceof MediaVisibility ? $value->value : $value),
//
//            // Album (optionnel)
//            TextField::new('album', 'Album')->hideOnIndex(),
//        ];
//    }
// }

namespace App\Controller\Admin;

use App\Entity\Album;
use App\Entity\Photo;
use App\Enum\MediaVisibility;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // Miniature visible uniquement sur les pages index
        $thumbnail = ImageField::new('fileName', 'Aperçu')
            ->setBasePath('/uploads/photos')
            ->onlyOnIndex()
            ->setCssClass('ea-thumbnail');

        // Champ upload pour le formulaire
        $uploadField = TextField::new('imageFile', 'Fichier image')
            ->setFormType(VichImageType::class)
            ->onlyOnForms();

        // Champ titre et description
        $title = TextField::new('title', 'Titre');
        $description = TextEditorField::new('description', 'Description')->hideOnIndex();

        // Champ Album (déroulant avec les albums existants)
        $albumField = AssociationField::new('album', 'Album')
            ->setCrudController(AlbumCrudController::class)
            ->autocomplete() // permet de chercher si beaucoup d’albums
            ->setRequired(false);

        // Champ visibilité (enum)
        $visibilityField = ChoiceField::new('visibility', 'Visibilité')
            ->setChoices([
                'Public' => MediaVisibility::PUBLIC,
                'Membres' => MediaVisibility::MEMBERS,
            ])
            ->renderAsBadges([
                MediaVisibility::PUBLIC->value => 'success',
                MediaVisibility::MEMBERS->value => 'warning',
            ])
            ->formatValue(fn ($value) => $value instanceof MediaVisibility ? $value->value : $value);

        return [
            IdField::new('id')->hideOnForm(),
            $thumbnail,
            $uploadField,
            $title,
            $description,
            $albumField,
            $visibilityField,
        ];
    }
}
