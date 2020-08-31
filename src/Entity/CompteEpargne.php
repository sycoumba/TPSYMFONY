<?php

namespace App\Entity;

use App\Repository\CompteEpargneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteEpargneRepository::class)
 */
class CompteEpargne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_agence;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero_compte;

    /**
     * @ORM\Column(type="integer")
     */
    private $cle_rib;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $solde_compte;

    /**
     * @ORM\Column(type="date")
     */
    private $date_ouverture;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $frais_ouverture;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant_remuneration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroAgence(): ?string
    {
        return $this->numero_agence;
    }

    public function setNumeroAgence(string $numero_agence): self
    {
        $this->numero_agence = $numero_agence;

        return $this;
    }

    public function getNumeroCompte(): ?int
    {
        return $this->numero_compte;
    }

    public function setNumeroCompte(int $numero_compte): self
    {
        $this->numero_compte = $numero_compte;

        return $this;
    }

    public function getCleRib(): ?int
    {
        return $this->cle_rib;
    }

    public function setCleRib(int $cle_rib): self
    {
        $this->cle_rib = $cle_rib;

        return $this;
    }

    public function getSoldeCompte(): ?string
    {
        return $this->solde_compte;
    }

    public function setSoldeCompte(string $solde_compte): self
    {
        $this->solde_compte = $solde_compte;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->date_ouverture;
    }

    public function setDateOuverture(\DateTimeInterface $date_ouverture): self
    {
        $this->date_ouverture = $date_ouverture;

        return $this;
    }

    public function getFraisOuverture(): ?string
    {
        return $this->frais_ouverture;
    }

    public function setFraisOuverture(string $frais_ouverture): self
    {
        $this->frais_ouverture = $frais_ouverture;

        return $this;
    }

    public function getMontantRemuneration(): ?int
    {
        return $this->montant_remuneration;
    }

    public function setMontantRemuneration(int $montant_remuneration): self
    {
        $this->montant_remuneration = $montant_remuneration;

        return $this;
    }
}
