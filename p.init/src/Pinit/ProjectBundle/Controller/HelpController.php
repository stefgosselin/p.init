<?php
namespace Pinit\ProjectBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelpController
{
     function indexAction(){
       return new Response('help controller.');
    }
}
