<?php

namespace App\Entity;

use App\Enum\AnnouncementFrequency;
use App\Repository\AnnouncementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AnnouncementRepository::class)]
#[ORM\Table(name: 'announcements')]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]
class Announcement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Titre interne (repéré dans la liste admin) + titre affiché dans le popup si renseigné
    #[ORM\Column(length: 180)]
    private string $title = '';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageFileName = null;

    #[Vich\UploadableField(mapping: 'announcements', fileNameProperty: 'imageFileName')]
    private ?File $imageFile = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $bodyText = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkUrl = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $linkLabel = null;

    #[ORM\Column(options: ['default' => false])]
    private bool $isActive = false;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $startAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $endAt = null;

    #[ORM\Column(length: 30, enumType: AnnouncementFrequency::class)]
    private AnnouncementFrequency $frequency = AnnouncementFrequency::ONCE_PER_SESSION;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column]
    private \DateTimeImmutable $updatedAt;

    public function __construct()
    {
        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    #[ORM\PreUpdate]
    public function touch(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function __toString(): string
    {
        return $this->title !== '' ? $this->title : 'Annonce #' . $this->id;
    }

    public function getId(): ?int { return $this->id; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): self { $this->title = $title; return $this; }

    public function getImageFileName(): ?string { return $this->imageFileName; }
    public function setImageFileName(?string $imageFileName): self { $this->imageFileName = $imageFileName; return $this; }

    public function getImageFile(): ?File { return $this->imageFile; }
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
        if (null !== $imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getBodyText(): ?string { return $this->bodyText; }
    public function setBodyText(?string $bodyText): self { $this->bodyText = $bodyText; return $this; }

    public function getLinkUrl(): ?string { return $this->linkUrl; }
    public function setLinkUrl(?string $linkUrl): self { $this->linkUrl = $linkUrl; return $this; }

    public function getLinkLabel(): ?string { return $this->linkLabel; }
    public function setLinkLabel(?string $linkLabel): self { $this->linkLabel = $linkLabel; return $this; }

    public function isActive(): bool { return $this->isActive; }
    public function setIsActive(bool $isActive): self { $this->isActive = $isActive; return $this; }

    public function getStartAt(): ?\DateTimeImmutable { return $this->startAt; }
    public function setStartAt(?\DateTimeImmutable $startAt): self { $this->startAt = $startAt; return $this; }

    public function getEndAt(): ?\DateTimeImmutable { return $this->endAt; }
    public function setEndAt(?\DateTimeImmutable $endAt): self { $this->endAt = $endAt; return $this; }

    public function getFrequency(): AnnouncementFrequency { return $this->frequency; }
    public function setFrequency(AnnouncementFrequency $frequency): self { $this->frequency = $frequency; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
}
