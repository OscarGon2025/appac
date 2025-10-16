<?php

namespace App\Entity;

use App\Enum\MembershipStatus;
use App\Repository\MembershipRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembershipRepository::class)]
#[ORM\Table(name: 'memberships')]
#[ORM\UniqueConstraint(name: 'UNIQ_membership_user_year', columns: ['user_id','year'])]
class Membership
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    // cote PROPIETAIRE: ManyToOne vers User
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'memberships')]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    #[ORM\Column(type: 'smallint')]
    private int $year;

    #[ORM\Column(enumType: MembershipStatus::class)]
    private MembershipStatus $status = MembershipStatus::PENDING;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $paidAt = null;

    #[ORM\Column(length: 120, nullable: true)]
    private ?string $helloAssoRef = null;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    // getters / setters
    public function getId(): ?int { return $this->id; }

    public function getUser(): User { return $this->user; }
    public function setUser(User $user): self { $this->user = $user; return $this; }

    public function getYear(): int { return $this->year; }
    public function setYear(int $year): self { $this->year = $year; return $this; }

    public function getStatus(): MembershipStatus { return $this->status; }
    public function setStatus(MembershipStatus $status): self { $this->status = $status; return $this; }

    public function getPaidAt(): ?\DateTimeImmutable { return $this->paidAt; }
    public function setPaidAt(?\DateTimeImmutable $paidAt): self { $this->paidAt = $paidAt; return $this; }

    public function getHelloAssoRef(): ?string { return $this->helloAssoRef; }
    public function setHelloAssoRef(?string $ref): self { $this->helloAssoRef = $ref; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function setCreatedAt(\DateTimeImmutable $dt): self { $this->createdAt = $dt; return $this; }

    // --- Helpers sólo para la UI del backoffice ---
    public function getStatusLabel(): string
    {
        return $this->getStatus()->label(); // asumiendo que getStatus() devuelve MembershipStatus
    }

    public function getStatusBadge(): string
    {
        $s = $this->getStatus();
        return sprintf('<span class="badge text-bg-%s">%s</span>', $s->badge(), $s->label());
    }

}
