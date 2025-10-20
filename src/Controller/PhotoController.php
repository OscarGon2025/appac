<?php

namespace App\Controller;

use App\Entity\Album;
use App\Entity\Photo;
use App\Enum\MediaVisibility;
use App\Form\PhotoType;
use App\Repository\PhotoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class PhotoController extends AbstractController
{
    #[Route('/photos/upload', name: 'photo_upload')]
    #[IsGranted('ROLE_ADMIN')]
    public function upload(Request $request, EntityManagerInterface $em, Security $security): Response
    {
        $photo = new Photo();
        $photo->setOwner($security->getUser());
        $photo->setUploadedAt(new \DateTimeImmutable());

        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($photo);
            $em->flush();

            $this->addFlash('success', 'Photo ajoutée avec succès !');

            return $this->redirectToRoute('gallery_index');
        }

        return $this->render('photo/upload.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/galerie', name: 'gallery_index')]
    public function index(PhotoRepository $photoRepository, EntityManagerInterface $em, Request $request): Response
    {
        $albumId = $request->query->get('album');

        // Si un album est sélectionné, on filtre par album, sinon on récupère toutes les photos
        if ($albumId) {
            $photos = $photoRepository->findBy(['album' => $albumId, 'visibility' => MediaVisibility::PUBLIC], ['uploadedAt' => 'DESC']);
        } else {
            $photos = $photoRepository->findBy(['visibility' => MediaVisibility::PUBLIC], ['uploadedAt' => 'DESC']);
        }

        // Récupère tous les albums pour le filtre
        $albums = $em->getRepository(Album::class)->findAll();

        return $this->render('photo/gallery.html.twig', [
            'photos' => $photos,
            'albums' => $albums,
            'selectedAlbum' => $albumId,
        ]);
    }


    //    #[Route('/ajouter', name: 'app_photos_new')]
    //    #[IsGranted('ROLE_USER')]
    //    public function new(Request $request, EntityManagerInterface $em): Response
    //    {
    //        $photo = new Photo();
    //        $photo->setOwner($this->getUser());
    //
    //        $form = $this->createForm(PhotoType::class, $photo);
    //        $form->handleRequest($request);
    //
    //        if ($form->isSubmitted() && $form->isValid()) {
    //            try {
    //                $em->persist($photo);
    //                $em->flush();
    //
    //                $this->addFlash('success', 'Photo ajoutée avec succès.');
    //
    //                return $this->redirectToRoute('app_photos_index');
    //            } catch (FileException $e) {
    //                $this->addFlash('error', 'Erreur lors du téléchargement du fichier.');
    //            }
    //        }
    //
    //        return $this->render('photo/new.html.twig', [
    //            'form' => $form->createView(),
    //        ]);
    //    }

    #[Route('/supprimer/{id}', name: 'app_photos_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Photo $photo, EntityManagerInterface $em, Request $request): Response
    {
        if ($this->isCsrfTokenValid('delete'.$photo->getId(), $request->request->get('_token'))) {
            $em->remove($photo);
            $em->flush();
            $this->addFlash('success', 'Photo supprimée.');
        }

        return $this->redirectToRoute('app_photos_index');
    }
}
