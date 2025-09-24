<?php

namespace App\Controller;

use App\Entity\ArticleAttachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Handler\DownloadHandler;

#[Route('/attachment', name: 'attachment_')]
class AttachmentController extends AbstractController
{
    public function __construct(
        private readonly DownloadHandler $downloadHandler
    ) {}

    #[Route('/{id}/download', name: 'download', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function download(ArticleAttachment $attachment): Response
    {
        $article = $attachment->getArticle();

        //ne permet pas le telechargement des fichiers non publies ou date future
        if (!$article->isPublished() || ($article->getPublishedAt() && $article->getPublishedAt() > new \DateTimeImmutable())) {
            throw $this->createNotFoundException();
        }

        // ficher juste pour les membres
        if ($article->isMembersOnly()) {
            // anonime -> login
            if (!$this->getUser()) {
                $this->addFlash('warning', 'Téléchargement réservé aux membres. Connectez-vous.');
                return $this->redirectToRoute('app_login');
            }
            //membre login -> autorisation
            $this->denyAccessUnlessGranted('VIEW', $article);
        }

        // fichier telecharge VichUploader
        // C ontent-Type et Content-Disposition
        return $this->downloadHandler->downloadObject($attachment, 'file');
    }
}
