<?php

namespace WhyChooseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/whychoose", name="whychoose_page")
     */
    public function indexAction()
    {
        return $this->render('WhyChooseBundle:Default:index.html.twig');
    }
}
