<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Entity;

/**
 * Description of InvitationRepository
 *
 * @author IDRISS
 */
class InvitationRepository extends \Doctrine\ORM\EntityRepository{
    //put your code here
    
        public function findInvitation($idEvent,$idClient)
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT i
FROM PidevFrontOfficeBundle:Invitation i
WHERE i.participant = :idClient and i.evenement= :idEvent'
        )->setParameter('idClient', $idClient)->setParameter('idEvent', $idEvent);
        return $query->getResult();
}


        public function findInvitations($idClient,$etat)
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT e.titre, i.dateInvitation, i.etat, i.evenement
FROM PidevFrontOfficeBundle:Invitation i, PidevFrontOfficeBundle:Evenement e 
WHERE i.participant = :idClient and e.id=i.evenement and i.etat = :etat '
        )->setParameter('idClient', $idClient)->setParameter('etat', $etat);
        return $query->getResult();
}

        public function findInvit($idClient,$idEvent)
{
    $query = $this->getEntityManager()
        ->createQuery('
            update  PidevFrontOfficeBundle:Invitation i set i.etat= :etat 

        WHERE i.participant = :idClient and i.evenement = :idEvent '
        )->setParameter('idClient', $idClient)->setParameter('idEvent', $idEvent)
                ->setParameter('etat', 'Accepté');
        return $query->getSingleResult();
}
        public function findExep($idEvent)
        {
            $query = $this->getEntityManager()
                   ->createQuery('SELECT u FROM PidevFrontOfficeBundle:Utilisateur u 
                          where u.id not in (select e.participant from PidevFrontOfficeBundle:Invitation e where e.evenement= :idEvent) and u.nature=1')
                    ->setParameter('idEvent', $idEvent);
                                
                    
                    return $query->getResult();
        }
        

}
