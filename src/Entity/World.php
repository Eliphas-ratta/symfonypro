<?php

namespace App\Entity;

use App\Repository\WorldRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorldRepository::class)]
class World
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
    private ?string $Worldimage = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'worlds')]

    private Collection $users;

    /**
     * @var Collection<int, Guild>
     */
    #[ORM\ManyToMany(targetEntity: Guild::class, inversedBy: 'Guild_World')]
    private Collection $World_Guild;

    /**
     * @var Collection<int, Faction>
     */
    #[ORM\OneToMany(targetEntity: Faction::class, mappedBy: 'Faction_World')]
    private Collection $World_Faction;

    /**
     * @var Collection<int, Capacity>
     */
    #[ORM\OneToMany(targetEntity: Capacity::class, mappedBy: 'Capacity_world', orphanRemoval: true)]
    private Collection $World_Capacity;

    /**
     * @var Collection<int, City>
     */
    #[ORM\OneToMany(targetEntity: City::class, mappedBy: 'City_World', orphanRemoval: true)]
    private Collection $World_City;

    /**
     * @var Collection<int, Continent>
     */
    #[ORM\OneToMany(targetEntity: Continent::class, mappedBy: 'Continent_World', orphanRemoval: true)]
    private Collection $World_Continent;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\OneToMany(targetEntity: Hero::class, mappedBy: 'Hero_World', orphanRemoval: true)]
    private Collection $World_Hero;

    /**
     * @var Collection<int, Domain>
     */
    #[ORM\OneToMany(targetEntity: Domain::class, mappedBy: 'Domain_World', orphanRemoval: true)]
    private Collection $World_Domain;

    /**
     * @var Collection<int, Race>
     */
    #[ORM\OneToMany(targetEntity: Race::class, mappedBy: 'Race_World', orphanRemoval: true)]
    private Collection $World_Race;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->World_Guild = new ArrayCollection();
        $this->World_Faction = new ArrayCollection();
        $this->World_Capacity = new ArrayCollection();
        $this->World_City = new ArrayCollection();
        $this->World_Continent = new ArrayCollection();
        $this->World_Hero = new ArrayCollection();
        $this->World_Domain = new ArrayCollection();
        $this->World_Race = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getName(): ?string { return $this->Name; }

    public function setName(string $Name): static
    {
        $this->Name = $Name;
        return $this;
    }

    public function getDescription(): ?string { return $this->Description; }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;
        return $this;
    }

    public function getWorldimage(): ?string { return $this->Worldimage; }

    public function setWorldimage(?string $Worldimage): static
    {
        $this->Worldimage = $Worldimage;
        return $this;
    }

    /** @return Collection<int, User> */
    public function getUsers(): Collection { return $this->users; }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addWorld($this);

        }
        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeUserHasWorld($this);
        }
        return $this;
    }

    /** @return Collection<int, Guild> */
    public function getWorldGuild(): Collection { return $this->World_Guild; }

    public function addWorldGuild(Guild $guild): static
    {
        if (!$this->World_Guild->contains($guild)) {
            $this->World_Guild->add($guild);
        }
        return $this;
    }

    public function removeWorldGuild(Guild $guild): static
    {
        $this->World_Guild->removeElement($guild);
        return $this;
    }

    /** @return Collection<int, Faction> */
    public function getWorldFaction(): Collection { return $this->World_Faction; }

    public function addWorldFaction(Faction $faction): static
    {
        if (!$this->World_Faction->contains($faction)) {
            $this->World_Faction->add($faction);
            $faction->setFactionWorld($this);
        }
        return $this;
    }

    public function removeWorldFaction(Faction $faction): static
    {
        if ($this->World_Faction->removeElement($faction)) {
            if ($faction->getFactionWorld() === $this) {
                $faction->setFactionWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Capacity> */
    public function getWorldCapacity(): Collection { return $this->World_Capacity; }

    public function addWorldCapacity(Capacity $capacity): static
    {
        if (!$this->World_Capacity->contains($capacity)) {
            $this->World_Capacity->add($capacity);
            $capacity->setCapacityWorld($this);
        }
        return $this;
    }

    public function removeWorldCapacity(Capacity $capacity): static
    {
        if ($this->World_Capacity->removeElement($capacity)) {
            if ($capacity->getCapacityWorld() === $this) {
                $capacity->setCapacityWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, City> */
    public function getWorldCity(): Collection { return $this->World_City; }

    public function addWorldCity(City $city): static
    {
        if (!$this->World_City->contains($city)) {
            $this->World_City->add($city);
            $city->setCityWorld($this);
        }
        return $this;
    }

    public function removeWorldCity(City $city): static
    {
        if ($this->World_City->removeElement($city)) {
            if ($city->getCityWorld() === $this) {
                $city->setCityWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Continent> */
    public function getWorldContinent(): Collection { return $this->World_Continent; }

    public function addWorldContinent(Continent $continent): static
    {
        if (!$this->World_Continent->contains($continent)) {
            $this->World_Continent->add($continent);
            $continent->setContinentWorld($this);
        }
        return $this;
    }

    public function removeWorldContinent(Continent $continent): static
    {
        if ($this->World_Continent->removeElement($continent)) {
            if ($continent->getContinentWorld() === $this) {
                $continent->setContinentWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Hero> */
    public function getWorldHero(): Collection { return $this->World_Hero; }

    public function addWorldHero(Hero $hero): static
    {
        if (!$this->World_Hero->contains($hero)) {
            $this->World_Hero->add($hero);
            $hero->setHeroWorld($this);
        }
        return $this;
    }

    public function removeWorldHero(Hero $hero): static
    {
        if ($this->World_Hero->removeElement($hero)) {
            if ($hero->getHeroWorld() === $this) {
                $hero->setHeroWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Domain> */
    public function getWorldDomain(): Collection { return $this->World_Domain; }

    public function addWorldDomain(Domain $domain): static
    {
        if (!$this->World_Domain->contains($domain)) {
            $this->World_Domain->add($domain);
            $domain->setDomainWorld($this);
        }
        return $this;
    }

    public function removeWorldDomain(Domain $domain): static
    {
        if ($this->World_Domain->removeElement($domain)) {
            if ($domain->getDomainWorld() === $this) {
                $domain->setDomainWorld(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Race> */
    public function getWorldRace(): Collection { return $this->World_Race; }

    public function addWorldRace(Race $race): static
    {
        if (!$this->World_Race->contains($race)) {
            $this->World_Race->add($race);
            $race->setRaceWorld($this);
        }
        return $this;
    }

    public function removeWorldRace(Race $race): static
    {
        if ($this->World_Race->removeElement($race)) {
            if ($race->getRaceWorld() === $this) {
                $race->setRaceWorld(null);
            }
        }
        return $this;
    }
}
