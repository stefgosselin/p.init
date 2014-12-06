<?php

namespace Pinit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
  /**
   * @Route("/user/", name="user")
   * @Template
   */
  public function indexAction()
  {
    return [];
  }
}
