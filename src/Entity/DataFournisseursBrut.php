<?php

namespace App\Entity;

use App\Repository\DataFournisseursBrutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataFournisseursBrutRepository::class)
 */
class DataFournisseursBrut
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
    private $Enseigne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Rubrique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Gerant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Commune_Arrondissement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Num_tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Lien_reseaux_sociaux_web;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnseigne(): ?string
    {
        return $this->Enseigne;
    }

    public function setEnseigne(?string $Enseigne): self
    {
        $this->Enseigne = $Enseigne;

        return $this;
    }

    public function getRubrique(): ?string
    {
        return $this->Rubrique;
    }

    public function setRubrique(?string $Rubrique): self
    {
        $this->Rubrique = $Rubrique;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getGerant(): ?string
    {
        return $this->Gerant;
    }

    public function setGerant(?string $Gerant): self
    {
        $this->Gerant = $Gerant;

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

    public function getCommuneArrondissement(): ?string
    {
        return $this->Commune_Arrondissement;
    }

    public function setCommuneArrondissement(?string $Commune_Arrondissement): self
    {
        $this->Commune_Arrondissement = $Commune_Arrondissement;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->Num_tel;
    }

    public function setNumTel(?string $Num_tel): self
    {
        $this->Num_tel = $Num_tel;

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

    public function getLienReseauxSociauxWeb(): ?string
    {
        return $this->Lien_reseaux_sociaux_web;
    }

    public function setLienReseauxSociauxWeb(?string $Lien_reseaux_sociaux_web): self
    {
        $this->Lien_reseaux_sociaux_web = $Lien_reseaux_sociaux_web;

        return $this;
    }
}
