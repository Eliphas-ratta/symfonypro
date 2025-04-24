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
    #[ORM\ManyToMany(targetEntity: Guild::class, inversedBy: 'heroes')]
    private Collection $guilds;

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

    public function __construct()
    {
        $this->guilds = new ArrayCollection();
        $this->Faction_Dirigeant = new ArrayCollection();
        $this->Faction_Linked = new ArrayCollection();
        $this->Hero_Domain = new ArrayCollection();
        $this->Hero_Faction = new ArrayCollection();
        $this->Hero_Race = new ArrayCollection();
        $this->Hero_City = new ArrayCollection();
        $this->Hero_Continent = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getName(): ?string { return $this->Name; }
    public function setName(string $Name): static { $this->Name = $Name; return $this; }
    public function getAge(): ?string { return $this->Age; }
    public function setAge(?string $Age): static { $this->Age = $Age; return $this; }
    public function getSize(): ?string { return $this->Size; }
    public function setSize(string $Size): static { $this->Size = $Size; return $this; }
    public function getImageHero(): ?string { return $this->Image_Hero; }
    public function setImageHero(?string $Image_Hero): static { $this->Image_Hero = $Image_Hero; return $this; }
    public function getDescription(): ?string { return $this->Description; }
    public function setDescription(?string $Description): static { $this->Description = $Description; return $this; }
    public function getFonction(): ?string { return $this->Fonction; }
    public function setFonction(?string $Fonction): static { $this->Fonction = $Fonction; return $this; }

    public function getGuilds(): Collection { return $this->guilds; }
    public function addGuild(Guild $guild): static { if (!$this->guilds->contains($guild)) { $this->guilds->add($guild); $guild->addHero($this); } return $this; }
    public function removeGuild(Guild $guild): static { if ($this->guilds->removeElement($guild)) { $guild->removeHero($this); } return $this; }

    public function getFactionDirigeant(): Collection { return $this->Faction_Dirigeant; }
    public function addFactionDirigeant(Faction $f): static { if (!$this->Faction_Dirigeant->contains($f)) { $this->Faction_Dirigeant->add($f); $f->addDirigeantHero($this); } return $this; }
    public function removeFactionDirigeant(Faction $f): static { if ($this->Faction_Dirigeant->removeElement($f)) { $f->removeDirigeantHero($this); } return $this; }

    public function getFactionLinked(): Collection { return $this->Faction_Linked; }
    public function addFactionLinked(Faction $f): static { if (!$this->Faction_Linked->contains($f)) { $this->Faction_Linked->add($f); $f->addHeroLinked($this); } return $this; }
    public function removeFactionLinked(Faction $f): static { if ($this->Faction_Linked->removeElement($f)) { $f->removeHeroLinked($this); } return $this; }

    public function getHeroDomain(): Collection { return $this->Hero_Domain; }
    public function addHeroDomain(Domain $d): static { if (!$this->Hero_Domain->contains($d)) { $this->Hero_Domain->add($d); } return $this; }
    public function removeHeroDomain(Domain $d): static { $this->Hero_Domain->removeElement($d); return $this; }

    public function getHeroFaction(): Collection { return $this->Hero_Faction; }
    public function addHeroFaction(Faction $f): static { if (!$this->Hero_Faction->contains($f)) { $this->Hero_Faction->add($f); } return $this; }
    public function removeHeroFaction(Faction $f): static { $this->Hero_Faction->removeElement($f); return $this; }

    public function getHeroRace(): Collection { return $this->Hero_Race; }
    public function addHeroRace(Race $r): static { if (!$this->Hero_Race->contains($r)) { $this->Hero_Race->add($r); } return $this; }
    public function removeHeroRace(Race $r): static { $this->Hero_Race->removeElement($r); return $this; }

    public function getHeroCity(): Collection { return $this->Hero_City; }
    public function addHeroCity(City $c): static { if (!$this->Hero_City->contains($c)) { $this->Hero_City->add($c); } return $this; }
    public function removeHeroCity(City $c): static { $this->Hero_City->removeElement($c); return $this; }

    public function getHeroContinent(): Collection { return $this->Hero_Continent; }
    public function addHeroContinent(Continent $c): static { if (!$this->Hero_Continent->contains($c)) { $this->Hero_Continent->add($c); } return $this; }
    public function removeHeroContinent(Continent $c): static { $this->Hero_Continent->removeElement($c); return $this; }

    public function getHeroWorld(): ?World { return $this->Hero_World; }
    public function setHeroWorld(?World $w): static { $this->Hero_World = $w; return $this; }

    public function getFactions(): Collection
{
    return $this->Hero_Faction;
}

}
