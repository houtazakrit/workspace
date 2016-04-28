<?php

namespace EENE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends Controller
{
    
    public function indexAction()
     {
	    
     
	    if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') )
        {
              return $this->render('UserBundle:Login:index.html.twig');
        }
        else
        {    
		
		$bag=$this->get('session')->getFlashBag();

		 $user=$this->getUser();
		 if($user!=null){
			 	 $lastname=$user->getLastname();
			 	 $firstname=$user->getFirstname();
			     $id=$user->getId();
			    $bag->set('userInfo',array('id'  => $id,'nom'  => $lastname,'prenom'  => $firstname));
		     }
            $url = $this->container->get('router')->generate("eene_portail");
            return new RedirectResponse($url);
		 
        }
	     
	   
    }
}
