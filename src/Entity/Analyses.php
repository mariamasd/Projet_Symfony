<?php

namespace App\Entity;

use App\Repository\AnalysesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalysesRepository::class)]
class Analyses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\ManyToMany(targetEntity: Patient::class)]
    private Collection $patient;

    #[ORM\ManyToMany(targetEntity: Secretaire::class, inversedBy: 'analyses')]
    private Collection $secretaire;

    public function __construct()
    {
        $this->patient = new ArrayCollection();
        $this->secretaire = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Patient>
     */
    public function getPatient(): Collection
    {
        return $this->patient;
    }

    public function addPatient(Patient $patient): static
    {
        if (!$this->patient->contains($patient)) {
            $this->patient->add($patient);
        }

        return $this;
    }

    public function removePatient(Patient $patient): static
    {
        $this->patient->removeElement($patient);

        return $this;
    }

    /**
     * @return Collection<int, Secretaire>
     */
    public function getSecretaire(): Collection
    {
        return $this->secretaire;
    }

    public function addSecretaire(Secretaire $secretaire): static
    {
        if (!$this->secretaire->contains($secretaire)) {
            $this->secretaire->add($secretaire);
        }

        return $this;
    }

    public function removeSecretaire(Secretaire $secretaire): static
    {
        $this->secretaire->removeElement($secretaire);

        return $this;
    }
    public function __toString():string
    {
        return
         $this->getNom() ?? '';

    }
    
}
