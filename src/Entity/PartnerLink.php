<?php

namespace App\Entity;

use App\Repository\PartnerLinkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PartnerLinkRepository::class)]
#[ORM\Table(name: 'partner_links')]
#[ORM\UniqueConstraint(name: 'UNIQ_partner_link_url', columns: ['url'])]
#[ORM\HasLifecycleCallbacks]
class PartnerLink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 160)]
    private string $label;

    /** URL absolute (https://...) */
    #[ORM\Column(length: 255)]
    private string $url;

    /** Tipe/categorie optioonel (p.ej. METEO, TIDES, HARBOUR, PARTNER) */
    #[ORM\Column(length: 60, nullable: true)]
    private ?string $type = null;

    /** Route du logo (fichier telechargeable) */
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    /** Orde daffichage */
    #[ORM\Column(type: 'smallint', options: ['default' => 0])]
    private int $position = 0;

    /** Montrer/cacher */
    #[ORM\Column(options: ['default' => true])]
    private bool $isActive = true;

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
        return $this->label ?? 'Partner link';
    }

    // Getters / Setters
    public function getId(): ?int { return $this->id; }

    public function getLabel(): string { return $this->label; }
    public function setLabel(string $label): self { $this->label = $label; return $this; }

    public function getUrl(): string { return $this->url; }
    public function setUrl(string $url): self { $this->url = $url; return $this; }

    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): self { $this->type = $type; return $this; }

    public function getLogo(): ?string { return $this->logo; }
    public function setLogo(?string $logo): self { $this->logo = $logo; return $this; }

    public function getPosition(): int { return $this->position; }
    public function setPosition(int $position): self { $this->position = $position; return $this; }

    public function isActive(): bool { return $this->isActive; }
    public function setIsActive(bool $isActive): self { $this->isActive = $isActive; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $dt): self { $this->createdAt = $dt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $dt): self { $this->updatedAt = $dt; return $this; }
}
