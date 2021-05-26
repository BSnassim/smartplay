<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
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
    private $code_four;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $des_four;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adr_four;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $contact_four;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $tel_four;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeFour(): ?string
    {
        return $this->code_four;
    }

    public function setCodeFour(string $code_four): self
    {
        $this->code_four = $code_four;

        return $this;
    }

    public function getDesFour(): ?string
    {
        return $this->des_four;
    }

    public function setDesFour(?string $des_four): self
    {
        $this->des_four = $des_four;

        return $this;
    }

    public function getAdrFour(): ?string
    {
        return $this->adr_four;
    }

    public function setAdrFour(?string $adr_four): self
    {
        $this->adr_four = $adr_four;

        return $this;
    }

    public function getContactFour(): ?string
    {
        return $this->contact_four;
    }

    public function setContactFour(?string $contact_four): self
    {
        $this->contact_four = $contact_four;

        return $this;
    }

    public function getTelFour(): ?string
    {
        return $this->tel_four;
    }

    public function setTelFour(?string $tel_four): self
    {
        $this->tel_four = $tel_four;

        return $this;
    }
}
