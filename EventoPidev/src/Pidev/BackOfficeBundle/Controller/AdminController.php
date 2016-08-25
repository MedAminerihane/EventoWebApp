<?php

namespace Pidev\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class AdminController extends Controller
{
    public function indexAction()
    {
         return $this->render('PidevBackOfficeBundle::indexAdmin.html.twig', array());
    
        
    }
    
      public function profilAction()
    {
      $request = $this->get('request');

  
     $user =  $this->getUser();   
      $userManager = $this->get('fos_user.user_manager');
    if($request->getMethod()=='POST'){
 $password=$request->get('password');
  $passwordc=$request->get('passwordc');
       if ($password!= $passwordc) {
      
       $this->get('session')->getFlashBag()->add('info', 'Veuillez vérifier votre mot de passe');

      
     }
     
     
     
     else{
      

         $username=$request->get('username');

        $firstname=$request->get('firstname');
        
            $email=$request->get('email');
 
              $adresse=$request->get('adresse');
            $phone=$request->get('phone');
             
            $user->setUsername($username);
            $user->setPlainPassword($password);
            $user->setNom($firstname);

            $user->setEmail($email);
           
            $user->setAdresse($adresse);
            $user->setTel($phone);
      $userManager->updateUser($user, true);
             
    return $this->render('PidevBackOfficeBundle:Admin:ProfileAdmin.html.twig', array());    
        
    } }
         
        return $this->render('PidevBackOfficeBundle:Admin:ProfileAdmin.html.twig', array());
    }
    
     public function ListCAction($cl=null)
    {
            $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findByNature(1);

         return $this->render('PidevBackOfficeBundle:Admin:ListClient.html.twig', array('clients' => $clients,'cl'=>$cl));
    
        
    }
    
     public function DetailCAction($id)
    {
            $em = $this->getDoctrine()->getManager();
        $l = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($id);
        
        //return $this->render('PidevBackOfficeBundle:Admin:ListClient.html.twig', array('cl' => $cl));
        return $this->ListCAction($l);
        
    }
     public function BlockCAction($id)
    {  $em = $this->getDoctrine()->getManager();
          $l = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($id);
             
          $userManager = $this->get('fos_user.user_manager');
          
          if ($l->isAccountNonLocked()) {
              $l->setLocked(true);
          }else{
  $l->setLocked(false);
          }
      $userManager->updateUser($l, true);
                  return $this->ListCAction($l);
   
        
    }
    
    
     public function ListPAction($cl=null)
    {
            $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->findByNature(0);

         return $this->render('PidevBackOfficeBundle:Admin:ListPrestataire.html.twig', array('clients' => $clients,'cl'=>$cl));
    
        
    }
    
     public function DetailPAction($id)
    {
            $em = $this->getDoctrine()->getManager();
        $l = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($id);
        
        //return $this->render('PidevBackOfficeBundle:Admin:ListClient.html.twig', array('cl' => $cl));
        return $this->ListPAction($l);
        
    }
     public function BlockPAction($id)
    {  $em = $this->getDoctrine()->getManager();
          $l = $em->getRepository('PidevFrontOfficeBundle:Utilisateur')->find($id);
             
          $userManager = $this->get('fos_user.user_manager');
          
          if ($l->isAccountNonLocked()) {
              $l->setLocked(true);
          }else{
  $l->setLocked(false);
          }
      $userManager->updateUser($l, true);
                  return $this->ListPAction($l);

    }
    
    
   public function chartAction()
{
    
         $em= $this->getDoctrine()->getManager();
        $eventM = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findByType('Musique');
                $eventS = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findByType('Sport');
                                $eventP = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findByType('Professionel');
                                $eventF = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findByType('Food');
                                $eventMe = $em->getRepository('PidevFrontOfficeBundle:Evenement')->findByType('Meeting');

$nbs=count($eventS);
        $nbm=count($eventM);
        $nbp=count($eventP);
         $nbf=count($eventF);
        $nbme=count($eventMe);

        $ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Catégorie des évenements visité');
$ob->plotOptions->pie(array(
'allowPointSelect' => true,
'cursor' => 'pointer',
'dataLabels' => array('enabled' => false),
'showInLegend' => true));
$data = array(
array('Sport', $nbs),
array('Musique', $nbm),
array('Professionel', $nbp),
array('Food', $nbf),
array('Meeting', $nbme),

);
$ob->series(array(array('type' => 'pie','name' => 'Nbre évènement', 'data' => $data)));
return $this->render('PidevBackOfficeBundle:Admin:statistiqueAdmin.html.twig', array(
'chart' => $ob
));
}
    
    
} 
    
    

