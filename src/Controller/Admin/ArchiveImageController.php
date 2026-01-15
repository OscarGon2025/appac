<?php

namespace App\Controller\Admin;

use App\Entity\ArchiveImage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArchiveImageController extends AbstractController
{
    #[Route('/admin/archive-image/{id}/info', name: 'admin_archive_image_info', methods: ['GET'])]
    public function info(ArchiveImage $image): JsonResponse
    {
        return $this->json([
            'id' => $image->getId(),
            'fileName' => $image->getFileName(),
            'title' => $image->getTitle(),
        ]);
    }
}

