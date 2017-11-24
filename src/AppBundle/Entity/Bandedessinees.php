<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bandedessinees
 *
 * @ORM\Table(name="bandeDessinees", indexes={@ORM\Index(name="FK_bandeDessinees_id_auteur", columns={"id_auteur"})})
 * @ORM\Entity
 */
class Bandedessinees
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=130, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tome", type="integer", nullable=false)
     */
    private $tome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_parution", type="date", nullable=false)
     */
    private $dateParution;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bd", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBd;

    /**
     * @var \AppBundle\Entity\Auteurs
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Auteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_auteur")
     * })
     */
    private $idAuteur;


}

