<?php

namespace AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller
{
    /**
     * @Route("/account", name="account_page")
     */
    public function indexAction()
    {
    	$authenticationUtils = $this->get('security.authentication_utils');
    	// get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

   		// last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AccountBundle:Default:index.html.twig', array(
        	'last_username' => $lastUsername,
        	'error' => $error, 
        ));
    }
}
