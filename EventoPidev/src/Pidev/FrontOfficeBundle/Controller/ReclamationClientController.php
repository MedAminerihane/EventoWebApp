<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pidev\FrontOfficeBundle\Entity\Reclamation;
use Pidev\FrontOfficeBundle\Entity\Utilisateur;


/**
 * Description of ReclamationClientController
 *
 * @author Majed
 */
class ReclamationClientController extends Controller {
    

  

  
    public function envoyerReclamationAction(Request $request){
        $reclamation= new Reclamation();
        
        $request=$this->getRequest();
        if($request->getMethod()=='POST'){
            $er= $this->get('Doctrine')->getEntityManager();
    $utilisateur=$this->getUser();   
     
            
            $date=$request->get('date');
            $contenu=$request->get('contenu');
           
            $reclamation->setContenu($contenu);
            $reclamation->setDate(new \DateTime ($date));
            $reclamation->setIdExpediteur($utilisateur);
        
   
             $em= $this->get('Doctrine')->getEntityManager();
             $em->persist($reclamation);
             $em->flush();
             if ($utilisateur->getNature()==0){
             return $this->redirect($this->generateURL("pidev_front_office_Reclamation_client_ajout"));
        }else if ($utilisateur->getNature()==1)
        {
          return $this->redirect($this->generateURL("pidev_front_office_Invitation_list"));
        }       }
       return $this->render('PidevFrontOfficeBundle:Default:envoyerReclamationClient.html.twig', array());
  
    }
   
}