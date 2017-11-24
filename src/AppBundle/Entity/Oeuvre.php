<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="OEUVRE", indexes={@ORM\Index(name="FK_OEUVRE_artiste_id", columns={"artiste_id"}), @ORM\Index(name="FK_OEUVRE_categorie_id", columns={"categorie_id"}), @ORM\Index(name="FK_OEUVRE_technique_id", columns={"technique_id"})})
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomOeuvre", type="string", length=40, nullable=false)
     */
    private $nomoeuvre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=false)
     */
    private $disponibilite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime", nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500, nullable=true)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=20, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVue", type="integer", nullable=true)
     */
    private $nbvue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idOeuvre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoeuvre;

    /**
     * @var \AppBundle\Entity\Artiste
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artiste_id", referencedColumnName="idArtiste")
     * })
     */
    private $artiste;

    /**
     * @var \AppBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="idCategorie")
     * })
     */
    private $categorie;

    /**
     * @var \AppBundle\Entity\Technique
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Technique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="technique_id", referencedColumnName="idTechnique")
     * })
     */
    private $technique;


}

