<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idService;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_service", type="string", length=255, nullable=false)
     */
    private $titreService;

    /**
     * @var string
     *
     * @ORM\Column(name="type_service", type="string", length=255, nullable=false)
     */
    private $typeService;

    /**
     * @var string
     *
     * @ORM\Column(name="description_service", type="string", length=255, nullable=false)
     */
    private $descriptionService;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_service", type="string", length=255, nullable=false)
     */
    private $lieuService;

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function getTitreService(): ?string
    {
        return $this->titreService;
    }

    public function setTitreService(string $titreService): self
    {
        $this->titreService = $titreService;

        return $this;
    }

    public function getTypeService(): ?string
    {
        return $this->typeService;
    }

    public function setTypeService(string $typeService): self
    {
        $this->typeService = $typeService;

        return $this;
    }

    public function getDescriptionService(): ?string
    {
        return $this->descriptionService;
    }

    public function setDescriptionService(string $descriptionService): self
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    public function getLieuService(): ?string
    {
        return $this->lieuService;
    }

    public function setLieuService(string $lieuService): self
    {
        $this->lieuService = $lieuService;

        return $this;
    }


}
