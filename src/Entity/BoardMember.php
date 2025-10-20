<?php

//
// namespace App\Entity;
//
// use App\Repository\BoardMemberRepository;
// use Doctrine\ORM\Mapping as ORM;
//
// #[ORM\Entity(repositoryClass: BoardMemberRepository::class)]
// class BoardMember
// {
//    #[ORM\Id]
//    #[ORM\GeneratedValue]
//    #[ORM\Column]
//    private ?int $id = null;
//
//    #[ORM\Column(length: 255)]
//    private ?string $surname = null;
//
//    #[ORM\Column(length: 255)]
//    private ?string $name = null;
//
//    #[ORM\Column(length: 255)]
//    private ?string $role = null;
//
//    #[ORM\Column(length: 255)]
//    private ?string $photo = null;
//
//    public function getId(): ?int
//    {
//        return $this->id;
//    }
//
//    public function getSurname(): ?string
//    {
//        return $this->surname;
//    }
//
//    public function setSurname(string $surname): static
//    {
//        $this->surname = $surname;
//
//        return $this;
//    }
//
//    public function getName(): ?string
//    {
//        return $this->name;
//    }
//
//    public function setName(string $name): static
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    public function getRole(): ?string
//    {
//        return $this->role;
//    }
//
//    public function setRole(string $role): static
//    {
//        $this->role = $role;
//
//        return $this;
//    }
//
//    public function getPhoto(): ?string
//    {
//        return $this->photo;
//    }
//
//    public function setPhoto(string $photo): static
//    {
//        $this->photo = $photo;
//
//        return $this;
//    }
// }

namespace App\Entity;

use App\Repository\BoardMemberRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: BoardMemberRepository::class)]
#[Vich\Uploadable]
class BoardMember
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photoName = null;

    #[Vich\UploadableField(mapping: 'board_member_photos', fileNameProperty: 'photoName')]
    private ?File $photoFile = null;

    // Ca sert à forcer Doctrine à mettre à jour l’entité quand on remplace une image
    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    // Getters / Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    // VichUploader - fichiers
    public function setPhotoFile(?File $photoFile = null): void
    {
        $this->photoFile = $photoFile;

        if ($photoFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }

    public function getPhotoName(): ?string
    {
        return $this->photoName;
    }

    public function setPhotoName(?string $photoName): void
    {
        $this->photoName = $photoName;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
