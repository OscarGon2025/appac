<?php

namespace App\Entity;

use App\Enum\MediaVisibility;
use App\Repository\PhotoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotoRepository::class)]
#[ORM\Table(name: 'photos')]
#[ORM\HasLifecycleCallbacks]
class Photo
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    // Propietaire (User::$photos du cote inverse)
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $owner = null;

    // fichier physuique (ruta/nom de fichier en BD)
    #[ORM\Column(length: 255)]
    private string $fileName;

    // Metadonnes
    #[ORM\Column(length: 180, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    //  visibility (public ou membres)
    #[ORM\Column(enumType: MediaVisibility::class)]
    private MediaVisibility $visibility = MediaVisibility::PUBLIC;

    // optionel: apartenir a un álbum (Album::$photos c'est du cote inverse)
    #[ORM\ManyToOne(targetEntity: Album::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Album $album = null;

    // Optionel: Photo asocie au ad
    #[ORM\ManyToOne(targetEntity: ClassifiedAd::class, inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?ClassifiedAd $classifiedAd = null;

    // dates EXIF / telecharge
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

    // -------- Getters / Setters --------

    public function getId(): ?int { return $this->id; }

    public function getOwner(): ?User { return $this->owner; }
    public function setOwner(?User $owner): self { $this->owner = $owner; return $this; }

    public function getFileName(): string { return $this->fileName; }
    public function setFileName(string $fileName): self { $this->fileName = $fileName; return $this; }

    public function getTitle(): ?string { return $this->title; }
    public function setTitle(?string $title): self { $this->title = $title; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): self { $this->description = $description; return $this; }

    public function getVisibility(): MediaVisibility { return $this->visibility; }
    public function setVisibility(MediaVisibility $visibility): self { $this->visibility = $visibility; return $this; }

    public function getAlbum(): ?Album { return $this->album; }
    public function setAlbum(?Album $album): self { $this->album = $album; return $this; }

    public function getClassifiedAd(): ?ClassifiedAd { return $this->classifiedAd; }
    public function setClassifiedAd(?ClassifiedAd $ad): self { $this->classifiedAd = $ad; return $this; }

    public function getTakenAt(): ?\DateTimeImmutable { return $this->takenAt; }
    public function setTakenAt(?\DateTimeImmutable $takenAt): self { $this->takenAt = $takenAt; return $this; }

    public function getUploadedAt(): \DateTimeImmutable { return $this->uploadedAt; }
    public function setUploadedAt(\DateTimeImmutable $uploadedAt): self { $this->uploadedAt = $uploadedAt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self { $this->updatedAt = $updatedAt; return $this; }
}
