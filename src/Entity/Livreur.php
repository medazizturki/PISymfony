<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity
 */
class Livreur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivr;

    /**
     * @var int
     *
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_liv", type="string", length=255, nullable=false)
     */
    private $nomLiv;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_liv", type="string", length=255, nullable=false)
     */
    private $prenomLiv;

    public function getIdLivr(): ?int
    {
        return $this->idLivr;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getNomLiv(): ?string
    {
        return $this->nomLiv;
    }

    public function setNomLiv(string $nomLiv): self
    {
        $this->nomLiv = $nomLiv;

        return $this;
    }

    public function getPrenomLiv(): ?string
    {
        return $this->prenomLiv;
    }

    public function setPrenomLiv(string $prenomLiv): self
    {
        $this->prenomLiv = $prenomLiv;

        return $this;
    }


}
