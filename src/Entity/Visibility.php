<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\VisibilityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisibilityRepository::class)]
class Visibility
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Visibility = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisibility(): ?string
    {
        return $this->Visibility;
    }

    public function setVisibility(?string $Visibility): static
    {
        $this->Visibility = $Visibility;

        return $this;
    }
}
