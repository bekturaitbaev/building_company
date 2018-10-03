<?php

namespace AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/account", name="account_page")
     */
    public function indexAction()
    {
        return $this->render('AccountBundle:Default:index.html.twig');
    }
}
