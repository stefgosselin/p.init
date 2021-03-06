<?php
/**
 * Controller for p.init splash page
 *
 * @author     Stef <stef@example.com>
 */
namespace Pinit\PinitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/")
 */
class SplashPageController extends Controller {

  /**
   * @Route("/splash", name="splash")
   * @Template
   */
  function DefaultAction()
  {
    return [];
  }
} 
