<?php

namespace App\Entity;

use App\Enum\ApplicationStatus;
use App\Repository\MembershipApplicationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembershipApplicationRepository::class)]
#[ORM\Table(name: 'membership_applications')]
#[ORM\UniqueConstraint(
    name: 'uniq_provider_payment',
    columns: ['provider', 'provider_payment_id']
)] // FR: Unicité pour éviter de traiter deux fois le même paiement HelloAsso (idempotence)
#[ORM\Index(columns: ['email', 'target_year'], name: 'idx_email_year')] // FR: Index utile pour retrouver vite une demande par email+année
#[ORM\HasLifecycleCallbacks]
class MembershipApplication
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    // FR: Données du demandeur (orthographe corrigée: "Données")
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

    // FR: État de la demande (conserve ton enum existant)
    #[ORM\Column(enumType: ApplicationStatus::class)]
    private ApplicationStatus $status = ApplicationStatus::PENDING;

    // FR: Gestion interne (année/season ciblée)
    #[ORM\Column(type: 'smallint', name: 'target_year')]
    private int $targetYear = 0;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $processingNote = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'processedApplications')]
    private ?User $processedBy = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $processedAt = null;

    // =======================
    // FR: Ajouts pour HelloAsso
    // =======================

    #[ORM\Column(length: 30, options: ['default' => 'MANUAL'])]
    private string $provider = 'MANUAL';
    // FR: Source de la demande/paiement (ex. 'HELLOASSO' ou 'MANUAL')

    #[ORM\Column(length: 100, nullable: true, name: 'provider_payment_id')]
    private ?string $providerPaymentId = null;
    // FR: Identifiant de paiement côté fournisseur (HelloAsso): utilisé pour l'idempotence

    #[ORM\Column(type: 'integer', options: ['unsigned' => true], nullable: true, name: 'amount_cents')]
    private ?int $amountCents = null;
    // FR: Montant payé en centimes (ex. 2500 = 25,00 €)

    #[ORM\Column(length: 3, options: ['default' => 'EUR'])]
    private string $currency = 'EUR';
    // FR: Devise du paiement (par défaut EUR)

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $rawPayload = null;
    // FR: Payload brut du webhook HelloAsso pour audit/traçabilité

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $receivedAt = null;
    // FR: Date de réception de l’événement (webhook) ; utile pour le suivi

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

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        // FR: Sécurise l'initialisation même si le constructeur n’est pas appelé par Doctrine
        $now = new \DateTimeImmutable();
        $this->createdAt ??= $now;
        $this->updatedAt ??= $now;
    }

    #[ORM\PreUpdate]
    public function touch(): void
    {
        // FR: Met à jour automatiquement le timestamp de modification
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
    public function setEmail(string $v): self {
        // FR: Normalisation email en minuscule pour éviter les doublons logiques
        $this->email = mb_strtolower(trim($v));
        return $this;
    }

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

    public function getProvider(): string { return $this->provider; }
    public function setProvider(string $p): self { $this->provider = $p; return $this; }

    public function getProviderPaymentId(): ?string { return $this->providerPaymentId; }
    public function setProviderPaymentId(?string $id): self { $this->providerPaymentId = $id; return $this; }

    public function getAmountCents(): ?int { return $this->amountCents; }
    public function setAmountCents(?int $cents): self { $this->amountCents = $cents; return $this; }

    public function getCurrency(): string { return $this->currency; }
    public function setCurrency(string $cur): self { $this->currency = $cur; return $this; }

    public function getRawPayload(): ?array { return $this->rawPayload; }
    public function setRawPayload(?array $payload): self { $this->rawPayload = $payload; return $this; }

    public function getReceivedAt(): ?\DateTimeImmutable { return $this->receivedAt; }
    public function setReceivedAt(?\DateTimeImmutable $dt): self { $this->receivedAt = $dt; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $dt): self { $this->createdAt = $dt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $dt): self { $this->updatedAt = $dt; return $this; }

    // --- Helpers sólo para la UI del backoffice ---
    public function getStatusLabel(): string
    {
        // asume que $this->status es de tipo App\Enum\ApplicationStatus
        return $this->status->label();
    }

    public function getStatusBadge(): string
    {
        $label = $this->status->label();
        $class = $this->status->badge(); // p.ej. success|warning|danger|secondary
        return sprintf('<span class="badge text-bg-%s">%s</span>', $class, $label);
    }

}
