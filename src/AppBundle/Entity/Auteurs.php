<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteurs
 *
 * @ORM\Table(name="auteurs")
 * @ORM\Entity
 */
class Auteurs
{
    /**
     * @var string
     *
     * @ORM\Column(name="noms", type="string", length=20, nullable=false)
     */
    private $noms;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_auteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;


}

