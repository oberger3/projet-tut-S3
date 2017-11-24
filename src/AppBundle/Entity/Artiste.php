<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="ARTISTE")
 * @ORM\Entity
 */
class Artiste
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomArtiste", type="string", length=25, nullable=false)
     */
    private $nomartiste;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomArtiste", type="string", length=25, nullable=false)
     */
    private $prenomartiste;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=25, nullable=true)
     */
    private $domaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="idArtiste", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idartiste;


}

