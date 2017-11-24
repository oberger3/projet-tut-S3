<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="EVENEMENT", indexes={@ORM\Index(name="FK_EVENEMENT_artiste_id", columns={"artiste_id"})})
 * @ORM\Entity
 */
class Evenement
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
     * @ORM\Column(name="dateDebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbParticipant", type="integer", nullable=true)
     */
    private $nbparticipant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=true)
     */
    private $lieu;

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
     * @ORM\Column(name="idEvenement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevenement;

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

