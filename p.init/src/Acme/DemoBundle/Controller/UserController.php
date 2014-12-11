<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/user_old")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="user_old")
     * @Template
     */
    public function indexAction()
    {
        return [];
    }
}
