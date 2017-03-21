<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $url = $request->getUri();// este es uno de los metodos del objeto request
        $url_generate = $this->generateUrl('new_convocatoria');
//        $peticion = $request->request->all();
        return $this->render('default/index.html.twig',array(
            'url' => $url,
            'generate' => $url_generate,
//            'peticion' => $peticion,
        ));
    }

    /**
     * @Route("/prueba/example", name="formulario")
     */
    public function pruebaRequestAction(Request $request){
        return $this->render('default/form.html.twig');
    }

    /**
     * @Route("/prueba/request", name="request")
     */
    public function printRequest(Request $request){

        $get = $request->request->get('text');
//        $request->request->set('text', 'aaaaa');//con el metodo set
//        $get2 = $request->request->get('text');
        return $this->render('default/data.html.twig', array(
            'get' => $get,
//            'get2' => $get2,
        ));
    }
}
