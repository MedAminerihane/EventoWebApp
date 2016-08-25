<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Pidev\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\FrontOfficeBundle\Entity\Evenement;
use Pidev\FrontOfficeBundle\Entity\EvenementRepository;
use Pidev\FrontOfficeBundle\Entity\Galerie;
use Pidev\FrontOfficeBundle\Entity\GalerieRepository;
use \DateTime;
use Pidev\FrontOfficeBundle\Entity\Offre;
use Symfony\Component\HttpFoundation\Response;
use Pidev\FrontOfficeBundle\Entity\Abonnement;
use Pidev\FrontOfficeBundle\Form\AbonnementForm;
/**
 * Description of EvenementController
 *
 * @author IDRISS
 */
class EvenementController extends Controller{
    //put your code here
         public function listEventAction()     {

       $em= $this->getDoctrine()->getManager();
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findDetails();
 return $this->render('PidevFrontOfficeBundle:EventClientTwig:ListEventClient.html.twig', array('events' => $events)); 
    }
    
    
        public function listMyEventAction()     {
$user =  $this->getUser();   
       $em= $this->getDoctrine()->getManager();
    
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findMyEvents($user);
 return $this->render('PidevFrontOfficeBundle:EventClientTwig:EventMyList.html.twig', array('events' => $events)); 
    }
    
    
    
