<?php

namespace App\Entity;

use App\Repository\HeroRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeroRepository::class)]
class Hero
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Age = null;

    #[ORM\Column(length: 255)]
    private ?string $Size = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_Hero = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Fonction = null;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, mappedBy: 'Dirigeant')]
    private Collection $Guilds;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, mappedBy: 'Hero_Linked')]
    private Collection $Guilds_Linked;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, mappedBy: 'Dirigeant_hero')]
    private Collection $Faction_Dirigeant;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, mappedBy: 'Hero_Linked')]
    private Collection $Faction_Linked;

    /**
     * @var Collection<int, Domain>
     */
    #[ORM\ManyToMany(targetEntity: Domain::class, inversedBy: 'Heroes')]
#[ORM\JoinTable(name: 'hero_domain')]
private Collection $Hero_Domain;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\ManyToMany(targetEntity: Faction::class, inversedBy: 'Faction_Hero')]
    private Collection $Hero_Faction;

    /**
     * @var Collection<int, Race>
     */
    #[ORM\ManyToMany(targetEntity: Race::class, inversedBy: 'Race_Hero')]
    private Collection $Hero_Race;

    /**
     * @var Collection<int, City>
     */
    #[ORM\ManyToMany(targetEntity: City::class, inversedBy: 'City_Hero')]
    private Collection $Hero_City;

    /**
     * @var Collection<int, Continent>
     */
    #[ORM\ManyToMany(targetEntity: Continent::class, inversedBy: 'Continent_Hero')]
    private Collection $Hero_Continent;

    #[ORM\ManyToOne(inversedBy: 'World_Hero')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Hero_World = null;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, inversedBy: 'heroes')]
    private Collection $guild;

    public function __construct()
    {
        $this->guilds = new ArrayCollection();
        $this->Guilds_Linked = new ArrayCollection();
        $this->Faction_Dirigeant = new ArrayCollection();
        $this->Faction_Linked = new ArrayCollection();
        $this->Hero_Domain = new ArrayCollection();
        $this->Hero_Faction = new ArrayCollection();
        $this->Hero_Race = new ArrayCollection();
        $this->Hero_City = new ArrayCollection();
        $this->Hero_Continent = new ArrayCollection();
        $this->guild = new ArrayCollection();
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

    public function getAge(): ?string
    {
        return $this->Age;
    }

    public function setAge(?string $Age): static
    {
        $this->Age = $Age;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->Size;
    }

    public function setSize(string $Size): static
    {
        $this->Size = $Size;

        return $this;
    }

    public function getImageHero(): ?string
    {
        return $this->Image_Hero;
    }

    public function setImageHero(?string $Image_Hero): static
    {
        $this->Image_Hero = $Image_Hero;

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

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(?string $Fonction): static
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    /**
     * @return Collection<int, Guild>
     */
    public function getGuilds(): Collection
    {
        return $this->guilds;
    }

    public function addGuild(Guild $guild): static
    {
        if (!$this->guilds->contains($guild)) {
            $this->guilds->add($guild);
            $guild->addDirigeant($this);
        }

        return $this;
    }

    public function removeGuild(Guild $guild): static
    {
        if ($this->guilds->removeElement($guild)) {
            $guild->removeDirigeant($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Guild>
     */
    public function getGuildsLinked(): Collection
    {
        return $this->Guilds_Linked;
    }

    public function addGuildsLinked(Guild $guildsLinked): static
    {
        if (!$this->Guilds_Linked->contains($guildsLinked)) {
            $this->Guilds_Linked->add($guildsLinked);
            $guildsLinked->addHeroLinked($this);
        }

        return $this;
    }

    public function removeGuildsLinked(Guild $guildsLinked): static
    {
        if ($this->Guilds_Linked->removeElement($guildsLinked)) {
            $guildsLinked->removeHeroLinked($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getFactionDirigeant(): Collection
    {
        return $this->Faction_Dirigeant;
    }

    public function addFactionDirigeant(Faction $factionDirigeant): static
    {
        if (!$this->Faction_Dirigeant->contains($factionDirigeant)) {
            $this->Faction_Dirigeant->add($factionDirigeant);
            $factionDirigeant->addDirigeantHero($this);
        }

        return $this;
    }

    public function removeFactionDirigeant(Faction $factionDirigeant): static
    {
        if ($this->Faction_Dirigeant->removeElement($factionDirigeant)) {
            $factionDirigeant->removeDirigeantHero($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getFactionLinked(): Collection
    {
        return $this->Faction_Linked;
    }

    public function addFactionLinked(Faction $factionLinked): static
    {
        if (!$this->Faction_Linked->contains($factionLinked)) {
            $this->Faction_Linked->add($factionLinked);
            $factionLinked->addHeroLinked($this);
        }

        return $this;
    }

    public function removeFactionLinked(Faction $factionLinked): static
    {
        if ($this->Faction_Linked->removeElement($factionLinked)) {
            $factionLinked->removeHeroLinked($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Domain>
     */
    public function getHeroDomain(): Collection
    {
        return $this->Hero_Domain;
    }

    public function addHeroDomain(Domain $heroDomain): static
    {
        if (!$this->Hero_Domain->contains($heroDomain)) {
            $this->Hero_Domain->add($heroDomain);
        }

        return $this;
    }

    public function removeHeroDomain(Domain $heroDomain): static
    {
        $this->Hero_Domain->removeElement($heroDomain);

        return $this;
    }

    /**
     * @return Collection<int, Faction>
     */
    public function getHeroFaction(): Collection
    {
        return $this->Hero_Faction;
    }

    public function addHeroFaction(Faction $heroFaction): static
    {
        if (!$this->Hero_Faction->contains($heroFaction)) {
            $this->Hero_Faction->add($heroFaction);
        }

        return $this;
    }

    public function removeHeroFaction(Faction $heroFaction): static
    {
        $this->Hero_Faction->removeElement($heroFaction);

        return $this;
    }

    /**
     * @return Collection<int, Race>
     */
    public function getHeroRace(): Collection
    {
        return $this->Hero_Race;
    }

    public function addHeroRace(Race $heroRace): static
    {
        if (!$this->Hero_Race->contains($heroRace)) {
            $this->Hero_Race->add($heroRace);
        }

        return $this;
    }

    public function removeHeroRace(Race $heroRace): static
    {
        $this->Hero_Race->removeElement($heroRace);

        return $this;
    }

    /**
     * @return Collection<int, City>
     */
    public function getHeroCity(): Collection
    {
        return $this->Hero_City;
    }

    public function addHeroCity(City $heroCity): static
    {
        if (!$this->Hero_City->contains($heroCity)) {
            $this->Hero_City->add($heroCity);
        }

        return $this;
    }

    public function removeHeroCity(City $heroCity): static
    {
        $this->Hero_City->removeElement($heroCity);

        return $this;
    }

    /**
     * @return Collection<int, Continent>
     */
    public function getHeroContinent(): Collection
    {
        return $this->Hero_Continent;
    }

    public function addHeroContinent(Continent $heroContinent): static
    {
        if (!$this->Hero_Continent->contains($heroContinent)) {
            $this->Hero_Continent->add($heroContinent);
        }

        return $this;
    }

    public function removeHeroContinent(Continent $heroContinent): static
    {
        $this->Hero_Continent->removeElement($heroContinent);

        return $this;
    }

    public function getHeroWorld(): ?World
    {
        return $this->Hero_World;
    }

    public function setHeroWorld(?World $Hero_World): static
    {
        $this->Hero_World = $Hero_World;

        return $this;
    }

    /**
     * @return Collection<int, Guild>
     */
    public function getGuild(): Collection
    {
        return $this->guild;
    }
}
