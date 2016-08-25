<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Entity;


/**
 * Description of EvaluationEvenement
 *
 * @author IDRISS
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="evaluationevenement")
 * @ORM\Entity
 */

class EvaluationEvenement {
    
    
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Evenement
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id")
     * })
     */
    private $evenement;

    /**
     * @var \Utilisateur
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Client", referencedColumnName="id")
     * })
     */
    private $idClient;

    

    /**
     * @var string
     * @ORM\Column(name="note", type="integer")
     */
    private $note;


    function getEvenement() {
        return $this->evenement;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function getNote() {
        return $this->note;
    }

    function setEvenement($evenement) {
        $this->evenement = $evenement;
    }

    function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    function setNote($note) {
        $this->note = $note;
    }


  
    
}
