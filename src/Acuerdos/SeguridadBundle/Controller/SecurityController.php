<?php

namespace Acuerdos\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('AcuerdosSeguridadBundle:Security:login.html.twig',
//            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error' => $error,)
        );
//        return $this->render('AcuerdosSeguridadBundle:Security:login.html.twig', array(
//                // ...
//            ));
    }

    public function loginCheckAction()
    {
        return $this->render('AcuerdosSeguridadBundle:Security:loginCheck.html.twig', array(
                // ...
            ));
    }

    public function changePasswordAction(){

    }
}
