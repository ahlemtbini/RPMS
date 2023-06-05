<?php

namespace App\Entity;

use App\Repository\TextileEtHabillementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TextileEtHabillementRepository::class)
 */
class TextileEtHabillement
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
    private $Createur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $E_mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Numero;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

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

    public function getCreateur(): ?string
    {
        return $this->Createur;
    }

    public function setCreateur(?string $Createur): self
    {
        $this->Createur = $Createur;

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

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(?string $Numero): self
    {
        $this->Numero = $Numero;

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