      public function ajoutEventAction() {
         $em= $this->getDoctrine()->getManager();
         $user =  $this->getUser();   

         
                $offres = $em->getRepository('PidevFrontOfficeBundle:Offre')->findAll();

        $event = new Evenement();
        $photo = new Galerie();
        $demandeOffre = new \Pidev\FrontOfficeBundle\Entity\DemandeService(); 
        $note = new \Pidev\FrontOfficeBundle\Entity\EvaluationEvenement();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $titre = $request->get('titre');
            $lieu = $request->get('lieu');
            $dateDebut = $request->get('dateDebut');
            $dateFin = $request->get('dateFin');
            $confidentialite = $request->get('confidentialite');
            $prix = $request->get('prix');
            $type = $request->get('type');
            $description = $request->get('description');
             $url= $request->get('url');
             $idOffre= $request->get('offre');
          
             if ($dateDebut> $dateFin) {
       $this->get('session')->getFlashBag()->add('info', 'Veuillez vérifier la date de fin');
       
     } 
     else
         if ($prix<0){
              $this->get('session')->getFlashBag()->add('info', 'Veuillez vérifier le prix de participation');

         } else
             if ($url==null){
              $this->get('session')->getFlashBag()->add('info', 'Veuillez insérer une image');

             }
         else{
            $event->setConfidentialite($confidentialite);
            $event->setCreateur($user);
            $event->setDateDebut( new \DateTime($dateDebut));
            $event->setDateFin(new \DateTime($dateFin));
            $event->setDescription($description);
            $event->setLieu($lieu);
            $event->setPrix($prix);
            $event->setTitre($titre);
            $event->setType($type);
            
            $photo->setUrl($url);
          
            $photo->setIdEvennement($event);
            $photo->setIdOffre(null);
            $photo->setType('0');
            
            $note->setEvenement($event);
            $note->setIdClient($user);
            $note->setNote('5');
            
            
              
           
            
            
            $em = $this->get('Doctrine')->getManager();
            
            if ($idOffre != null){
            $offre = $em->getRepository('PidevFrontOfficeBundle:Offre')->find($idOffre);

            $demandeOffre->setIdOffre($offre);
            $demandeOffre->setIdClient($user);
            $demandeOffre->setEtat("En Attente");
            
            $em->persist($demandeOffre);
            }
            $em->persist($event);
            $em->persist($photo);
            $em->persist($note);
            $em->flush();
         $this->get('session')->getFlashBag()->add('info', 'ajout avec succès');

            return $this->redirect($this->generateURL("lister_mes_evenement"));
        }}
            return $this->render('PidevFrontOfficeBundle::CreerEventClient.html.twig', array('offres'=>$offres));
             
    }
      
    
    
    
       public function updateAction(){
            
              $em= $this->get('Doctrine')->getManager();
               $id =$this->get('request')->get('id');
                  $url =$this->get('request')->get('url');

$user =  $this->getUser();   
             $modele=$em->getRepository('PidevFrontOfficeBundle:Evenement')->find($id);
             $galerie=$em->getRepository('PidevFrontOfficeBundle:Galerie')->findOneByUrl($url);

             $modele->setCreateur($user);

             $form=$this->createForm(new \Pidev\FrontOfficeBundle\Form\EvenementType,$modele);
                 $request = $this->getRequest();

           


             if ($form->handleRequest($request)->isSubmitted()){
                                  $modele=$form->getData();


                 if (! $form->get('prix')->isValid()) {
       $this->get('session')->getFlashBag()->add('info', 'Veuillez vérifier le prix');
       
     } 
     else 
          if ( $form->get('dateDebut')->getData()>$form->get('dateFin')->getData()) {
       $this->get('session')->getFlashBag()->add('info', 'Veuillez vérifier la date ');
       
     } 
     else
         
         {

                
             $em= $this->get('Doctrine')->getEntityManager();
             $em->persist($modele);
             $em->persist($galerie);
             $em->flush();
              $this->get('session')->getFlashBag()->add('info', 'évènement modifié avec succès');

             return $this->redirect($this->generateURL("lister_mes_evenement"));
             }}
             
            return $this->render('PidevFrontOfficeBundle::EventModifClient.html.twig',array('form'=>$form->createView(),'url'=>$url));
       }
    
    
      public function chercherEventAction()     {
          /*
        $em = $this->get('Doctrine')->getManager();
$request = $this->getRequest();
         if ($request->getMethod() == 'POST') {
            $type = $request->get('des');
          
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findDetail($type);
 

 return $this->render('PidevFrontOfficeBundle:EventClientTwig:ListEventClient.html.twig', array('events' => $events)); 
        } else {
 return $this->render('PidevFrontOfficeBundle::EvenementClient.html.twig', array()); 
        }
    
    */
          
        $id =$this->get('request')->get('id');
        $type =$this->get('request')->get('type');
        $em = $this->get('Doctrine')->getEntityManager();
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findDetail($type);
        return $this->render('PidevFrontOfficeBundle:EventClientTwig:ListEventClient.html.twig', array('events' => $events)); 
    
    }



 public function deleteEventAction($id)
    {   
    $em= $this->get('Doctrine')->getEntityManager();
    $event=$em->getRepository('PidevFrontOfficeBundle:Evenement')->find($id);
    $photo=$em->getRepository('PidevFrontOfficeBundle:Galerie')->findOneByIdEvennement($id);  
    $em->Remove($event);
    $em->Remove($photo);
    $em->flush();
     return $this->redirect($this->generateURL("lister_mes_evenement"));
    }
    
    
       public function detailEventAction()     {
       $id =$this->get('request')->get('id');
       $url =$this->get('request')->get('url');
       $em = $this->get('Doctrine')->getEntityManager();
       $event = $em->getRepository('PidevFrontOfficeBundle:Evenement')->find($id);
       $note = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findNote($id);
       return $this->render('PidevFrontOfficeBundle:EventClientTwig:EventDetailsClient.html.twig', array('event' => $event, 'url'=>$url, 'note'=>$note));
    }

    
    
    
    
    public function pdfgenerateAction($typea)
    {
        
        $em= $this->getDoctrine()->getManager();
        $events = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findDetailsbytype($typea);
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('PidevFrontOfficeBundle:EventClientTwig:Catalogueclient.html.twig', array('events' => $events));
         
       // on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
       // le sens de la page "portrait" => p ou "paysage" => l
       // le format A4,A5...
       // la langue du document fr,en,it...
       $html2pdf = new \Html2Pdf_Html2Pdf('P','A2','fr');
 
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('fullpage');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
       $html2pdf->writeHTML($html);
        $response = new Response();
 
$response->headers->set('Content-Type','application/pdf');

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Facture.pdf');
         
     
       
        
        
        
        
        return $response;
    } 
    
     public function ajoutabonnementAction()
    {
    $em = $this->container->get('doctrine')->getEntityManager();
        $a=new Abonnement();
         $form = $this->container->get('form.Factory')->create(new AbonnementForm(),$a);
        $request=$this->getRequest();
        
        if($request->getMethod()=='POST'){
            $form->bind($request);
            
            if($form->isValid())
            {
                $a->setIdPrest('5');
                $em->persist($a);
                $em->flush();
            
          return $this->render("EspritJetSetBundle:EventClientTwig:ajoutabonnement.html.twig",array('form' => $form->createView()));            }}
    
            //return $this->redirect($this->generateUrl("esprit_jet_set_listSoiree"));
        
        return $this->render("PidevFrontOfficeBundle:EventClientTwig:ajoutabonnement.html.twig",array('form' => $form->createView()));
    }
    public function listercatAction()
    {
   
        
        return $this->render("PidevFrontOfficeBundle:EventClientTwig:catalogueclient2.html.twig",array());
    }
}
