<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

// Relations (diargrame UML)

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'])]
#[ORM\HasLifecycleCallbacks]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    // ---------------------- Campos base ----------------------

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private string $firstName = '';

    #[ORM\Column(length: 255)]
    private string $lastName = '';

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $newsletterOptIn = false;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column]
    private \DateTimeImmutable $updatedAt;

    //    Ajout du champ $isApproved pour l'approbation d'un user lors de la création de son compte
    #[ORM\Column(type: 'boolean')]
    private bool $isApproved = false;

    // ---------------------- Relations (diagrama) ----------------------

    /** @var Collection<int, Article> */
    #[ORM\OneToMany(mappedBy: 'author', targetEntity: Article::class)]
    private Collection $articles;

    /** @var Collection<int, Event> */
    #[ORM\OneToMany(mappedBy: 'createdBy', targetEntity: Event::class)]
    private Collection $eventsCreated;

    /** @var Collection<int, ClassifiedAd> */
    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: ClassifiedAd::class)]
    private Collection $classifiedAds;

    /** @var Collection<int, Photo> */
    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Photo::class)]
    private Collection $photos;

    /** @var Collection<int, OutingRequest> */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: OutingRequest::class)]
    private Collection $outingRequests;

    /** @var Collection<int, MembershipApplication> */
    #[ORM\OneToMany(mappedBy: 'processedBy', targetEntity: MembershipApplication::class)]
    private Collection $processedApplications;

    /** @var Collection<int, Membership> */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Membership::class, cascade: ['persist'])]
    private Collection $memberships;

    // ---------------------- Constructor ----------------------

    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->eventsCreated = new ArrayCollection();
        $this->classifiedAds = new ArrayCollection();
        $this->photos = new ArrayCollection();
        $this->outingRequests = new ArrayCollection();
        $this->processedApplications = new ArrayCollection();
        $this->memberships = new ArrayCollection();

        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    // ---------------------- Securite ----------------------

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles ?? [];
        $roles[] = 'ROLE_USER';

        return array_values(array_unique($roles));
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $hashedPassword): self
    {
        $this->password = $hashedPassword;

        return $this;
    }

    public function eraseCredentials(): void
    {
        // Ej: $this->plainPassword = null;
    }

    // ---------------------- Getters/Setters base ----------------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = mb_strtolower($email);

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFullName(): string
    {
        $full = trim($this->firstName.' '.$this->lastName);

        return '' !== $full ? $full : (string) $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function isNewsletterOptIn(): bool
    {
        return $this->newsletterOptIn;
    }

    public function setNewsletterOptIn(bool $newsletterOptIn): self
    {
        $this->newsletterOptIn = $newsletterOptIn;

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
        return $this->getFullName();
    }

    // ---------------------- Lifecycle ----------------------

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $now = new \DateTimeImmutable();
        $this->createdAt = $now;
        $this->updatedAt = $now;
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    // ---------------------- Relation: Article.author → User ----------------------

    /** @return Collection<int, Article> */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article) && $article->getAuthor() === $this) {
            $article->setAuthor(null);
        }

        return $this;
    }

    // ----------------------
    // relation: Event.createdBy → User ----------------------

    /** @return Collection<int, Event> */
    public function getEventsCreated(): Collection
    {
        return $this->eventsCreated;
    }

    public function addEventCreated(Event $event): self
    {
        if (!$this->eventsCreated->contains($event)) {
            $this->eventsCreated->add($event);
            $event->setCreatedBy($this);
        }

        return $this;
    }

    public function removeEventCreated(Event $event): self
    {
        if ($this->eventsCreated->removeElement($event) && $event->getCreatedBy() === $this) {
            $event->setCreatedBy(null);
        }

        return $this;
    }

    // ---------------------- Relation : ClassifiedAd.owner → User ----------------------

    /** @return Collection<int, ClassifiedAd> */
    public function getClassifiedAds(): Collection
    {
        return $this->classifiedAds;
    }

    public function addClassifiedAd(ClassifiedAd $ad): self
    {
        if (!$this->classifiedAds->contains($ad)) {
            $this->classifiedAds->add($ad);
            $ad->setOwner($this);
        }

        return $this;
    }

    public function removeClassifiedAd(ClassifiedAd $ad): self
    {
        if ($this->classifiedAds->removeElement($ad) && $ad->getOwner() === $this) {
            $ad->setOwner(null);
        }

        return $this;
    }

    // ---------------------- Relation : Photo.owner → User ----------------------

    /** @return Collection<int, Photo> */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos->add($photo);
            $photo->setOwner($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo) && $photo->getOwner() === $this) {
            $photo->setOwner(null);
        }

        return $this;
    }

    // ---------------------- Relation: OutingRequest.user → User (nullable) ----------------------

    /** @return Collection<int, OutingRequest> */
    public function getOutingRequests(): Collection
    {
        return $this->outingRequests;
    }

    public function addOutingRequest(OutingRequest $req): self
    {
        if (!$this->outingRequests->contains($req)) {
            $this->outingRequests->add($req);
            $req->setUser($this);
        }

        return $this;
    }

    public function removeOutingRequest(OutingRequest $req): self
    {
        if ($this->outingRequests->removeElement($req) && $req->getUser() === $this) {
            $req->setUser(null);
        }

        return $this;
    }

    // ---------------------- Relation: MembershipApplication.processedBy → User (nullable) ----------------------

    /** @return Collection<int, MembershipApplication> */
    public function getProcessedApplications(): Collection
    {
        return $this->processedApplications;
    }

    public function addProcessedApplication(MembershipApplication $app): self
    {
        if (!$this->processedApplications->contains($app)) {
            $this->processedApplications->add($app);
            $app->setProcessedBy($this);
        }

        return $this;
    }

    public function removeProcessedApplication(MembershipApplication $app): self
    {
        if ($this->processedApplications->removeElement($app) && $app->getProcessedBy() === $this) {
            $app->setProcessedBy(null);
        }

        return $this;
    }

    // ---------------------- Relation : Membership.user → User ----------------------

    /** @return Collection<int, Membership> */
    public function getMemberships(): Collection
    {
        return $this->memberships;
    }

    public function addMembership(Membership $m): self
    {
        if (!$this->memberships->contains($m)) {
            $this->memberships->add($m);
            $m->setUser($this);
        }

        return $this;
    }

    public function removeMembership(Membership $m): self
    {
        $this->memberships->removeElement($m);

        return $this;
    }

    public function isApproved(): bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved): self
    {
        $this->isApproved = $isApproved;

        return $this;
    }

}
