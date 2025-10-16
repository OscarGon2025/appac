<?php

namespace App\Entity;

use App\Enum\AdStatus;
use App\Repository\ClassifiedAdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClassifiedAdRepository::class)]
#[ORM\Table(name: 'classified_ads')]
#[ORM\HasLifecycleCallbacks]
class ClassifiedAd
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Propietaire de l'anonce
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'classifiedAds')]
    #[ORM\JoinColumn(nullable: false)]
    private User $owner;

    #[ORM\Column(length: 180)]
    private string $title;

    #[ORM\Column(type: 'text')]
    private string $description;

    // Prix optionel (decimal → string en PHP)
    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?string $price = null;

    #[ORM\Column(name: 'item_condition', length: 80, nullable: true)]
    private ?string $condition = null;

    // Ciudad/zone optinel
    #[ORM\Column(length: 160, nullable: true)]
    private ?string $location = null;

    // Etat ad (enum)
    #[ORM\Column(enumType: AdStatus::class)]
    private AdStatus $status = AdStatus::PENDING;

    // date publication optionnelle
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $publishedAt = null;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column]
    private \DateTimeImmutable $updatedAt;

    /** @var Collection<int, Photo> */
    #[ORM\OneToMany(mappedBy: 'classifiedAd', targetEntity: Photo::class, cascade: ['persist'], orphanRemoval: false)]
    private Collection $photos;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTimeImmutable();
        $this->createdAt ??= $now;
        $this->updatedAt ??= $now;
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function __toString(): string
    {
        return $this->title ?? 'Classified Ad';
    }

    // ---------------- Getters / Setters ----------------

    public function getId(): ?int { return $this->id; }

    public function getOwner(): User { return $this->owner; }
    public function setOwner(User $owner): self { $this->owner = $owner; return $this; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): self { $this->title = $title; return $this; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): self { $this->description = $description; return $this; }

    public function getPrice(): ?string { return $this->price; }
    public function setPrice(?string $price): self { $this->price = $price; return $this; }

    public function getCondition(): ?string { return $this->condition; }
    public function setCondition(?string $condition): self { $this->condition = $condition; return $this; }

    public function getLocation(): ?string { return $this->location; }
    public function setLocation(?string $location): self { $this->location = $location; return $this; }

    public function getStatus(): AdStatus { return $this->status; }
    public function setStatus(AdStatus $status): self { $this->status = $status; return $this; }

    public function getPublishedAt(): ?\DateTimeImmutable { return $this->publishedAt; }
    public function setPublishedAt(?\DateTimeImmutable $publishedAt): self { $this->publishedAt = $publishedAt; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): self { $this->createdAt = $createdAt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self { $this->updatedAt = $updatedAt; return $this; }


    // ajout de getter


    public function getStatusLabel(): string
    {
        return $this->status?->value ?? '';
    }


    /** @return Collection<int, Photo> */
    public function getPhotos(): Collection { return $this->photos; }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos->add($photo);
            $photo->setClassifiedAd($this);
        }
        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo) && $photo->getClassifiedAd() === $this) {
            $photo->setClassifiedAd(null);
        }
        return $this;
    }
}
