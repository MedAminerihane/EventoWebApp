<?php

namespace Pidev\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="createur", columns={"createur"}), @ORM\Index(name="prix", columns={"prix"})})
 * @ORM\Entity(repositoryClass="Pidev\FrontOfficeBundle\Entity\EvenementRepository")
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="confidentialite", type="string", length=20, nullable=false)
     */
    private $confidentialite = 'public';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="createur", referencedColumnName="id")
     * })
     */
    private $createur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idEvenement")
     */
    private $idClient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="evenement")
     * @ORM\JoinTable(name="invitation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="evenement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="participant", referencedColumnName="id")
     *   }
     * )
     */
    private $participant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
        $this->participant = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set confidentialite
     *
     * @param string $confidentialite
     * @return Evenement
     */
    public function setConfidentialite($confidentialite)
    {
        $this->confidentialite = $confidentialite;

        return $this;
    }

    /**
     * Get confidentialite
     *
     * @return string 
     */
    public function getConfidentialite()
    {
        return $this->confidentialite;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Evenement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Evenement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createur
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $createur
     * @return Evenement
     */
    public function setCreateur(\Pidev\FrontOfficeBundle\Entity\Utilisateur $createur = null)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \Pidev\FrontOfficeBundle\Entity\Utilisateur 
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * Add idClient
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $idClient
     * @return Evenement
     */
    public function addIdClient(\Pidev\FrontOfficeBundle\Entity\Utilisateur $idClient)
    {
        $this->idClient[] = $idClient;

        return $this;
    }

    /**
     * Remove idClient
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $idClient
     */
    public function removeIdClient(\Pidev\FrontOfficeBundle\Entity\Utilisateur $idClient)
    {
        $this->idClient->removeElement($idClient);
    }

    /**
     * Get idClient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Add participant
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $participant
     * @return Evenement
     */
    public function addParticipant(\Pidev\FrontOfficeBundle\Entity\Utilisateur $participant)
    {
        $this->participant[] = $participant;

        return $this;
    }

    /**
     * Remove participant
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $participant
     */
    public function removeParticipant(\Pidev\FrontOfficeBundle\Entity\Utilisateur $participant)
    {
        $this->participant->removeElement($participant);
    }

    /**
     * Get participant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParticipant()
    {
        return $this->participant;
    }
}
