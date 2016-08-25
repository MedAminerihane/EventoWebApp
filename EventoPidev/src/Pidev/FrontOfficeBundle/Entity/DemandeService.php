<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemandeService
 *
 * @author IDRISS
 */

namespace Pidev\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeService
 *
 * @ORM\Table(name="demandeoffre")
 * @ORM\Entity(repositoryClass="Pidev\FrontOfficeBundle\Entity\DemandeServiceRepository")
 */
class DemandeService {
    //put your code here
    
    

    /**
     * @var \Offre
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\Id
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id")
     * })
     */
    private $idOffre;

    /**
     * @var \Utilisateur
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\Id
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var string
     * @ORM\Column(name="etat", type="string")
     */
    private $etat;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    
    function getId() {
        return $this->id;
    }

    function getIdOffre() {
        return $this->idOffre;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function getEtat() {
        return $this->etat;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdOffre($idOffre) {
        $this->idOffre = $idOffre;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }



}
