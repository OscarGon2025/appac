<?php

namespace App\Entity;

use App\Repository\SiteVisitRepository;
use Doctrine\ORM\Mapping as ORM;

/** FR: Compteur de visites journalier (une ligne par jour) pour le tableau de bord admin. */
#[ORM\Entity(repositoryClass: SiteVisitRepository::class)]
#[ORM\Table(name: 'site_visits')]
#[ORM\UniqueConstraint(name: 'uniq_site_visit_date', columns: ['visit_date'])]
class SiteVisit
{
    #[ORM\Id] #[ORM\GeneratedValue] #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'date_immutable')]
    private \DateTimeImmutable $visitDate;

    #[ORM\Column(type: 'integer', options: ['unsigned' => true, 'default' => 0])]
    private int $count = 0;

    public function getId(): ?int { return $this->id; }

    public function getVisitDate(): \DateTimeImmutable { return $this->visitDate; }
    public function setVisitDate(\DateTimeImmutable $date): self { $this->visitDate = $date; return $this; }

    public function getCount(): int { return $this->count; }
    public function setCount(int $count): self { $this->count = $count; return $this; }

    public function increment(): self { $this->count++; return $this; }
}
