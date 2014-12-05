<?php

namespace Pinit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PinitAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
