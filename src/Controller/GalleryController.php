<?php

namespace App\Controller;

use App\Entity\Photo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GalleryController extends AbstractController
{
//    #[Route('/galerie', name: 'app_gallery')]
//    public function index(EntityManagerInterface $em): Response
//    {
//        $photos = $em->getRepository(Photo::class)->findBy([], ['createdAt' => 'DESC']);
//
//        return $this->render('gallery/index.html.twig', ['photos' => $photos]);
//    }
}
