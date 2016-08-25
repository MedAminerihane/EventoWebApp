<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\FrontOfficeBundle\Entity;
use Pidev\FrontOfficeBundle\Entity\Evenement;
/**
 * Description of EvenementRepository
 *
 * @author IDRISS
 */
class EvenementRepository extends \Doctrine\ORM\EntityRepository{
    //put your code here
    
    public function findDetails()
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT g.url,e.id, e.titre, e.description, e.dateDebut , e.dateFin, e.lieu, e.confidentialite, e.prix, e.type
FROM PidevFrontOfficeBundle:Evenement e, PidevFrontOfficeBundle:Galerie g
WHERE e.id = g.idEvennement'
        );

        return $query->getResult();
   
}



    public function findMyEvents($createur)
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT g.url,e.id, e.titre, e.description, e.dateDebut , e.dateFin, e.lieu, e.confidentialite, e.prix, e.type
FROM PidevFrontOfficeBundle:Evenement e, PidevFrontOfficeBundle:Galerie g
WHERE e.id = g.idEvennement and e.createur= :createur'
        )->setParameter('createur', $createur);
        return $query->getResult();
}




   public function findDetail($type)
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT g.url,e.id, e.titre, e.description, e.dateDebut , e.dateFin, e.lieu, e.confidentialite, e.prix, e.type
FROM PidevFrontOfficeBundle:Evenement e, PidevFrontOfficeBundle:Galerie g
WHERE e.id = g.idEvennement and e.type = :type')->setParameter('type', $type); 
       

        return $query->getResult();
   
}


 public function findNote($id)
{
   $query = $this->getEntityManager()
       ->createQuery('SELECT avg( e.note ) as somme
FROM PidevFrontOfficeBundle:EvaluationEvenement e
GROUP BY e.evenement
having e.evenement= :id'
           )->setParameter('id', $id); 
       

       return $query->getSingleResult();
 
}
 public function findDetailsbytype($typea)
{
    $query = $this->getEntityManager()
        ->createQuery('
            SELECT g.url,e.id, e.titre, e.description, e.dateDebut , e.dateFin, e.lieu, e.confidentialite, e.prix, e.type
FROM PidevFrontOfficeBundle:Evenement e, PidevFrontOfficeBundle:Galerie g
WHERE e.id = g.idEvennement and e.type=:typea'
        )->setParameter('typea', $typea);

        return $query->getResult();
   
}
}
