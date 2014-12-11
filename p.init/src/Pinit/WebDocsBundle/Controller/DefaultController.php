<?php

namespace Pinit\WebDocsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class DefaultController extends Controller
{
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
