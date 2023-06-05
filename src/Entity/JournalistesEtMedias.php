<?php

namespace App\Entity;

use App\Repository\JournalistesEtMediasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JournalistesEtMediasRepository::class)
 */
class JournalistesEtMedias
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Media;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Personne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Numero;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedia(): ?string
    {
        return $this->Media;
    }

    public function setMedia(?string $Media): self
    {
        $this->Media = $Media;

        return $this;
    }

    public function getPersonne(): ?string
    {
        return $this->Personne;
    }

    public function setPersonne(?string $Personne): self
    {
        $this->Personne = $Personne;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(?string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(?string $Numero): self
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }
}
