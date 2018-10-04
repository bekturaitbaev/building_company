<?php

namespace FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/faq", name="faq_page")
     */
    public function indexAction()
    {
        return $this->render('FaqBundle:Default:index.html.twig');
    }
}
