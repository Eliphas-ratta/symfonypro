<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profileImage = null;

    /**
     * @var Collection<int, World>
     */
    #[ORM\ManyToMany(targetEntity: World::class, inversedBy: 'users')]
    private Collection $userHasWorld;

    public function __construct()
    {
        $this->userHasWorld = new ArrayCollection();
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getProfileImage(): ?string
    {
        return $this->profileImage;
    }

    public function setProfileImage(?string $profileImage): self
    {
        $this->profileImage = $profileImage;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // Méthode vide mais nécessaire pour l'interface
    }

    public function getUserIdentifier(): string
    {
        return $this->email; // Correspond à l'identifiant unique (username ou email selon ton choix)
    }

    /**
     * @return Collection<int, World>
     */
    public function getUserHasWorld(): Collection
    {
        return $this->userHasWorld;
    }

    public function addUserHasWorld(World $userHasWorld): static
    {
        if (!$this->userHasWorld->contains($userHasWorld)) {
            $this->userHasWorld->add($userHasWorld);
        }

        return $this;
    }

    public function removeUserHasWorld(World $userHasWorld): static
    {
        $this->userHasWorld->removeElement($userHasWorld);
        return $this;
    }
}
