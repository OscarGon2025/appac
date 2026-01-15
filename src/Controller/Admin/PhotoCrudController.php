<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use App\Enum\MediaVisibility;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            ImageField::new('fileName', 'Aperçu')
                ->setBasePath('/uploads/photos')
                ->onlyOnIndex()
                ->setCssClass('ea-thumbnail'),
            TextField::new('imageFile', 'Fichier image')
                ->setFormType(VichImageType::class)
                ->onlyOnForms(),
            TextField::new('title', 'Titre'),
            TextEditorField::new('description', 'Description')->hideOnIndex(),
            AssociationField::new('album', 'Album')
                ->setCrudController(AlbumCrudController::class)
                ->autocomplete()
                ->setRequired(true),
            ChoiceField::new('visibility', 'Visibilité')
                ->setChoices([
                    'Public' => MediaVisibility::PUBLIC,
                    'Membres' => MediaVisibility::MEMBERS,
                ])
                ->renderAsBadges([
                    MediaVisibility::PUBLIC->value => 'success',
                    MediaVisibility::MEMBERS->value => 'warning',
                ])
                ->formatValue(fn ($value) => $value instanceof MediaVisibility ? $value->value : $value),
            DateTimeField::new('deletedAt', 'Supprimé le')->onlyOnIndex(),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        // Bouton RESTAURER visible uniquement si soft-deleted
        $restoreAction = Action::new('restore', 'Restaurer', 'fas fa-undo')
            ->linkToRoute('admin_photo_restore', function ($entity) {
                return ['id' => $entity->getId()];
            })
            ->displayIf(fn ($entity) => $entity->isDeleted());

        // Masquer le bouton DELETE si déjà soft-deleted
        $actions = $actions
            ->add('index', $restoreAction)
            ->add('detail', $restoreAction)
            ->update('index', Action::DELETE, fn (Action $action) => $action
                ->displayIf(fn ($entity) => !$entity->isDeleted()))
            ->update('detail', Action::DELETE, fn (Action $action) => $action
                ->displayIf(fn ($entity) => !$entity->isDeleted()));

        return $actions;
    }



    // Affiche toutes les photos même les soft-deleted
    public function createIndexQueryBuilder(
        SearchDto $searchDto,
        EntityDto $entityDto,
        FieldCollection $fields,
        FilterCollection $filters,
    ): \Doctrine\ORM\QueryBuilder {
        $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);

        // Désactiver le filtre softdeleteable uniquement s'il est activé
        $filtersCollection = $qb->getEntityManager()->getFilters();
        if ($filtersCollection->isEnabled('softdeleteable')) {
            $filtersCollection->disable('softdeleteable');
        }

        return $qb;
    }

    // Route pour restaurer une photo supprimée
    #[Route('/admin/photo/{id}/restore', name: 'admin_photo_restore', methods: ['GET', 'POST'])]
    public function restorePhotoById(int $id, EntityManagerInterface $em): RedirectResponse
    {
        $filters = $em->getFilters();
        if ($filters->isEnabled('softdeleteable')) {
            $filters->disable('softdeleteable');
        }

        $photo = $em->getRepository(Photo::class)->find($id);

        if (!$photo) {
            $this->addFlash('danger', 'Photo introuvable.');

            return $this->redirectToRoute('admin');
        }

        if ($photo->isDeleted()) {
            $photo->setDeletedAt(null);
            $em->flush();
            $this->addFlash('success', 'Photo restaurée avec succès !');
        } else {
            $this->addFlash('info', 'La photo n’était pas supprimée.');
        }

        return $this->redirectToRoute('admin', [
            'crudControllerFqcn' => self::class,
        ]);
    }
}
