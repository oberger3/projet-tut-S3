<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technique
 *
 * @ORM\Table(name="TECHNIQUE")
 * @ORM\Entity
 */
class Technique
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomTechnique", type="string", length=30, nullable=false)
     */
    private $nomtechnique;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTechnique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtechnique;


}

