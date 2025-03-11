<?php

namespace App\Entity;

use App\Repository\CityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CityRepository::class)]
class City
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_City = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'Hero_City')]
    private Collection $City_Hero;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, mappedBy: 'Faction_City')]
    private Collection $City_Faction;

    #[ORM\ManyToOne(inversedBy: 'World_City')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $City_World = null;

    public function __construct()
    {
        $this->City_Hero = new ArrayCollection();
        $this->City_Faction = new ArrayCollection();
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

    public function getImageCity(): ?string
    {
        return $this->Image_City;
    }

    public function setImageCity(?string $Image_City): static
    {
        $this->Image_City = $Image_City;

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
     * @return Collection<int, Hero>
     */
    public function getCityHero(): Collection
    {
        return $this->City_Hero;
    }

    public function addCityHero(Hero $cityHero): static
    {
        if (!$this->City_Hero->contains($cityHero)) {
            $this->City_Hero->add($cityHero);
            $cityHero->addHeroCity($this);
        }

        return $this;
    }

    public function removeCityHero(Hero $cityHero): static
    {
        if ($this->City_Hero->removeElement($cityHero)) {
            $cityHero->removeHeroCity($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getCityFaction(): Collection
    {
        return $this->City_Faction;
    }

    public function addCityFaction(Faction $cityFaction): static
    {
        if (!$this->City_Faction->contains($cityFaction)) {
            $this->City_Faction->add($cityFaction);
            $cityFaction->addFactionCity($this);
        }

        return $this;
    }

    public function removeCityFaction(Faction $cityFaction): static
    {
        if ($this->City_Faction->removeElement($cityFaction)) {
            $cityFaction->removeFactionCity($this);
        }

        return $this;
    }

    public function getCityWorld(): ?World
    {
        return $this->City_World;
    }

    public function setCityWorld(?World $City_World): static
    {
        $this->City_World = $City_World;

        return $this;
    }
}
