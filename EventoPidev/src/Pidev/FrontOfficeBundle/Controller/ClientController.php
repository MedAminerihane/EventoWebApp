<?php

namespace Pidev\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ob\HighchartsBundle\Highcharts\Highchart;

class ClientController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevFrontOfficeBundle::indexClient.html.twig', array());
    }
     public function profilAction()
    {
                            $request = $this->get('request');

      // $modele=$em->getRepository("EspritParcBundle:Modele")->find($id);
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
          $lastname=$request->get('lastname');
            $email=$request->get('email');
            $age=$request->get('age');
              $adresse=$request->get('adresse');
            $phone=$request->get('phone');
            
              $user->setUsername($username);
           $user->setPlainPassword($password);
            $user->setNom($firstname);
          $user->setPrenom($lastname);
                    $user->setEmail($email);
        $user->setAge($age);
        $user->setAdresse($adresse);
                $user->setTel($phone);
      $userManager->updateUser($user, true);
             
    return $this->render('PidevFrontOfficeBundle:Client:ProfileClient.html.twig', array());    
        
    } }
         
        return $this->render('PidevFrontOfficeBundle:Client:ProfileClient.html.twig', array());
    }
    
     public function DesactiveCAction()
    {  
          $l =$this->getUser();   
 
             
          $userManager = $this->get('fos_user.user_manager');
          
        
  $l->setEnabled();
         
      $userManager->updateUser($l, true);
     return new RedirectResponse($this->generateUrl('fos_user_security_logout'));

        
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
return $this->render('PidevFrontOfficeBundle:Client:statistiqueClient.html.twig', array(
'chart' => $ob
));
}
    
    
}
