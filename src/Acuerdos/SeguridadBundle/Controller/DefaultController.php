<?php

namespace Acuerdos\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcuerdosSeguridadBundle:Default:index.html.twig', array('name' => $name));
    }

    public function adminAction()
    {
        return new Response('Admin page!');
    }
}
