<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="ARTICLE", indexes={@ORM\Index(name="FK_ARTICLE_artiste_id", columns={"artiste_id"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=25, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime", nullable=false)
     */
    private $dateajout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dernierMAJ", type="datetime", nullable=true)
     */
    private $derniermaj;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=500, nullable=true)
     */
    private $texte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVue", type="integer", nullable=true)
     */
    private $nbvue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idArticle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticle;

    /**
     * @var \AppBundle\Entity\Artiste
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artiste_id", referencedColumnName="idArtiste")
     * })
     */
    private $artiste;


}

