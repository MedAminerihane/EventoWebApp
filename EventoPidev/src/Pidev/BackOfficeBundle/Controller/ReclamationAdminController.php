<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Pidev\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pidev\FrontOfficeBundle\Entity\Reclamation;
use Pidev\FrontOfficeBundle\Entity\Utilisateur;
use Pidev\FrontOfficeBundle\Entity\Administrateur;

use Pidev\FrontOfficeBundle\Entity\ReclamationRepository;
/**
 * Description of ReclamationAdminController
 *
 * @author Majed
 */
class ReclamationAdminController extends Controller {

    public function listReclamationAction() {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('PidevFrontOfficeBundle:Reclamation')->findBy(array(), array('date' => 'desc'));

        return $this->render('PidevBackOfficeBundle:Default:listReclamation.html.twig', array('reclamations' => $reclamations)); //put your code he
    }

    public function ajoutReclamationAction() {
        
        $contenu = $this->get('request')->get('contenu');
        $date = $this->get('request')->get('date');
        $id = $this->get('request')->get('id');
       
        $reclamation = new Reclamation();
        $administrateur = new Administrateur();
        $utilisateur = new Utilisateur();
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $em = $this->get('Doctrine')->getEntityManager();
           
            $utilisateur = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find(3);
            $date = $request->get('date');
            $contenuu=$request->get('contenuu');
            $to = $utilisateur->getMail();
            
            $reclamation->setContenu($contenuu);
            $reclamation->setDate(new \DateTime($date));
            $reclamation->setIdExpediteur($utilisateur);

            $message = \Swift_Message::newInstance()
                    ->setSubject("Reponse reclamation")
                    ->setFrom('majed.aiaida@gmail.com')
                    ->setTo($to)
                    ->setBody($reclamation->getContenu());
            $this->get('mailer')->send($message);
            $em=$this->get('Doctrine')->getEntityManager();
            $reclamation=$em->getRepository('PidevFrontOfficeBundle:Reclamation')->find($id);
            $em->Remove($reclamation);
            $em->flush();
     
       $this->get('session')->getFlashBag()->add('info', 'La reponse a était envoyée avec succée');
       
     
            //$em->persist($reclamation);
           // $em->flush();
            return $this->redirect($this->generateURL("pidev_front_office_Reclamation_admin_list"));
        } else {
            
       
            return $this->render('PidevBackOfficeBundle:Default:ajoutReclamation.html.twig', array('contenu'=>$contenu));
        }
    }

    public function supprimerReclamationAction($id){
        $em=$this->get('Doctrine')->getEntityManager();
        $Reclamation=$em->getRepository('PidevFrontOfficeBundle:Reclamation')->find($id);
        $em->Remove($Reclamation);
        $em->flush();
        return $this->redirect($this->generateURL("pidev_front_office_Reclamation_admin_list"));
    }

}
