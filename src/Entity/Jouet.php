<?php

namespace App\Entity;

use App\Repository\JouetRepository;
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
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code_jouet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $des_jouet;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte_stock;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $PU_jouet;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code_four_jouet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeJouet(): ?string
    {
        return $this->code_jouet;
    }

    public function setCodeJouet(string $code_jouet): self
    {
        $this->code_jouet = $code_jouet;

        return $this;
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

    public function getQteStock(): ?int
    {
        return $this->qte_stock;
    }

    public function setQteStock(int $qte_stock): self
    {
        $this->qte_stock = $qte_stock;

        return $this;
    }

    public function getPUJouet(): ?float
    {
        return $this->PU_jouet;
    }

    public function setPUJouet(?float $PU_jouet): self
    {
        $this->PU_jouet = $PU_jouet;

        return $this;
    }

    public function getCodeFourJouet(): ?string
    {
        return $this->code_four_jouet;
    }

    public function setCodeFourJouet(string $code_four_jouet): self
    {
        $this->code_four_jouet = $code_four_jouet;

        return $this;
    }
}
