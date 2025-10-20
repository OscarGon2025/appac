<?php

namespace App\Controller;

use App\Entity\Album;
use App\Form\AlbumType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    #[Route('/albums', name: 'album_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $albums = $em->getRepository(Album::class)->findAll();

        return $this->render('album/index.html.twig', [
            'albums' => $albums,
        ]);
    }

    #[Route('/albums/ajouter', name: 'album_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $album = new Album();
        $form = $this->createForm(AlbumType::class, $album);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($album);
            $em->flush();

            $this->addFlash('success', 'Album créé avec succès !');
            return $this->redirectToRoute('album_index');
        }

        return $this->render('album/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
