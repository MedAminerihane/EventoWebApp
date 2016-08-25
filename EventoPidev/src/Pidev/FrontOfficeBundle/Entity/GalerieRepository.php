<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Pidev\FrontOfficeBundle\Entity;
use Pidev\FrontOfficeBundle\Entity\Galerie;
/**
 * Description of GalerieRepository
 *
 * @author IDRISS
 */
class GalerieRepository extends \Doctrine\ORM\EntityRepository{
    //put your code here
    
        public function findAllPhoto(){
        $query= $this->getEntityManager()
                ->createQuery("Select p FROM PidevFrontOfficeBundle:Galerie p  ORDER BY p.idEvennement ASC");
        return $query->getResult();
    }
    
}
