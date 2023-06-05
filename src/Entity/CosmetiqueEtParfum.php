<?php

namespace App\Entity;

use App\Repository\CosmetiqueEtParfumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CosmetiqueEtParfumRepository::class)
 */
class CosmetiqueEtParfum
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
    private $Type;

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
    private $Num_Tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $E_mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Commentaire;

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

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        $this->Type = $Type;

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

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }
}
