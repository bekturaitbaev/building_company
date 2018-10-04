<?php

namespace DiplomasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/diplomas", name="diplomas_page")
     */
    public function indexAction()
    {
        return $this->render('DiplomasBundle:Default:index.html.twig');
    }
}
