<?php

namespace App\Entity;

use App\Repository\RaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RaceRepository::class)]
class Race
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image_Race = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    /**
     * @var Collection<int, Hero>
     */
    #[ORM\ManyToMany(targetEntity: Hero::class, mappedBy: 'Hero_Race')]
    private Collection $Race_Hero;

    /**
     * @var Collection<int, Domain>
     */
    #[ORM\ManyToMany(targetEntity: Domain::class, inversedBy: 'Domain_Race')]
    private Collection $Race_Domain;

    #[ORM\ManyToOne(inversedBy: 'World_Race')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Race_World = null;

    public function __construct()
    {
        $this->Race_Hero = new ArrayCollection();
        $this->Race_Domain = new ArrayCollection();
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

    public function getImageRace(): ?string
    {
        return $this->Image_Race;
    }

    public function setImageRace(?string $Image_Race): static
    {
        $this->Image_Race = $Image_Race;

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
    public function getRaceHero(): Collection
    {
        return $this->Race_Hero;
    }

    public function addRaceHero(Hero $raceHero): static
    {
        if (!$this->Race_Hero->contains($raceHero)) {
            $this->Race_Hero->add($raceHero);
            $raceHero->addHeroRace($this);
        }

        return $this;
    }

    public function removeRaceHero(Hero $raceHero): static
    {
        if ($this->Race_Hero->removeElement($raceHero)) {
            $raceHero->removeHeroRace($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Domain>
     */
    public function getRaceDomain(): Collection
    {
        return $this->Race_Domain;
    }

    public function addRaceDomain(Domain $raceDomain): static
    {
        if (!$this->Race_Domain->contains($raceDomain)) {
            $this->Race_Domain->add($raceDomain);
        }

        return $this;
    }

    public function removeRaceDomain(Domain $raceDomain): static
    {
        $this->Race_Domain->removeElement($raceDomain);

        return $this;
    }

    public function getRaceWorld(): ?World
    {
        return $this->Race_World;
    }

    public function setRaceWorld(?World $Race_World): static
    {
        $this->Race_World = $Race_World;

        return $this;
    }
}
