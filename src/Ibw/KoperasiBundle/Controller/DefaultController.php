<?php

namespace Ibw\KoperasiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IbwKoperasiBundle:Default:index.html.twig', array('name' => $name));
    }
}
