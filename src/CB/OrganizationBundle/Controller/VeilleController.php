<?php

//src/CB/OrganizationBundle/VeilleController.php
namespace CB\organizationBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VeilleController extends Controller
{
    public function indexAction()
    {
        return new Response("Bonjour le monde");
    }
// on injecte la requête dans les argument de la methode
    public function viewAction($id, Request $request)
    {
        // on recupere notre parametre tag
        $tag = $request->query->get('tag');

        return new Response("Affichage de la view d'id : ".$id. "avec le tag :)");
    }
}
