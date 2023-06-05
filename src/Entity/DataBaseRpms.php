<?php

namespace App\Entity;

use App\Repository\DataBaseRpmsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataBaseRpmsRepository::class)
 */
class DataBaseRpms
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
    private $AgencesDeCommunication;

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
    private $adresse2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAgencesDeCommunication(): ?string
    {
        return $this->AgencesDeCommunication;
    }

    public function setAgencesDeCommunication(?string $AgencesDeCommunication): self
    {
        $this->AgencesDeCommunication = $AgencesDeCommunication;

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

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;

        return $this;
    }
}
