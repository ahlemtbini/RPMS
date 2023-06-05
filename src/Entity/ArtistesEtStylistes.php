<?php

namespace App\Entity;

use App\Repository\ArtistesEtStylistesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtistesEtStylistesRepository::class)
 */
class ArtistesEtStylistes
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Domaine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Groupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Pays_d_activite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Num;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->Domaine;
    }

    public function setDomaine(?string $Domaine): self
    {
        $this->Domaine = $Domaine;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->Groupe;
    }

    public function setGroupe(?string $Groupe): self
    {
        $this->Groupe = $Groupe;

        return $this;
    }

    public function getPaysDActivite(): ?string
    {
        return $this->Pays_d_activite;
    }

    public function setPaysDActivite(?string $Pays_d_activite): self
    {
        $this->Pays_d_activite = $Pays_d_activite;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->Num;
    }

    public function setNum(?string $Num): self
    {
        $this->Num = $Num;

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
}
