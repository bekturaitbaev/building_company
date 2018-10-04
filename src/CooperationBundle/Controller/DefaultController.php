<?php

namespace CooperationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/cooperation", name="cooperation_page")
     */
    public function indexAction()
    {
        return $this->render('CooperationBundle:Default:index.html.twig');
    }
}
