<?php

namespace Pinit\ProjectBundle\Controller;

use Pinit\ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PinitProjectBundle:Default:index.html.twig', array('name' => $name));
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
