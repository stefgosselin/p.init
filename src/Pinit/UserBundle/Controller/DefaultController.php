<?php

namespace Pinit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PinitUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
