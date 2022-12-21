<?php

namespace App\Form;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollecteNourriture
 *
 * @ORM\Table(name="collecte_nourriture")
 * @ORM\Entity
 */
class CollecteNourriture
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
     * @ORM\Column(name="sender", type="string", length=255, nullable=false)
     */
    private $sender;

    /**
     * @var int
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="helps", type="string", length=255, nullable=false)
     */
    private $helps;


}
