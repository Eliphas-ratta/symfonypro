<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use App\Repository\GuildRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: GuildRepository::class)]
class Guild
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
    private ?string $Image_Guild = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    #[ORM\ManyToOne]
    private ?Visibility $Visibility_id = null;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, mappedBy: 'Faction_Guild')]
    private Collection $Guild_Faction;

    /**
     * @var Collection<int, Continent>
     */
    #[ORM\ManyToMany(targetEntity: Continent::class, inversedBy: 'Continent_Guild')]
    private Collection $Guild_Continent;

    /**
     * @var Collection<int, World>
     */
    #[ORM\ManyToMany(targetEntity: World::class, mappedBy: 'World_Guild')]
    private Collection $Guild_World;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'guild')]
    private Collection $heroes;

    public function __construct()
    {
        $this->Guild_Faction = new ArrayCollection();
        $this->Guild_Continent = new ArrayCollection();
        $this->Guild_World = new ArrayCollection();
        $this->heroes = new ArrayCollection();
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

    public function getImageGuild(): ?string
    {
        return $this->Image_Guild;
    }

    public function setImageGuild(?string $Image_Guild): static
    {
        $this->Image_Guild = $Image_Guild;

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

    public function getVisibilityId(): ?Visibility
    {
        return $this->Visibility_id;
    }

    public function setVisibilityId(?Visibility $Visibility_id): static
    {
        $this->Visibility_id = $Visibility_id;

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getGuildFaction(): Collection
    {
        return $this->Guild_Faction;
    }

    public function addGuildFaction(Faction $guildFaction): static
    {
        if (!$this->Guild_Faction->contains($guildFaction)) {
            $this->Guild_Faction->add($guildFaction);
            $guildFaction->addFactionGuild($this);
        }

        return $this;
    }

    public function removeGuildFaction(Faction $guildFaction): static
    {
        if ($this->Guild_Faction->removeElement($guildFaction)) {
            $guildFaction->removeFactionGuild($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Continent>
     */
    public function getGuildContinent(): Collection
    {
        return $this->Guild_Continent;
    }

    public function addGuildContinent(Continent $guildContinent): static
    {
        if (!$this->Guild_Continent->contains($guildContinent)) {
            $this->Guild_Continent->add($guildContinent);
        }

        return $this;
    }

    public function removeGuildContinent(Continent $guildContinent): static
    {
        $this->Guild_Continent->removeElement($guildContinent);

        return $this;
    }

    /**
     * @return Collection<int, World>
     */
    public function getGuildWorld(): Collection
    {
        return $this->Guild_World;
    }

    public function addGuildWorld(World $guildWorld): static
    {
        if (!$this->Guild_World->contains($guildWorld)) {
            $this->Guild_World->add($guildWorld);
            $guildWorld->addWorldGuild($this);
        }

        return $this;
    }

    public function removeGuildWorld(World $guildWorld): static
    {
        if ($this->Guild_World->removeElement($guildWorld)) {
            $guildWorld->removeWorldGuild($this);
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
            $hero->addGuild($this);
        }

        return $this;
    }

    public function removeHero(Hero $hero): static
    {
        if ($this->heroes->removeElement($hero)) {
            $hero->removeGuild($this);
        }

        return $this;
    }

  
}
