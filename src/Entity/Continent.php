<?php

namespace App\Entity;

use App\Repository\ContinentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContinentRepository::class)]
class Continent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_Continent = null;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, mappedBy: 'Faction_Continent')]
    private Collection $Continent_Faction;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'Hero_Continent')]
    private Collection $Continent_Hero;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, mappedBy: 'Guild_Continent')]
    private Collection $Continent_Guild;

    #[ORM\ManyToOne(inversedBy: 'World_Continent')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Continent_World = null;

    public function __construct()
    {
        $this->Continent_Faction = new ArrayCollection();
        $this->Continent_Hero = new ArrayCollection();
        $this->Continent_Guild = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getImageContinent(): ?string
    {
        return $this->Image_Continent;
    }

    public function setImageContinent(?string $Image_Continent): static
    {
        $this->Image_Continent = $Image_Continent;

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getContinentFaction(): Collection
    {
        return $this->Continent_Faction;
    }

    public function addContinentFaction(Faction $continentFaction): static
    {
        if (!$this->Continent_Faction->contains($continentFaction)) {
            $this->Continent_Faction->add($continentFaction);
            $continentFaction->addFactionContinent($this);
        }

        return $this;
    }

    public function removeContinentFaction(Faction $continentFaction): static
    {
        if ($this->Continent_Faction->removeElement($continentFaction)) {
            $continentFaction->removeFactionContinent($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Hero>
     */
    public function getContinentHero(): Collection
    {
        return $this->Continent_Hero;
    }

    public function addContinentHero(Hero $continentHero): static
    {
        if (!$this->Continent_Hero->contains($continentHero)) {
            $this->Continent_Hero->add($continentHero);
            $continentHero->addHeroContinent($this);
        }

        return $this;
    }

    public function removeContinentHero(Hero $continentHero): static
    {
        if ($this->Continent_Hero->removeElement($continentHero)) {
            $continentHero->removeHeroContinent($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Guild>
     */
    public function getContinentGuild(): Collection
    {
        return $this->Continent_Guild;
    }

    public function addContinentGuild(Guild $continentGuild): static
    {
        if (!$this->Continent_Guild->contains($continentGuild)) {
            $this->Continent_Guild->add($continentGuild);
            $continentGuild->addGuildContinent($this);
        }

        return $this;
    }

    public function removeContinentGuild(Guild $continentGuild): static
    {
        if ($this->Continent_Guild->removeElement($continentGuild)) {
            $continentGuild->removeGuildContinent($this);
        }

        return $this;
    }

    public function getContinentWorld(): ?World
    {
        return $this->Continent_World;
    }

    public function setContinentWorld(?World $Continent_World): static
    {
        $this->Continent_World = $Continent_World;

        return $this;
    }
}
