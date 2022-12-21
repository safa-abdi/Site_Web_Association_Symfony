<?php

namespace App\Entity;

use App\Repository\ReunionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReunionRepository::class)
 */
class Reunion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $membres;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $animateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ideeFinale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMembres(): ?string
    {
        return $this->membres;
    }

    public function setMembres(string $membres): self
    {
        $this->membres = $membres;

        return $this;
    }

    public function getAnimateur(): ?string
    {
        return $this->animateur;
    }

    public function setAnimateur(string $animateur): self
    {
        $this->animateur = $animateur;

        return $this;
    }

    public function getObjectif(): ?string
    {
        return $this->objectif;
    }

    public function setObjectif(string $objectif): self
    {
        $this->objectif = $objectif;

        return $this;
    }

    public function getIdeeFinale(): ?string
    {
        return $this->ideeFinale;
    }

    public function setIdeeFinale(?string $ideeFinale): self
    {
        $this->ideeFinale = $ideeFinale;

        return $this;
    }
}
