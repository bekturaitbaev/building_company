<?php

namespace ContactsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/contacts", name="contacts_page")
     */
    public function indexAction()
    {
        return $this->render('ContactsBundle:Default:index.html.twig');
    }
}
