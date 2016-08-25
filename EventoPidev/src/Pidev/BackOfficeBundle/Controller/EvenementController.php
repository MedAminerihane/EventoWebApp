<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\BackOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontOfficeBundle\Entity\Evenement;
use Pidev\FrontOfficeBundle\Entity\EvenementRepository;
use Pidev\FrontOfficeBundle\Entity\Galerie;
use Pidev\FrontOfficeBundle\Entity\GalerieRepository;

/**
 * Description of EvenementController
 *
 * @author IDRISS
 */
class EvenementController extends Controller {
    //put your code here
    
    
    
    
    
     public function listEventAction()     {

       $em= $this->getDoctrine()->getManager();
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findDetails();
 return $this->render('PidevBackOfficeBundle:EventFileTwig:EventTwig.html.twig', array('events' => $events)); 
    }
    
    
     public function deleteEventAction($id)
    {   
    $em= $this->get('Doctrine')->getEntityManager();
    $event=$em->getRepository('PidevFrontOfficeBundle:Evenement')->find($id);
   $photo=$em->getRepository('PidevFrontOfficeBundle:Galerie')->findOneByIdEvennement($id);  

$em->Remove($event);
$em->Remove($photo);
    $em->flush();
             $this->get('session')->getFlashBag()->add('info', 'suppression avec succès');

     return $this->redirect($this->generateURL("lister_evenement_b"));
    }
    
      public function detailEventAction()     {
          $id =$this->get('request')->get('id');
          $url =$this->get('request')->get('url');
 
        $em = $this->get('Doctrine')->getEntityManager();
        $event = $em->getRepository('PidevFrontOfficeBundle:Evenement')->find($id);
     
     $note = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findNote($id);
  
     
     
        return $this->render('PidevBackOfficeBundle:EventFileTwig:DetailsEventTwig.html.twig', array('event' => $event, 'url'=>$url, 'note'=>$note));
    
    }
    
}
