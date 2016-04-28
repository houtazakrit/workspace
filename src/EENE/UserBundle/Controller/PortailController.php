<?php

namespace EENE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortailController extends Controller
{
    public function indexAction()
    {
	
	  
        return $this->render('UserBundle:Portail:index.html.twig');
    }
}
