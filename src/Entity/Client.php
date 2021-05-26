<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $code_clt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $des_clt;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adr_clt;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $tel_clt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeClt(): ?string
    {
        return $this->code_clt;
    }

    public function setCodeClt(string $code_clt): self
    {
        $this->code_clt = $code_clt;

        return $this;
    }

    public function getDesClt(): ?string
    {
        return $this->des_clt;
    }

    public function setDesClt(?string $des_clt): self
    {
        $this->des_clt = $des_clt;

        return $this;
    }

    public function getAdrClt(): ?string
    {
        return $this->adr_clt;
    }

    public function setAdrClt(?string $adr_clt): self
    {
        $this->adr_clt = $adr_clt;

        return $this;
    }

    public function getTelClt(): ?string
    {
        return $this->tel_clt;
    }

    public function setTelClt(?string $tel_clt): self
    {
        $this->tel_clt = $tel_clt;

        return $this;
    }
}