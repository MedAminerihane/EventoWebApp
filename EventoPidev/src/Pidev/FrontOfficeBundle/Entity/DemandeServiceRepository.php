<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Entity;


/**
 * Description of DemandeServiceRepository
 *
 * @author IDRISS
 */
class DemandeServiceRepository extends \Doctrine\ORM\EntityRepository{
    //put your code here
    
        public function findDemandeService($idClient,$idOffre)
{
   $query = $this->getEntityManager()
                        ->createQuery('
            SELECT i
FROM PidevFrontOfficeBundle:DemandeService i
WHERE i.idClient = :idClient and i.idOffre = :idOffre'
                        )->setParameter('idClient', $idClient)->setParameter('idOffre', $idOffre);
        return $query->getSingleResult();
}

}
