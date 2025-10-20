<?php

namespace App\Entity;

use App\Enum\MediaVisibility;
use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: PhotoRepository::class)]
#[ORM\Table(name: 'photos')]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]
class Photo
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    // Propietaire (User::$photos du cote inverse)
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $owner = null;

    // fichier physuique (ruta/nom de fichier en BD)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fileName = null;

    /**
     * Campo NO persistido usado por Vich para manejar la subida.
     * Cambia "classified_ad_photo" si tu mapping en vich_uploader.yaml se llama distinto.
     */
    #[Vich\UploadableField(mapping: 'classified_ad_photo', fileNameProperty: 'fileName')]
    private ?File $imageFile = null;

    // Metadatos
    #[ORM\Column(length: 180, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    // Visibilidad (public o membres)
    #[ORM\Column(enumType: MediaVisibility::class)]
    private MediaVisibility $visibility = MediaVisibility::PUBLIC;

    // Opcional: pertenecer a un álbum (Album::$photos es el lado inverso)
    #[ORM\ManyToOne(targetEntity: Album::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Album $album = null;

    // Opcional: foto asociada a un anuncio
    #[ORM\ManyToOne(targetEntity: ClassifiedAd::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?ClassifiedAd $classifiedAd = null;

    // Fechas EXIF / subida
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $takenAt = null;

    #[ORM\Column]
    private \DateTimeImmutable $uploadedAt;

    #[ORM\Column]
    private \DateTimeImmutable $updatedAt;

    public function __construct()
    {
        $now = new \DateTimeImmutable();
        $this->uploadedAt = $now;
        $this->updatedAt  = $now;
        $this->fileName   = '';
    }

    #[ORM\PreUpdate]
    public function touch(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function __toString(): string
    {
        return $this->title ?: $this->fileName ?: 'Photo';
    }

    #[Vich\UploadableField(mapping: 'photos', fileNameProperty: 'fileName')]
    private ?File $imageFile = null;

    // -------- Getters / Setters --------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Campo de subida manejado por Vich.
     * Establecer este campo hace que Vich mueva el archivo y actualice fileName.
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // necesitado por Doctrine para detectar un cambio y disparar los listeners
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getTitle(): ?string { return $this->title; }
    public function setTitle(?string $title): self { $this->title = $title; return $this; }
    public function getVisibility(): MediaVisibility
    {
        return $this->visibility;
    }

    public function setVisibility(MediaVisibility $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): self
    {
        $this->album = $album;

        return $this;
    }

    public function getClassifiedAd(): ?ClassifiedAd
    {
        return $this->classifiedAd;
    }

    public function setClassifiedAd(?ClassifiedAd $ad): self
    {
        $this->classifiedAd = $ad;

        return $this;
    }

    public function getTakenAt(): ?\DateTimeImmutable
    {
        return $this->takenAt;
    }

    public function setTakenAt(?\DateTimeImmutable $takenAt): self
    {
        $this->takenAt = $takenAt;

        return $this;
    }

    public function getUploadedAt(): \DateTimeImmutable
    {
        return $this->uploadedAt;
    }

    public function setUploadedAt(\DateTimeImmutable $uploadedAt): self
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // ça force Doctrine à déclencher l'événement PreUpdate
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
}
