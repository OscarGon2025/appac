<?php

namespace App\Controller\Admin;

use App\Entity\ArchiveImage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\VichImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;


final class ArchiveImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ArchiveImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield FormField::addPanel('Image');
        yield Field::new('imageFile')
            ->setFormType(VichImageType::class)
            ->setLabel('Fichier image')
            ->onlyOnForms();

        yield ImageField::new('fileName')
            ->setBasePath('/uploads/archives')
            ->setLabel('Aperçu')
            ->onlyOnIndex();

        yield TextField::new('title', 'Titre');
        yield TextareaField::new('description', 'Description')->hideOnIndex();
    }
}
