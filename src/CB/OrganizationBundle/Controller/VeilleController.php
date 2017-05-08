<?php

//src/CB/OrganizationBundle/VeilleController.php
namespace CB\OrganizationBundle\Controller;




use CB\OrganizationBundle\CBOrganizationBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class VeilleController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('@CBOrganizationBundle/veille.html.twig');
        return new Response($content);
    }

}
