<?php

namespace App\Controller\Admin;

use App\Entity\ArticleAttachment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ArticleAttachmentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ArticleAttachment::class;
    }

    public function configureFields(string $pageName): iterable
    {
        // Champs principaux
        yield IdField::new('id')->onlyOnIndex();

        // Relation – ⚠️ Ne pas modifier sinon désynchronisation avec l’entité Article
        yield AssociationField::new('article')
            ->setRequired(true)
            ->setHelp('Article auquel la pièce jointe est rattachée')
            ->hideOnIndex();

        yield TextField::new('title', 'Titre')
            ->setHelp('Optionnel. S’il est vide, le nom original du fichier sera affiché.');

        // Champ d’upload du fichier
        yield TextField::new('file', 'Fichier')
            ->setFormType(VichFileType::class)
            ->onlyOnForms()
            ->setHelp('Téléverser un fichier PDF ou un autre document.')
            ->setFormTypeOptions([
                'required' => true,
                'allow_delete' => false,
                'download_uri' => false,
            ]);


        // Lien de téléchargement (colonne affichée dans la liste)
        yield TextField::new('download', 'Télécharger')
            ->onlyOnIndex()
            ->renderAsHtml()
            ->formatValue(function ($value, $entity) {
                if (!$entity || null === $entity->getId()) {
                    return '';
                }
                // route: attachment_download
                $url = $this->generateUrl('attachment_download', ['id' => $entity->getId()]);

                return sprintf('<a href="%s" class="btn btn-sm btn-outline-primary">Télécharger</a>', $url);
            });

        // Métadonnées du fichier (lecture seule)
        yield TextField::new('originalName', 'Nom d’origine')
            ->hideOnForm()
            ->onlyOnDetail();

        yield TextField::new('mimeType', 'Type MIME')
            ->onlyOnDetail()
            ->setFormTypeOption('disabled', true);

        yield IntegerField::new('size', 'Taille (octets)')
            ->hideOnForm()
            ->formatValue(fn ($v) => $v ? $this->humanSize($v) : null)
            ->onlyOnDetail();

        // Ordre d’affichage dans l’article
        yield IntegerField::new('position', 'Position')
            ->setHelp('Ordre d’apparition dans l’article (croissant).');

        // Dates (lecture seule)
        yield DateTimeField::new('createdAt', 'Créé le')->onlyOnDetail();
        yield DateTimeField::new('updatedAt', 'Modifié le')->onlyOnDetail();
    }

    /**
     * Convertit des octets en une chaîne lisible (Ko, Mo, Go, ...).
     */
    private function humanSize(int $bytes): string
    {
        $units = ['octets', 'Ko', 'Mo', 'Go', 'To'];
        $i = 0;
        while ($bytes >= 1024 && $i < count($units) - 1) {
            $bytes /= 1024;
            $i++;
        }
        return sprintf('%.0f %s', $bytes, $units[$i]);
    }
}
