<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Redection
 *
 * @ORM\Table(name="redection")
 * @ORM\Entity
 */
class Redection
{
    /**
     * @var string
     *
     * @ORM\Column(name="coder", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coder;

    /**
     * @var int
     *
     * @ORM\Column(name="valr", type="integer", nullable=false)
     */
    private $valr;

    public function getCoder(): ?string
    {
        return $this->coder;
    }

    public function getValr(): ?int
    {
        return $this->valr;
    }

    public function setValr(int $valr): self
    {
        $this->valr = $valr;

        return $this;
    }


}
