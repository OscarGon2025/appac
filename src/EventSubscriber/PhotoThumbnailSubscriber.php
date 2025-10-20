<?php

namespace App\EventSubscriber;

use App\Entity\Photo;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Vich\UploaderBundle\Event\Event;

class PhotoThumbnailSubscriber implements EventSubscriberInterface
{
    private CacheManager $cacheManager;

    public function __construct(CacheManager $cacheManager)
    {
        $this->cacheManager = $cacheManager;
    }

    public static function getSubscribedEvents(): array
    {
        // Event déclenché après l'upload d'un fichier VichUploader
        return [
            'vich_uploader.post_upload' => 'onPostUpload',
        ];
    }

    public function onPostUpload(Event $event): void
    {
        $object = $event->getObject();

        if (!$object instanceof Photo) {
            return;
        }

        // Génére la miniature pour le filtre "thumbnail_small"
        $path = $object->getFileName();
        if ($path) {
            $this->cacheManager->remove($path, 'thumbnail_small'); // supprime l'ancienne version
            $this->cacheManager->resolve($path, 'thumbnail_small'); // génère la miniature
        }
    }
}
