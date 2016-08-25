<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Entity;
use Pidev\FrontOfficeBundle\Entity\Reclamation;
/**
 * Description of ReclamationClientRepository
 *
 * @author Majed
 */

class ReclamationRepository extends \Doctrine\ORM\EntityRepository{
  
     public function findMom(){
          $query= $this->getEntityManager()
                   ->createQuery('SELECT r  FROM FrontOfficeBundle:Reclamation r ORDER by r.date DESC');
                 
                   return $query->getResult();
     }
     
     
}
