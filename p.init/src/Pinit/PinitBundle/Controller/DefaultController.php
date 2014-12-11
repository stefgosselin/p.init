<?php

namespace Pinit\PinitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{

 /**
    * @Route("/", name="homepage")
   * @Template
   * @Cache(smaxage=60)
   */
    public function homePageAction()
    {
        return [];
    }


  /**
   * @Route("/user/", name="user")
   * @Template
   */
  public function indexAction()
  {
    return [];
  }

    /**
     * @Route("/navigation", name="navigation")
     * @Template
     * @Cache(maxage=0)
     */
    public function navigationAction()
    {
      return [];
    }

}
