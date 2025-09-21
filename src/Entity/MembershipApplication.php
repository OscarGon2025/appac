<?php

namespace App\Entity;

use App\Enum\ApplicationStatus;
use App\Repository\MembershipApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembershipApplicationRepository::class)]
#[ORM\Table(name: 'membership_applications')]
#[ORM\HasLifecycleCallbacks]
class MembershipApplication
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    // Donnes du demandeur
    #[ORM\Column(length: 100)]
    private string $firstName = '';

    #[ORM\Column(length: 100)]
    private string $lastName = '';

    #[ORM\Column(length: 180)]
    private string $email = '';

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $message = null;

    // Etat de la demande
    #[ORM\Column(enumType: ApplicationStatus::class)]
    private ApplicationStatus $status = ApplicationStatus::PENDING;

    // Gestion interne
    #[ORM\Column(type: 'smallint')]
    private int $targetYear = 0;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $processingNote = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'processedApplications')]
    private ?User $processedBy = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $processedAt = null;

    // Timestamps
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
        return sprintf('Solicitud %s %s (%d)', $this->firstName, $this->lastName, $this->targetYear);
    }

    // -------- Getters / Setters --------
    public function getId(): ?int { return $this->id; }

    public function getFirstName(): string { return $this->firstName; }
    public function setFirstName(string $v): self { $this->firstName = $v; return $this; }

    public function getLastName(): string { return $this->lastName; }
    public function setLastName(string $v): self { $this->lastName = $v; return $this; }

    public function getEmail(): string { return $this->email; }
    public function setEmail(string $v): self { $this->email = mb_strtolower($v); return $this; }

    public function getPhone(): ?string { return $this->phone; }
    public function setPhone(?string $v): self { $this->phone = $v; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(?string $v): self { $this->message = $v; return $this; }

    public function getStatus(): ApplicationStatus { return $this->status; }
    public function setStatus(ApplicationStatus $s): self { $this->status = $s; return $this; }

    public function getTargetYear(): int { return $this->targetYear; }
    public function setTargetYear(int $y): self { $this->targetYear = $y; return $this; }

    public function getProcessingNote(): ?string { return $this->processingNote; }
    public function setProcessingNote(?string $v): self { $this->processingNote = $v; return $this; }

    public function getProcessedBy(): ?User { return $this->processedBy; }
    public function setProcessedBy(?User $u): self { $this->processedBy = $u; return $this; }

    public function getProcessedAt(): ?\DateTimeImmutable { return $this->processedAt; }
    public function setProcessedAt(?\DateTimeImmutable $dt): self { $this->processedAt = $dt; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $dt): self { $this->createdAt = $dt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $dt): self { $this->updatedAt = $dt; return $this; }
}
