<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 */
class Contacts
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
    private $COMMERCIAL;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CLIENT;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CONTACT;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $POSTE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NTEL;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NPORTABLE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $COMMENTAIRES;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCOMMERCIAL(): ?string
    {
        return $this->COMMERCIAL;
    }

    public function setCOMMERCIAL(?string $COMMERCIAL): self
    {
        $this->COMMERCIAL = $COMMERCIAL;

        return $this;
    }

    public function getCLIENT(): ?string
    {
        return $this->CLIENT;
    }

    public function setCLIENT(?string $CLIENT): self
    {
        $this->CLIENT = $CLIENT;

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

    public function getPOSTE(): ?string
    {
        return $this->POSTE;
    }

    public function setPOSTE(?string $POSTE): self
    {
        $this->POSTE = $POSTE;

        return $this;
    }

    public function getNTEL(): ?string
    {
        return $this->NTEL;
    }

    public function setNTEL(?string $NTEL): self
    {
        $this->NTEL = $NTEL;

        return $this;
    }

    public function getNPORTABLE(): ?string
    {
        return $this->NPORTABLE;
    }

    public function setNPORTABLE(?string $NPORTABLE): self
    {
        $this->NPORTABLE = $NPORTABLE;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCOMMENTAIRES(): ?string
    {
        return $this->COMMENTAIRES;
    }

    public function setCOMMENTAIRES(?string $COMMENTAIRES): self
    {
        $this->COMMENTAIRES = $COMMENTAIRES;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

}
