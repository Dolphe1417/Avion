<?php

namespace App\Entity;

use App\Repository\TypeAvionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeAvionRepository::class)]
class TypeAvion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nom = null;

    #[ORM\OneToMany(targetEntity: avion::class, mappedBy: 'typeAvion')]
    private Collection $avion;

    public function __construct()
    {
        $this->avion = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, avion>
     */
    public function getAvion(): Collection
    {
        return $this->avion;
    }

    public function addAvion(avion $avion): static
    {
        if (!$this->avion->contains($avion)) {
            $this->avion->add($avion);
            $avion->setTypeAvion($this);
        }

        return $this;
    }

    public function removeAvion(avion $avion): static
    {
        if ($this->avion->removeElement($avion)) {
            // set the owning side to null (unless already changed)
            if ($avion->getTypeAvion() === $this) {
                $avion->setTypeAvion(null);
            }
        }

        return $this;
    }
}
