<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireOeuvre
 *
 * @ORM\Table(name="COMMENTAIRE_OEUVRE", indexes={@ORM\Index(name="FK_COMMENTAIRE_OEUVRE_oeuvre_id", columns={"oeuvre_id"})})
 * @ORM\Entity
 */
class CommentaireOeuvre
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="datetime", nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=30, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=200, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCommentaire_O", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommentaireO;

    /**
     * @var \AppBundle\Entity\Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oeuvre_id", referencedColumnName="idOeuvre")
     * })
     */
    private $oeuvre;


}

