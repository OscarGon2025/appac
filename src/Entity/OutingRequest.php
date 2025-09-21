<?php

namespace App\Entity;

use App\Repository\OutingRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OutingRequestRepository::class)]
#[ORM\Table(name: 'outing_request')]
#[ORM\HasLifecycleCallbacks]
class OutingRequest
{
    public const STATUS_PENDING   = 'PENDING';
    public const STATUS_CONFIRMED = 'CONFIRMED';
    public const STATUS_CANCELLED = 'CANCELLED';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // peut etre un invite(NULL) ou un membre (User)
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'outingRequests')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $user = null;

    // beaucoup OutingRequest apartient a un Evenementt
    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'outingRequests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Event $event = null;

    #[Assert\Positive]
    #[ORM\Column(type: 'smallint', options: ['default' => 1])]
    private int $seats = 1;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contactName = null;

    #[Assert\Email]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $emergencyPhone = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $guestNames = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[Assert\Choice(choices: [self::STATUS_PENDING, self::STATUS_CONFIRMED, self::STATUS_CANCELLED])]
    #[ORM\Column(length: 16)]
    private string $status = self::STATUS_PENDING;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    // --------- Getters / Setters ----------
    public function getId(): ?int { return $this->id; }

    public function getEvent(): ?Event { return $this->event; }
    public function setEvent(?Event $event): self { $this->event = $event; return $this; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }

    public function getSeats(): int { return $this->seats; }
    public function setSeats(int $seats): self { $this->seats = max(1, $seats); return $this; }

    public function getContactName(): ?string { return $this->contactName; }
    public function setContactName(?string $name): self { $this->contactName = $name; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): self { $this->email = $email ? mb_strtolower($email) : null; return $this; }

    public function getPhone(): ?string { return $this->phone; }
    public function setPhone(?string $phone): self { $this->phone = $phone; return $this; }

    public function getEmergencyPhone(): ?string { return $this->emergencyPhone; }
    public function setEmergencyPhone(?string $phone): self { $this->emergencyPhone = $phone; return $this; }

    public function getGuestNames(): ?string { return $this->guestNames; }
    public function setGuestNames(?string $names): self { $this->guestNames = $names; return $this; }

    public function getMessage(): ?string { return $this->message; }
    public function setMessage(?string $message): self { $this->message = $message; return $this; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): self { $this->status = $status; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $createdAt): self { $this->createdAt = $createdAt; return $this; }
}
