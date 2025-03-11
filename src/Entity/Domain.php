<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use App\Repository\DomainRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DomainRepository::class)]
class Domain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_Domain = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    /**
     * @var Collection<int, Capacity>
     */
    #[ORM\ManyToMany(targetEntity: Capacity::class, mappedBy: 'Domain')]
    private Collection $capacities;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'Hero_Domain')]
    private Collection $Heroes;

    /**
     * @var Collection<int, Race>
     */
    #[ORM\ManyToMany(targetEntity: Race::class, mappedBy: 'Race_Domain')]
    private Collection $Domain_Race;

    #[ORM\ManyToOne(inversedBy: 'World_Domain')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Domain_World = null;

    public function __construct()
    {
        $this->capacities = new ArrayCollection();
        $this->heroes = new ArrayCollection();
        $this->Domain_Race = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }

    public function getImageDomain(): ?string
    {
        return $this->Image_Domain;
    }

    public function setImageDomain(?string $Image_Domain): static
    {
        $this->Image_Domain = $Image_Domain;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection<int, Capacity>
     */
    public function getCapacities(): Collection
    {
        return $this->capacities;
    }

    public function addCapacity(Capacity $capacity): static
    {
        if (!$this->capacities->contains($capacity)) {
            $this->capacities->add($capacity);
            $capacity->addDomain($this);
        }

        return $this;
    }

    public function removeCapacity(Capacity $capacity): static
    {
        if ($this->capacities->removeElement($capacity)) {
            $capacity->removeDomain($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Hero>
     */
    public function getHeroes(): Collection
    {
        return $this->heroes;
    }

    public function addHero(Hero $hero): static
    {
        if (!$this->heroes->contains($hero)) {
            $this->heroes->add($hero);
            $hero->addHeroDomain($this);
        }

        return $this;
    }

    public function removeHero(Hero $hero): static
    {
        if ($this->heroes->removeElement($hero)) {
            $hero->removeHeroDomain($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Race>
     */
    public function getDomainRace(): Collection
    {
        return $this->Domain_Race;
    }

    public function addDomainRace(Race $domainRace): static
    {
        if (!$this->Domain_Race->contains($domainRace)) {
            $this->Domain_Race->add($domainRace);
            $domainRace->addRaceDomain($this);
        }

        return $this;
    }

    public function removeDomainRace(Race $domainRace): static
    {
        if ($this->Domain_Race->removeElement($domainRace)) {
            $domainRace->removeRaceDomain($this);
        }

        return $this;
    }

    public function getDomainWorld(): ?World
    {
        return $this->Domain_World;
    }

    public function setDomainWorld(?World $Domain_World): static
    {
        $this->Domain_World = $Domain_World;

        return $this;
    }
}
