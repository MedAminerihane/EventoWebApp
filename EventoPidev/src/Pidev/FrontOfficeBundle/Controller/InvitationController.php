<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontOfficeBundle\Entity\Invitation;
use Symfony\Component\HttpFoundation\Request;
use Pidev\FrontOfficeBundle\Entity\Evenement;
use Pidev\FrontOfficeBundle\Entity\Utilisateur;
/**
 * Description of InvitationController
 *
 * @author IDRISS
 */
class InvitationController extends Controller{
    //put your code here
        public function participerAction()  {
            
            $invit = new Invitation();
       $id =$this->get('request')->get('id');
        $em= $this->getDoctrine()->getManager();
        $user =  $this->getUser();
  $idUs = $user->getId();
         $inv1 = $em->getRepository('PidevFrontOfficeBundle:Invitation')->findInvitation($id,$idUs);

          if ($inv1==null){
              $invit->setParticipant($idUs);
              $invit->setEvenement($id);
              $invit->setEtat("Accepté");
              $invit->setDateInvitation(new \DateTime());
              
               $em->persist($invit);
            $em->flush();
        $this->get('session')->getFlashBag()->add('info', 'Bienvenue a notre evenement');
            return $this->redirect($this->generateURL("lister_evenement"));

              
          }
               $this->get('session')->getFlashBag()->add('info', 'Vous etes deja inscrit sur la liste des participants');

            return $this->redirect($this->generateURL("lister_evenement"));
    }
    
     public function listClientAction()
    {
          $ide = $this->get('request')->get('ide');
         
    $em= $this->get('Doctrine')->getEntityManager();
    
    $utilisateurs=$em->getRepository('PidevFrontOfficeBundle:Invitation')->findExep($ide);
    
     return $this->render('PidevFrontOfficeBundle:Default:listUser.html.twig', array('utilisateurs' => $utilisateurs,'ide'=>$ide)); //put your code here
}





    public function invitationClientAction(){
        
        $id = $this->get('request')->get('id');
        $ide = $this->get('request')->get('ide');
        $invitation = new Invitation();
        
        
       // if ($request->getMethod() == 'POST') {
        $em = $this->get('Doctrine')->getEntityManager();
        $utilisateur = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($id); 

           
            
            $to = $utilisateur->getEmail();
            
            $invitation->setEvenement($ide);
            $invitation->setParticipant($id);
            $invitation->setEtat('En Attente');
             $invitation->setDateInvitation(new \DateTime());
     
      $message = \Swift_Message::newInstance()
      ->setSubject($utilisateur->getEmail())
      ->setFrom('majed.aiaia@esprit.tn')
      ->setTo($to)
      ->setBody("vous avez recu une invitation de ".$utilisateur->getNom());
      
        $this->get('mailer')->send($message);
           
             $em->persist($invitation);
             $em->flush();
             
             
                 $utilisateurs=$em->getRepository('PidevFrontOfficeBundle:Invitation')->findExep($ide);
    
     return $this->render('PidevFrontOfficeBundle:Default:listUser.html.twig', array('utilisateurs' => $utilisateurs,'ide'=>$ide)); //put your code here

        }
 
    //  else  {
           //  return $this->redirect($this->generateURL("pidev_front_office_Invitation_client_list"));
       // }
        
         public function invitationListAction(){
             $em = $this->get('Doctrine')->getManager();
            $user =  $this->getUser();  
            $id = $user->getId();
             $invitations=$em->getRepository('PidevFrontOfficeBundle:Invitation')->findInvitations($id,'En Attente');
            
              
             return $this->render('PidevFrontOfficeBundle:Default:invitationlist.html.twig', array('invitations' => $invitations)); //put your code here
         }
         
         public function invitationUpdateAction(){
             $evenement = $this->get('request')->get('evenement');
              $user =  $this->getUser();  
            $id = $user->getId();
            
             $em=$this->getDoctrine()->getManager();
         $invitation=$em->getRepository("PidevFrontOfficeBundle:Invitation")->findInvit($id,$evenement);
          $message = \Swift_Message::newInstance()
          ->setSubject("Evento")
          ->setFrom('majed.aiaia@gmail.com')
          ->setTo($user->getEmail())
           ->setBody("Vous ètes inscrit a l'evenement");

          $this->get('mailer')->send($message);
             
            
         $em->flush();
             return $this->redirect($this->generateURL("pidev_front_office_Invitation_list")); 
         }
         
            public function supprimerInvitationAction(){
                
                $user =  $this->getUser(); 
                $id = $user->getId();
        $evenement = $this->get('request')->get('evenement');
        $em=$this->get('Doctrine')->getEntityManager();
            
        $invitation=$em->getRepository('PidevFrontOfficeBundle:Invitation')->findInvitation($evenement,$id);
      
       
        $em->Remove($invitation);
        $em->flush();
        return $this->redirect($this->generateURL("pidev_front_office_Invitation_list"));
    }
    }
    
