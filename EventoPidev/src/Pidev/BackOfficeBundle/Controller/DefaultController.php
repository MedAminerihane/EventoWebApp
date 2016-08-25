<?php

namespace Pidev\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevBackOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
