<?php

namespace Pidev\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevFrontOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
