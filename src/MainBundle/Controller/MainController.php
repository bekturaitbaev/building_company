<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/{_locale}")
 */
class MainController extends Controller
{
    /**
     * @Route("", name="main_index")
     * @Template()
     */

    public function indexAction()
    {
        return array('hello_world'=>'Hello World!');
//        return $this->render('MainBundle:Main:index.html.twig', array('hello_world'=>'Hello World!'));
    }
}
