<?php

namespace Pinit\ProjectBundle\Controller;

use Pinit\ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class DefaultController extends Controller
{  /**
   * @Route("/", name="homePage")
   * @Template
   * @Cache(smaxage=60)
   */
    public function homePageAction()
    {
        return [];
    }


    public function createAction()
    {
        $id = rand(1,15);
        $project = new Project();
        $project->setName('A New Project');
        $project->setOwnerId($id);
        $project->setDescription('Test project description.');

        $em = $this->getDoctrine()->getManager();
        $em->persist($project);
        $em->flush();

      return new Response('Created project id '.$project->getId());
    }
}
