<?php

namespace AboutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/about", name="about_page")
     */
    public function indexAction()
    {
        return $this->render('AboutBundle:Default:index.html.twig');
    }
}
