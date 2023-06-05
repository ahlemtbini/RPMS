<?php

namespace App\Entity;

use App\Repository\AgenceDeCommunicationRpRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgenceDeCommunicationRpRepository::class)
 */
class AgenceDeCommunicationRp
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
    private $Agence_de_communication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Representant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgenceDeCommunication(): ?string
    {
        return $this->Agence_de_communication;
    }

    public function setAgenceDeCommunication(?string $Agence_de_communication): self
    {
        $this->Agence_de_communication = $Agence_de_communication;

        return $this;
    }

    public function getRepresentant(): ?string
    {
        return $this->Representant;
    }

    public function setRepresentant(?string $Representant): self
    {
        $this->Representant = $Representant;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAdress1(): ?string
    {
        return $this->adress1;
    }

    public function setAdress1(?string $adress1): self
    {
        $this->adress1 = $adress1;

        return $this;
    }
}
