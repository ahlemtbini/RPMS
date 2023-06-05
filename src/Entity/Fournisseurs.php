<?php

namespace App\Entity;

use App\Repository\FournisseursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseursRepository::class)
 */
class Fournisseurs
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
    private $SOCIETE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ACTIVITE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CONTACT;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SERVICEPOSTE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $TEL;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EMAIL;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSOCIETE(): ?string
    {
        return $this->SOCIETE;
    }

    public function setSOCIETE(?string $SOCIETE): self
    {
        $this->SOCIETE = $SOCIETE;

        return $this;
    }
    public function getACTIVITE(): ?string
    {
        return $this->ACTIVITE;
    }

    public function setACTIVITE(?string $ACTIVITE): self
    {
        $this->ACTIVITE = $ACTIVITE;

        return $this;
    }

    public function getCONTACT(): ?string
    {
        return $this->CONTACT;
    }

    public function setCONTACT(?string $CONTACT): self
    {
        $this->CONTACT = $CONTACT;

        return $this;
    }

    public function getSERVICEPOSTE(): ?string
    {
        return $this->SERVICEPOSTE;
    }

    public function setSERVICEPOSTE(?string $SERVICEPOSTE): self
    {
        $this->SERVICEPOSTE = $SERVICEPOSTE;

        return $this;
    }

    public function getTEL(): ?string
    {
        return $this->TEL;
    }

    public function setTEL(?string $TEL): self
    {
        $this->TEL = $TEL;

        return $this;
    }

    public function getEMAIL(): ?string
    {
        return $this->EMAIL;
    }

    public function setEMAIL(?string $EMAIL): self
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    
}
