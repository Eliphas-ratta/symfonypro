<?php

namespace App\Entity;


use App\Repository\CapacityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CapacityRepository::class)]
class Capacity
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
    private ?string $Image_Capacity = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    /**
     * @var Collection<int, Domain>
     */
    #[ORM\ManyToMany(targetEntity: Domain::class, inversedBy: 'capacities')]
    private Collection $Domain;

    #[ORM\ManyToOne(inversedBy: 'World_Capacity')]
    #[ORM\JoinColumn(nullable: false)]
    private ?World $Capacity_world = null;

    public function __construct()
    {
        $this->Domain = new ArrayCollection();
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

    public function getImageCapacity(): ?string
    {
        return $this->Image_Capacity;
    }

    public function setImageCapacity(?string $Image_Capacity): static
    {
        $this->Image_Capacity = $Image_Capacity;

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
     * @return Collection<int, Domain>
     */
    public function getDomain(): Collection
    {
        return $this->Domain;
    }

    public function addDomain(Domain $domain): static
    {
        if (!$this->Domain->contains($domain)) {
            $this->Domain->add($domain);
        }

        return $this;
    }

    public function removeDomain(Domain $domain): static
    {
        $this->Domain->removeElement($domain);

        return $this;
    }

    public function getCapacityWorld(): ?World
    {
        return $this->Capacity_world;
    }

    public function setCapacityWorld(?World $Capacity_world): static
    {
        $this->Capacity_world = $Capacity_world;

        return $this;
    }
}
