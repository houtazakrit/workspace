<?php

namespace EENE\UserBundle\Form\Handler;

use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use FOS\UserBundle\Model\UserInterface;

class RegistrationFormHandler extends BaseHandler
{
    protected function onSuccess(UserInterface $user, $confirmation)
    {
         /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        // I need an instance of Entity Manager but I don't know where get it!
      //  $em = $this->container->get('doctrine')->getEntityManager();
        // or something like: $em = $this->getDoctrine()->getEntityManager
        $user = $userManager->createUser();
       // $user->setEnabled(true);

      //  $userDetails = new UserDetails;
    //    $em->persist($userDetails);

      //  $user->setId($userDetails->getId());

       
        parent::onSuccess($user, $confirmation);

        // otherwise add your functionality here
    }
}