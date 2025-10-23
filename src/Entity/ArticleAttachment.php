<?php

namespace App\Entity;

use App\Entity\Article;
use App\Repository\ArticleAttachmentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ArticleAttachmentRepository::class)]
#[ORM\Table(name: 'article_attachment')]
#[Vich\Uploadable]
#[ORM\HasLifecycleCallbacks]
class ArticleAttachment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Pièce jointe rattachée à un Article
    #[ORM\ManyToOne(inversedBy: 'attachments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $article = null;

    // Titre affiché (optionnel)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    // Nom de fichier persistant en base (nullable pour permettre la création avant upload)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fileName = null;

    // Nom d’origine envoyé par l’utilisateur (optionnel)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $originalName = null;

    // Type MIME (optionnel)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mimeType = null;

    //  Taille en octets (optionnel)
    #[ORM\Column(nullable: true)]
    private ?int $size = null;

    // Ordre d’affichage
    #[ORM\Column(type: 'smallint', options: ['default' => 0])]
    private int $position = 0;

    // Audit
    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $updatedAt;

    /**
     * Champ non persisté géré par VichUploader.
     * mapping      : doit correspondre au nom défini dans vich_uploader.yaml
     * fileName...  : colonnes cibles où Vich enregistre les méta-données
     */
    #[Vich\UploadableField(
        mapping: 'article_attachments',
        fileNameProperty: 'fileName',
        size: 'size',
        mimeType: 'mimeType',
        originalName: 'originalName'
    )]

    #[Assert\NotNull(
        message: "Un fichier est requis.",
        groups: ['create']
    )]

    private ?File $file = null;

    public function __construct()
    {
        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        // Par sécurité (si jamais __construct n’a pas tourné)
        if (!isset($this->createdAt)) {
            $this->createdAt = new \DateTimeImmutable();
        }
        $this->updatedAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    /**
     * Déclenche la mise à jour si un nouveau fichier est uploadé.
     */
    public function setFile(?File $file = null): void
    {
        $this->file = $file;

        if (null !== $file) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getFile(): ?File
    {
        return $this->file;
    }

    // ---------------- Getters/Setters ----------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    public function getOriginalName(): ?string
    {
        return $this->originalName;
    }

    public function setOriginalName(?string $originalName): self
    {
        $this->originalName = $originalName;
        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function __toString(): string
    {
        return $this->title
            ?? $this->originalName
            ?? ('Attachment #' . ($this->id ?? 'new'));
    }
}
