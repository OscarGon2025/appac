<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
#[UniqueEntity(fields: ['slug'])]
#[ORM\HasLifecycleCallbacks]
class Event
{
    public const TYPES    = ['OUTING', 'REGATTA', 'MEETING', 'OTHER'];
    public const STATUSES = ['DRAFT', 'PUBLISHED', 'CANCELLED'];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // 🏷️ Titre
    #[ORM\Column(length: 255)]
    private string $title;

    // 🔗 Slug unique
    #[ORM\Column(length: 255, unique: true)]
    private string $slug;

    // ✏️ Description (HTML autorisé dans tes vues)
    #[ORM\Column(type: Types::TEXT)]
    private string $description;

    // 🧩 Type (contrôlé)
    #[Assert\Choice(choices: self::TYPES, message: "Type invalide.")]
    #[ORM\Column(length: 32)]
    private string $type = 'OUTING';

    // 🔓 Inscriptions ouvertes ?
    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $registrationOpen = false;

    // 🧑‍🤝‍🧑 Réservé aux membres ?
    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isMembersOnly = false;

    // 🕒 Début
    #[Assert\NotNull(message: "La date de début est requise.", groups: ['create'])]
    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $startAt = null;

    // 🕒 Fin (≥ début si présente)
    #[Assert\Expression(
        "value === null or this.getStartAt() === null or value >= this.getStartAt()",
        message: "La date de fin doit être postérieure (ou égale) à la date de début."
    )]
    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $endAt = null;

    // 📍 Lieu
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $locationName = null;

    // 🌐 Coordonnées (décimales)
    #[ORM\Column(type: 'decimal', precision: 9, scale: 6, nullable: true)]
    private ?string $lat = null;

    #[ORM\Column(type: 'decimal', precision: 9, scale: 6, nullable: true)]
    private ?string $lng = null;

    // 👥 Limite de participants (null = illimité)
    #[ORM\Column(type: 'smallint', nullable: true)]
    private ?int $maxParticipants = null;

    // 🚦 Statut
    #[Assert\Choice(choices: self::STATUSES, message: "Statut invalide.")]
    #[ORM\Column(length: 16)]
    private string $status = 'DRAFT';

    // 🕒 Audit
    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $updatedAt;

    // 👤 Créateur
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'eventsCreated')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $createdBy = null;

    /** @var Collection<int, OutingRequest> */
    #[ORM\OneToMany(mappedBy: 'event', targetEntity: OutingRequest::class, cascade: ['remove'], orphanRemoval: true)]
    private Collection $outingRequests;

    public function __construct()
    {
        $this->outingRequests = new ArrayCollection();
    }

    // ---------- Lifecycle ----------
    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
        $this->ensureSlug();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
        $this->ensureSlug();
    }

    private function ensureSlug(): void
    {
        if (!isset($this->slug) || trim((string) $this->slug) === '') {
            $title = trim((string) ($this->title ?? ''));
            if ($title !== '') {
                $slugger = new AsciiSlugger();
                $this->slug = strtolower($slugger->slug($title)->toString());
            }
        }
    }

    // ---------- Helpers Domain ----------
    public function isPublished(): bool
    {
        return strtoupper($this->status) === 'PUBLISHED';
    }

    public function isCancelled(): bool
    {
        return strtoupper($this->status) === 'CANCELLED';
    }

    public function isUpcoming(\DateTimeImmutable $ref = new \DateTimeImmutable()): bool
    {
        // on considère "à venir" si startAt > maintenant ou pas encore terminé
        if ($this->endAt) {
            return $this->endAt >= $ref;
        }
        return ($this->startAt ?? $ref) >= $ref;
    }

    public function isPast(\DateTimeImmutable $ref = new \DateTimeImmutable()): bool
    {
        if ($this->endAt) {
            return $this->endAt < $ref;
        }
        return ($this->startAt ?? $ref) < $ref;
    }

    /** Nombre de places confirmées (via OutingRequest) */
    public function confirmedSeats(): int
    {
        $sum = 0;
        foreach ($this->outingRequests as $r) {
            if ($r->getStatus() === OutingRequest::STATUS_CONFIRMED) {
                $sum += max(0, (int) $r->getSeats());
            }
        }
        return $sum;
    }

    /** Nombre de demandes en attente (pending) */
    public function pendingCount(): int
    {
        $n = 0;
        foreach ($this->outingRequests as $r) {
            if ($r->getStatus() === OutingRequest::STATUS_PENDING) {
                $n++;
            }
        }
        return $n;
    }

    /** Plazas restantes: null si aforo ilimitado */
    public function spotsLeft(): ?int
    {
        if ($this->maxParticipants === null) {
            return null;
        }
        return max(0, $this->maxParticipants - $this->confirmedSeats());
    }

    /** Como entero “seguro” (∞ -> PHP_INT_MAX) para lógicas de comparación */
    public function spotsLeftInt(): int
    {
        $left = $this->spotsLeft();
        return $left === null ? PHP_INT_MAX : $left;
    }

    public function isFull(): bool
    {
        return $this->maxParticipants !== null && $this->spotsLeftInt() <= 0;
    }

    /** Busca la petición del usuario (si existe) */
    public function findRequestBy(?User $user): ?OutingRequest
    {
        if (!$user) return null;
        foreach ($this->outingRequests as $r) {
            if ($r->getUser() && $r->getUser()->getId() === $user->getId()) {
                return $r;
            }
        }
        return null;
    }

    /** ¿El usuario tiene alguna solicitud (cualquiera que sea el estado)? */
    public function isRegisteredBy(?User $user): bool
    {
        return $this->findRequestBy($user) !== null;
    }

    /**
     * ¿Puede inscribirse este usuario?
     *  - evento publicado
     *  - inscripciones abiertas
     *  - no pasado
     *  - aforo disponible
     *  - si es “sólo miembros”, exigir rol (ajústalo a tu rol real)
     */
    public function canRegister(?User $user, \DateTimeImmutable $ref = new \DateTimeImmutable()): bool
    {
        if (!$this->isPublished() || !$this->registrationOpen || $this->isPast($ref) || $this->isFull()) {
            return false;
        }

        if ($this->isMembersOnly) {
            // si tu rol de socio es otro, cambia 'ROLE_MEMBER'
            if (!$user || !$user->hasRole('ROLE_MEMBER')) {
                return false;
            }
        }

        // ya tiene una solicitud (pendiente o confirmada)
        if ($this->isRegisteredBy($user)) {
            return false;
        }

        return true;
    }

    // ---------- Getters/Setters ----------
    public function getId(): ?int { return $this->id; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $title): self { $this->title = $title; return $this; }

    public function getSlug(): string { return $this->slug; }
    public function setSlug(string $slug): self { $this->slug = $slug; return $this; }

    public function getDescription(): string { return $this->description; }
    public function setDescription(string $description): self { $this->description = $description; return $this; }

    public function getType(): string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }

    public function isRegistrationOpen(): bool { return $this->registrationOpen; }
    public function setRegistrationOpen(bool $open): self { $this->registrationOpen = $open; return $this; }

    public function isMembersOnly(): bool { return $this->isMembersOnly; }
    public function setIsMembersOnly(bool $m): self { $this->isMembersOnly = $m; return $this; }

    public function getStartAt(): ?\DateTimeImmutable { return $this->startAt; }
    public function setStartAt(?\DateTimeImmutable $startAt): self { $this->startAt = $startAt; return $this; }

    public function getEndAt(): ?\DateTimeImmutable { return $this->endAt; }
    public function setEndAt(?\DateTimeImmutable $endAt): self { $this->endAt = $endAt; return $this; }

    public function getLocationName(): ?string { return $this->locationName; }
    public function setLocationName(?string $locationName): self { $this->locationName = $locationName; return $this; }

    public function getLat(): ?string { return $this->lat; }
    public function setLat(?string $lat): self { $this->lat = $lat; return $this; }

    public function getLng(): ?string { return $this->lng; }
    public function setLng(?string $lng): self { $this->lng = $lng; return $this; }

    public function getMaxParticipants(): ?int { return $this->maxParticipants; }
    public function setMaxParticipants(?int $max): self { $this->maxParticipants = $max; return $this; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): self { $this->status = $status; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): self { $this->createdAt = $createdAt; return $this; }

    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self { $this->updatedAt = $updatedAt; return $this; }

    public function getCreatedBy(): ?User { return $this->createdBy; }
    public function setCreatedBy(?User $user): self { $this->createdBy = $user; return $this; }

    /** @return Collection<int, OutingRequest> */
    public function getOutingRequests(): Collection { return $this->outingRequests; }

    public function addOutingRequest(OutingRequest $req): self
    {
        if (!$this->outingRequests->contains($req)) {
            $this->outingRequests->add($req);
            $req->setEvent($this);
        }
        return $this;
    }

    public function removeOutingRequest(OutingRequest $req): self
    {
        if ($this->outingRequests->removeElement($req)) {
            if ($req->getEvent() === $this) {
                $req->setEvent(null);
            }
        }
        return $this;
    }

    public function __toString(): string
    {
        return $this->title ?? ('Event #'.$this->id);
    }
}
