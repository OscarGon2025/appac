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
        // champs principales
        yield IdField::new('id')->onlyOnIndex();

        // Relation  PAS TOUCHER sinon -- BORDEL DANS ENTITE ARTICLE
        yield AssociationField::new('article')
            ->setRequired(true)
            ->setHelp('Artículo al que pertenece el adjunto')
            ->hideOnIndex();

        yield TextField::new('title', 'Titre')
            ->setHelp('Opcional. Si está vacío, se mostrará el nombre original del archivo');

        // upload
        yield TextField::new('file', 'Fichier')
            ->setFormType(VichFileType::class)
            ->onlyOnForms()
            ->setHelp('PDF u otro documento.');

        // Link de telechargement
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


        // Metadonnes du fichier: read only
        yield TextField::new('originalName', 'Nom d\'origine')
            ->hideOnForm()
            ->onlyOnDetail();

        yield TextField::new('mimeType', 'MIME type')
            ->onlyOnDetail()
            ->setFormTypeOption('disabled', true);

        yield IntegerField::new('size', 'Taille (octets)')
            ->hideOnForm()
            ->formatValue(fn ($v) => $v ? $this->humanSize($v) : null)
            ->onlyOnDetail();

        // ordre
        yield IntegerField::new('position', 'Position')
            ->setHelp('Orden de aparición en el artículo (ascendente)');

        // dates read only
        yield DateTimeField::new('createdAt', 'Créé le')->onlyOnDetail();
        yield DateTimeField::new('updatedAt', 'Modifié le')->onlyOnDetail();
    }

    /**
     *  bytes a unw chaine  (KB/MB/GB).
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
