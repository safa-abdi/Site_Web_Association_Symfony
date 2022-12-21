<?php

namespace App\Form;

use Doctrine\ORM\Mapping as ORM;

/**
 * GensBesoins
 *
 * @ORM\Table(name="gens_besoins")
 * @ORM\Entity
 */
class GensBesoins
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
     * @var string
     *
     * @ORM\Column(name="nom_prenom", type="string", length=255, nullable=false)
     */
    private $nomPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255, nullable=false)
     */
    private $situation;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;


}
