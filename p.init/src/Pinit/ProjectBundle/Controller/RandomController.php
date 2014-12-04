<?php
namespace Pinit\ProjectBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController
{

     function indexAction($limit){
       return new Response('<html><body>Number: ' . rand(1, $limit).'</body></html>');
    }
}
