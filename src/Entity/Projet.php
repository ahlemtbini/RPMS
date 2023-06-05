<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
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
    private $departement;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $listeServices = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionProjet;

    /**
     * @ORM\Column(type="string", length=2555, nullable=true)
     */
    private $fournisseurProjet;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $coutInterne;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixVent;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $commission;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixNegociation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $marge;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $pourcentage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeCollaboration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dureeColaboration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avence;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $echeanceDePayement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $VisAVis;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ProspectionId;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getListeServices(): ?array
    {
        return $this->listeServices;
    }

    public function setListeServices(?array $listeServices): self
    {
        $this->listeServices = $listeServices;

        return $this;
    }

    public function getDescriptionProjet(): ?string
    {
        return $this->descriptionProjet;
    }

    public function setDescriptionProjet(?string $descriptionProjet): self
    {
        $this->descriptionProjet = $descriptionProjet;

        return $this;
    }

    public function getFournisseurProjet():?string
    {
        return $this->fournisseurProjet;
    }

    public function setFournisseurProjet(?string $fournisseurProjet): self
    {
        $this->fournisseurProjet = $fournisseurProjet;

        return $this;
    }

    public function getCoutInterne(): ?float
    {
        return $this->coutInterne;
    }

    public function setCoutInterne(?float $coutInterne): self
    {
        $this->coutInterne = $coutInterne;

        return $this;
    }

    public function getPrixVent(): ?float
    {
        return $this->prixVent;
    }

    public function setPrixVent(?float $prixVent): self
    {
        $this->prixVent = $prixVent;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getCommission(): ?float
    {
        return $this->commission;
    }

    public function setCommission(?float $commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    public function getPrixNegociation(): ?float
    {
        return $this->prixNegociation;
    }

    public function setPrixNegociation(?float $prixNegociation): self
    {
        $this->prixNegociation = $prixNegociation;

        return $this;
    }

    public function getMarge(): ?float
    {
        return $this->marge;
    }

    public function setMarge(?float $marge): self
    {
        $this->marge = $marge;

        return $this;
    }

    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    public function setPourcentage(?float $pourcentage): self
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getTypeCollaboration(): ?string
    {
        return $this->typeCollaboration;
    }

    public function setTypeCollaboration(?string $typeCollaboration): self
    {
        $this->typeCollaboration = $typeCollaboration;

        return $this;
    }

    public function getDureeColaboration(): ?string
    {
        return $this->dureeColaboration;
    }

    public function setDureeColaboration(?string $dureeColaboration): self
    {
        $this->dureeColaboration = $dureeColaboration;

        return $this;
    }

    public function getAvence(): ?string
    {
        return $this->avence;
    }

    public function setAvence(?string $avence): self
    {
        $this->avence = $avence;

        return $this;
    }

    public function getEcheanceDePayement(): ?\DateTimeInterface
    {
        return $this->echeanceDePayement;
    }

    public function setEcheanceDePayement(?\DateTimeInterface $echeanceDePayement): self
    {
        $this->echeanceDePayement = $echeanceDePayement;

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

    public function getVisAVis(): ?string
    {
        return $this->VisAVis;
    }

    public function setVisAVis(?string $VisAVis): self
    {
        $this->VisAVis = $VisAVis;

        return $this;
    }

    public function getProspectionId(): ?int
    {
        return $this->ProspectionId;
    }

    public function setProspectionId(?int $ProspectionId): self
    {
        $this->ProspectionId = $ProspectionId;

        return $this;
    }


}
