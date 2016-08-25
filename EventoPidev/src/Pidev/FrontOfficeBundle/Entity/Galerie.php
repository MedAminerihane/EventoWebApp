<?php

namespace Pidev\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galerie
 *
 * @ORM\Table(name="galerie", uniqueConstraints={@ORM\UniqueConstraint(name="url", columns={"url"}), @ORM\UniqueConstraint(name="id_offre_2", columns={"id_offre"})}, indexes={@ORM\Index(name="id_offre", columns={"id_offre"}), @ORM\Index(name="id_evennement", columns={"id_evennement"}), @ORM\Index(name="id_offre_3", columns={"id_offre"}), @ORM\Index(name="id_offre_4", columns={"id_offre"})})
 * @ORM\Entity
 */
class Galerie
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
     * @ORM\Column(name="url", type="string", length=500, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id")
     * })
     */
    private $idOffre;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evennement", referencedColumnName="id")
     * })
     */
    private $idEvennement;



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
     * Set url
     *
     * @param string $url
     * @return Galerie
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Galerie
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idOffre
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Offre $idOffre
     * @return Galerie
     */
    public function setIdOffre(\Pidev\FrontOfficeBundle\Entity\Offre $idOffre = null)
    {
        $this->idOffre = $idOffre;

        return $this;
    }

    /**
     * Get idOffre
     *
     * @return \Pidev\FrontOfficeBundle\Entity\Offre 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set idEvennement
     *
     * @param \Pidev\FrontOfficeBundle\Entity\Evenement $idEvennement
     * @return Galerie
     */
    public function setIdEvennement(\Pidev\FrontOfficeBundle\Entity\Evenement $idEvennement = null)
    {
        $this->idEvennement = $idEvennement;

        return $this;
    }

    /**
     * Get idEvennement
     *
     * @return \Pidev\FrontOfficeBundle\Entity\Evenement 
     */
    public function getIdEvennement()
    {
        return $this->idEvennement;
    }
}
