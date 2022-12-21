<?php

namespace App\Form;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessagesT
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class MessagesT
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;


}
