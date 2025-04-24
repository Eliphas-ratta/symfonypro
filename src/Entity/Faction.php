<?php

namespace App\Entity;

use App\Repository\FactionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactionRepository::class)]
class Faction
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
    private ?string $Regime = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_Faction = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Emblem_Image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Couleur = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Created_at = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Capital = null;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, inversedBy: 'Faction_Dirigeant')]

    #[ORM\JoinTable(name: 'faction_dirigeant')]
    private Collection $Dirigeant_hero;
    
    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, inversedBy: 'Faction_Linked')]
    private Collection $Hero_Linked;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'Hero_Faction')]
private Collection $Faction_Hero;


    /**
     * @var Collection<int, City>
     */
    #[ORM\ManyToMany(targetEntity: City::class, inversedBy: 'City_Faction')]
    private Collection $Faction_City;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, inversedBy: 'Guild_Faction')]
    private Collection $Faction_Guild;

    /**
     * @var Collection<int, Continent>
     */
    #[ORM\ManyToMany(targetEntity: Continent::class, inversedBy: 'Continent_Faction')]
    private Collection $Faction_Continent;

    #[ORM\ManyToOne(inversedBy: 'World_Faction')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Faction_World = null;

    public function __construct()
    {
        $this->Dirigeant_hero = new ArrayCollection();
        $this->Hero_Linked = new ArrayCollection();
        $this->Faction_Hero = new ArrayCollection();
        $this->Faction_City = new ArrayCollection();
        $this->Faction_Guild = new ArrayCollection();
        $this->Faction_Continent = new ArrayCollection();
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

    public function getRegime(): ?string
    {
        return $this->Regime;
    }

    public function setRegime(?string $Regime): static
    {
        $this->Regime = $Regime;

        return $this;
    }

    public function getImageFaction(): ?string
    {
        return $this->Image_Faction;
    }

    public function setImageFaction(?string $Image_Faction): static
    {
        $this->Image_Faction = $Image_Faction;

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

    public function getEmblemImage(): ?string
    {
        return $this->Emblem_Image;
    }

    public function setEmblemImage(?string $Emblem_Image): static
    {
        $this->Emblem_Image = $Emblem_Image;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->Couleur;
    }

    public function setCouleur(?string $Couleur): static
    {
        $this->Couleur = $Couleur;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->Created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $Created_at): static
    {
        $this->Created_at = $Created_at;

        return $this;
    }

    public function getCapital(): ?string
    {
        return $this->Capital;
    }

    public function setCapital(?string $Capital): static
    {
        $this->Capital = $Capital;

        return $this;
    }

    /**
     * @return Collection<int, Hero>
     */
    public function getDirigeantHero(): Collection
    {
        return $this->Dirigeant_hero;
    }

    public function addDirigeantHero(Hero $dirigeantHero): static
    {
        if (!$this->Dirigeant_hero->contains($dirigeantHero)) {
            $this->Dirigeant_hero->add($dirigeantHero);
        }

        return $this;
    }

    public function removeDirigeantHero(Hero $dirigeantHero): static
    {
        $this->Dirigeant_hero->removeElement($dirigeantHero);

        return $this;
    }

    /**
     * @return Collection<int, Hero>
     */
    public function getHeroLinked(): Collection
    {
        return $this->Hero_Linked;
    }

    public function addHeroLinked(Hero $heroLinked): static
    {
        if (!$this->Hero_Linked->contains($heroLinked)) {
            $this->Hero_Linked->add($heroLinked);
        }

        return $this;
    }

    public function removeHeroLinked(Hero $heroLinked): static
    {
        $this->Hero_Linked->removeElement($heroLinked);

        return $this;
    }

    /**
     * @return Collection<int, Hero>
     */
    public function getFactionHero(): Collection
    {
        return $this->Faction_Hero;
    }

    public function addFactionHero(Hero $factionHero): static
    {
        if (!$this->Faction_Hero->contains($factionHero)) {
            $this->Faction_Hero->add($factionHero);
            $factionHero->addHeroFaction($this);
        }

        return $this;
    }

    public function removeFactionHero(Hero $factionHero): static
    {
        if ($this->Faction_Hero->removeElement($factionHero)) {
            $factionHero->removeHeroFaction($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, City>
     */
    public function getFactionCity(): Collection
    {
        return $this->Faction_City;
    }

    public function addFactionCity(City $factionCity): static
    {
        if (!$this->Faction_City->contains($factionCity)) {
            $this->Faction_City->add($factionCity);
        }

        return $this;
    }

    public function removeFactionCity(City $factionCity): static
    {
        $this->Faction_City->removeElement($factionCity);

        return $this;
    }

    /**
     * @return Collection<int, Guild>
     */
    public function getFactionGuild(): Collection
    {
        return $this->Faction_Guild;
    }

    public function addFactionGuild(Guild $factionGuild): static
    {
        if (!$this->Faction_Guild->contains($factionGuild)) {
            $this->Faction_Guild->add($factionGuild);
        }

        return $this;
    }

    public function removeFactionGuild(Guild $factionGuild): static
    {
        $this->Faction_Guild->removeElement($factionGuild);

        return $this;
    }

    /**
     * @return Collection<int, Continent>
     */
    public function getFactionContinent(): Collection
    {
        return $this->Faction_Continent;
    }

    public function addFactionContinent(Continent $factionContinent): static
    {
        if (!$this->Faction_Continent->contains($factionContinent)) {
            $this->Faction_Continent->add($factionContinent);
        }

        return $this;
    }

    public function removeFactionContinent(Continent $factionContinent): static
    {
        $this->Faction_Continent->removeElement($factionContinent);

        return $this;
    }

    public function getFactionWorld(): ?World
    {
        return $this->Faction_World;
    }

    public function setFactionWorld(?World $Faction_World): static
    {
        $this->Faction_World = $Faction_World;

        return $this;
    }
}
