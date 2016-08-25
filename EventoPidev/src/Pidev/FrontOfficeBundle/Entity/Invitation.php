<?php

namespace Pidev\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation", indexes={@ORM\Index(name="fk_particip", columns={"participant"})})
 * * @ORM\Entity(repositoryClass="Pidev\FrontOfficeBundle\Entity\InvitationRepository")
 */
class Invitation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="participant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $participant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invitation", type="datetime", nullable=false)
     */
    private $dateInvitation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;



    /**
     * Set evenement
     *
     * @param integer $evenement
     * @return Invitation
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return integer 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set participant
     *
     * @param integer $participant
     * @return Invitation
     */
    public function setParticipant($participant)
    {
        $this->participant = $participant;

        return $this;
    }

    /**
     * Get participant
     *
     * @return integer 
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set dateInvitation
     *
     * @param \DateTime $dateInvitation
     * @return Invitation
     */
    public function setDateInvitation($dateInvitation)
    {
        $this->dateInvitation = $dateInvitation;

        return $this;
    }

    /**
     * Get dateInvitation
     *
     * @return \DateTime 
     */
    public function getDateInvitation()
    {
        return $this->dateInvitation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Invitation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
