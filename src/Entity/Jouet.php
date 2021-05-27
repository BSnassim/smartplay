<?php

namespace App\Entity;

use App\Repository\JouetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JouetRepository::class)
 */
class Jouet
{


        /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $code_jouet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $des_jouet;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_stock_jouet;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pu_jouet;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class)
     * @ORM\JoinColumn(referencedColumnName="code_four", nullable=false)
     */
    private $code_four_jouet;

    public function getCodeJouet(): ?int
    {
        return $this->code_jouet;
    }

    public function getDesJouet(): ?string
    {
        return $this->des_jouet;
    }

    public function setDesJouet(?string $des_jouet): self
    {
        $this->des_jouet = $des_jouet;

        return $this;
    }

    public function getQteStockJouet(): ?int
    {
        return $this->qte_stock_jouet;
    }

    public function setQteStockJouet(int $qte_stock_jouet): self
    {
        $this->qte_stock_jouet = $qte_stock_jouet;

        return $this;
    }

    public function getPuJouet(): ?int
    {
        return $this->pu_jouet;
    }

    public function setPuJouet(?int $pu_jouet): self
    {
        $this->pu_jouet = $pu_jouet;

        return $this;
    }

    public function getCodeFourJouet(): ?fournisseur
    {
        return $this->code_four_jouet;
    }

    public function setCodeFourJouet(?fournisseur $code_four_jouet): self
    {
        $this->code_four_jouet = $code_four_jouet;

        return $this;
    }


}
