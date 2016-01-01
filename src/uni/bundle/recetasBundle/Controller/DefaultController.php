<?php

namespace uni\bundle\recetasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniRecetasBundle:Default:index.html.twig', array('name' => $name));
    }
}
