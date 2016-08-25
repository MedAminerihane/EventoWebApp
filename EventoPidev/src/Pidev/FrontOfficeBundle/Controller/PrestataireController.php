<?php

namespace Pidev\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ob\HighchartsBundle\Highcharts\Highchart;
class PrestataireController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevFrontOfficeBundle::indexPrestataire.html.twig', array());
    }
    
    public function rdAction()
    {
      $user =  $this->getUser();
        if ($user->getNature()==1) {
            
             return new RedirectResponse($this->generateUrl('pidev_front_office_homepage'));
           
        }elseif ($user->getNature()==0)
        {
            return new RedirectResponse($this->generateUrl('pidev_front_office_indexP'));

    }elseif($user->getNature()==2)
    {
        return new RedirectResponse($this->generateUrl('pidev_front_office_indexA'));
    }
    
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
        
            $email=$request->get('email');
 
              $adresse=$request->get('adresse');
            $phone=$request->get('phone');
              $matricule=$request->get('matricule');
                $description=$request->get('description');
             
            $user->setUsername($username);
            $user->setPlainPassword($password);
            $user->setNom($firstname);

            $user->setEmail($email);
            $user->setDescription($description);
            $user->setMatriculefiscal($matricule);
            $user->setAdresse($adresse);
            $user->setTel($phone);
      $userManager->updateUser($user, true);
             
    return $this->render('PidevFrontOfficeBundle:Prestataire:ProfilePrestataire.html.twig', array());    
        
    } }
         
        return $this->render('PidevFrontOfficeBundle:Prestataire:ProfilePrestataire.html.twig', array());
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
return $this->render('PidevFrontOfficeBundle:Prestataire:statistiquePrestataire.html.twig', array(
'chart' => $ob
));
}
}
