<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Echange
 *
 * @ORM\Table(name="echange")
 * @ORM\Entity
 */
class Echange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_echange", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_echange", type="date", nullable=false)
     */
    private $dateEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_echange", type="string", length=50, nullable=false)
     */
    private $lieuEchange;

    /**
     * @var string
     *
     * @ORM\Column(name="type_echange", type="string", length=50, nullable=false)
     */
    private $typeEchange;

    public function getIdEchange(): ?int
    {
        return $this->idEchange;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getDateEchange(): ?\DateTimeInterface
    {
        return $this->dateEchange;
    }

    public function setDateEchange(\DateTimeInterface $dateEchange): self
    {
        $this->dateEchange = $dateEchange;

        return $this;
    }

    public function getLieuEchange(): ?string
    {
        return $this->lieuEchange;
    }

    public function setLieuEchange(string $lieuEchange): self
    {
        $this->lieuEchange = $lieuEchange;

        return $this;
    }

    public function getTypeEchange(): ?string
    {
        return $this->typeEchange;
    }

    public function setTypeEchange(string $typeEchange): self
    {
        $this->typeEchange = $typeEchange;

        return $this;
    }


}
