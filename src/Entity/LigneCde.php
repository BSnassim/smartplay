<?php

namespace App\Entity;

use App\Repository\LigneCdeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCdeRepository::class)
 */
class LigneCde
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=commande::class)
     * @ORM\JoinColumn(referencedColumnName="num_cde", nullable=false)
     */
    private $num_cde_ligne;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=jouet::class)
     * @ORM\JoinColumn(referencedColumnName="code_jouet", nullable=false)
     */
    private $code_jouet_ligne;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_ligne;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $remise_ligne;


    public function getNumCdeLigne(): ?commande
    {
        return $this->num_cde_ligne;
    }

    public function getCodeJouetLigne(): ?jouet
    {
        return $this->code_jouet_ligne;
    }

    public function getQteLigne(): ?int
    {
        return $this->qte_ligne;
    }

    public function setQteLigne(int $qte_ligne): self
    {
        $this->qte_ligne = $qte_ligne;

        return $this;
    }

    public function getRemiseLigne(): ?string
    {
        return $this->remise_ligne;
    }

    public function setRemiseLigne(?string $remise_ligne): self
    {
        $this->remise_ligne = $remise_ligne;

        return $this;
    }
}
