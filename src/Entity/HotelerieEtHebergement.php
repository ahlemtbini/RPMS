<?php

namespace App\Entity;

use App\Repository\HotelerieEtHebergementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HotelerieEtHebergementRepository::class)
 */
class HotelerieEtHebergement
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
    private $maison_d_hotes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Type;

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
    private $Num_Tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $E_mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Fonction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaisonDHotes(): ?string
    {
        return $this->maison_d_hotes;
    }

    public function setMaisonDHotes(?string $maison_d_hotes): self
    {
        $this->maison_d_hotes = $maison_d_hotes;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        $this->Type = $Type;

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
        return $this->Num_Tel;
    }

    public function setNumTel(?string $Num_Tel): self
    {
        $this->Num_Tel = $Num_Tel;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->E_mail;
    }

    public function setEMail(?string $E_mail): self
    {
        $this->E_mail = $E_mail;

        return $this;
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

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(?string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }
}
