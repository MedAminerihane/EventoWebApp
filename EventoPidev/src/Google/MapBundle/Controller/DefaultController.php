<?php

namespace Google\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $adresse =$this->get('request')->get('lieu');
        
        return $this->render('GoogleMapBundle::base.html.twig', array('adresse'=>$adresse));
    }
}
