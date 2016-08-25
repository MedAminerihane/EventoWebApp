<?php

namespace Pidev\FrontOfficeBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;
/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="mail", columns={"mail"}), @ORM\UniqueConstraint(name="cin", columns={"cin"}), @ORM\UniqueConstraint(name="matricule_fiscal", columns={"matricule_fiscal"})}, indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="id_2", columns={"id"})})
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

  

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule_fiscal", type="string", length=50, nullable=true)
     */
    private $matriculeFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="nature", type="integer", nullable=false)
     */
    private $nature;


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offre", mappedBy="idClient")
     */
    private $idOffre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Evenement", inversedBy="idClient")
     * @ORM\JoinTable(name="evaluationevenement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_evenement", referencedColumnName="id")
     *   }
     * )
     */
    private $idEvenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idPrestataire")
     */
    private $idClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->idOffre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEvenement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dateInscrit
     *
     * @param \DateTime $dateInscrit
     * @return Utilisateur
     */
    public function setDateInscrit($dateInscrit)
    {
        $this->dateInscrit = $dateInscrit;

        return $this;
    }

    /**
     * Get dateInscrit
     *
     * @return \DateTime 
     */
    public function getDateInscrit()
    {
        return $this->dateInscrit;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Utilisateur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Utilisateur
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set matriculeFiscal
     *
     * @param string $matriculeFiscal
     * @return Utilisateur
     */
    public function setMatriculeFiscal($matriculeFiscal)
    {
        $this->matriculeFiscal = $matriculeFiscal;

        return $this;
    }

    /**
     * Get matriculeFiscal
     *
     * @return string 
     */
    public function getMatriculeFiscal()
    {
        return $this->matriculeFiscal;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Utilisateur
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
     * Set nature
     *
     * @param integer $nature
     * @return Utilisateur
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return integer 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Utilisateur
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

    /**
     * Add idOffre
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Offre $idOffre
     * @return Utilisateur
     */
    public function addIdOffre(\Pidev\FrontOfficeBundle\Entity\Offre $idOffre)
    {
        $this->idOffre[] = $idOffre;

        return $this;
    }

    /**
     * Remove idOffre
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Offre $idOffre
     */
    public function removeIdOffre(\Pidev\FrontOfficeBundle\Entity\Offre $idOffre)
    {
        $this->idOffre->removeElement($idOffre);
    }

    /**
     * Get idOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Add idEvenement
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Evenement $idEvenement
     * @return Utilisateur
     */
    public function addIdEvenement(\Pidev\FrontOfficeBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement[] = $idEvenement;

        return $this;
    }

    /**
     * Remove idEvenement
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Evenement $idEvenement
     */
    public function removeIdEvenement(\Pidev\FrontOfficeBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement->removeElement($idEvenement);
    }

    /**
     * Get idEvenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Add idClient
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Utilisateur $idClient
     * @return Utilisateur
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
}
