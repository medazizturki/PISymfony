<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_liv", type="date", nullable=false)
     */
    private $dateLiv;

    /**
     * @var string
     *
     * @ORM\Column(name="type_liv", type="string", length=255, nullable=false)
     */
    private $typeLiv;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_liv", type="string", length=255, nullable=false)
     */
    private $adressLiv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLiv(): ?\DateTimeInterface
    {
        return $this->dateLiv;
    }

    public function setDateLiv(\DateTimeInterface $dateLiv): self
    {
        $this->dateLiv = $dateLiv;

        return $this;
    }

    public function getTypeLiv(): ?string
    {
        return $this->typeLiv;
    }

    public function setTypeLiv(string $typeLiv): self
    {
        $this->typeLiv = $typeLiv;

        return $this;
    }

    public function getAdressLiv(): ?string
    {
        return $this->adressLiv;
    }

    public function setAdressLiv(string $adressLiv): self
    {
        $this->adressLiv = $adressLiv;

        return $this;
    }


}
