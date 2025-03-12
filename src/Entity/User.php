<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: UserRepository::class)]
class User 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Username = null;

    #[ORM\Column(length: 50)]
    private ?string $Password = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?bool $Role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Profile_image = null;

    /**
     * @var Collection<int, World>
     */
    #[ORM\ManyToMany(targetEntity: World::class, inversedBy: 'users')]
    private Collection $User_has_World;

    public function __construct()
    {
        $this->User_has_World = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): static
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): static
    {
        $this->Password = $Password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function isRole(): ?bool
    {
        return $this->Role;
    }

    public function setRole(bool $Role): static
    {
        $this->Role = $Role;

        return $this;
    }

    public function getProfileImage(): ?string
    {
        return $this->Profile_image;
    }

    public function setProfileImage(?string $Profile_image): static
    {
        $this->Profile_image = $Profile_image;

        return $this;
    }

    /**
     * @return Collection<int, World>
     */
    public function getUserHasWorld(): Collection
    {
        return $this->User_has_World;
    }

    public function addUserHasWorld(World $userHasWorld): static
    {
        if (!$this->User_has_World->contains($userHasWorld)) {
            $this->User_has_World->add($userHasWorld);
        }

        return $this;
    }

    public function removeUserHasWorld(World $userHasWorld): static
    {
        $this->User_has_World->removeElement($userHasWorld);

        return $this;
    }
}
