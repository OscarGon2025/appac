<?php

namespace App\Controller\Admin;

use App\Entity\Document;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Validator\Constraints\File;


class DocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Document::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            // Titre du document
            TextField::new('title', 'Titre'),

            // Type : Statut ou Archive
            ChoiceField::new('type', 'Catégorie')
                ->setChoices([
                    'Statuts de l’association' => Document::TYPE_STATUT,
                    'Archives' => Document::TYPE_ARCHIVE,
                ])
                ->renderExpanded(false),

            // Description facultative
            TextareaField::new('description')
                ->hideOnIndex(),

            // Upload du PDF
//            TextField::new('file', 'Fichier PDF')
//                ->setFormType(VichFileType::class)
//                ->onlyOnForms(),
            TextField::new('file', 'Fichier PDF')
                ->setFormType(VichFileType::class)
                ->setFormTypeOptions([
                    'required' => $pageName === 'new', // obligatoire à la création
                    'constraints' => [
                        new File([
                            'maxSize' => '50M',
                            'mimeTypes' => ['application/pdf'],
                            'mimeTypesMessage' => 'Seuls les fichiers PDF sont autorisés.',
                        ]),
                    ],
                ])
                ->onlyOnForms(),


            // Nom du fichier affiché dans la liste admin
            TextField::new('fileName', 'Fichier')
                ->onlyOnIndex(),

        ];
    }
}





