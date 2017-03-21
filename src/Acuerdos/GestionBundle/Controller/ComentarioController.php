<?php

namespace Acuerdos\GestionBundle\Controller;

use Acuerdos\GestionBundle\Entity\Comentario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ComentarioController extends Controller
{
    public function newAjaxCommentAction(Request $request){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $persona = $em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(intval($request->request->get('persona')));//busca la persona
            $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->findOneById(intval($request->request->get('tema')));//busca el tema
//            $comentario = ;

            $comentario = new Comentario();
            $comentario->setComentario($request->request->get('comentario'));
            $comentario->setPersona($persona);
            $comentario->setTema($tema);

            $em->persist($comentario);
            $em->flush();

            $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($request->request->get('reunion_id'));
            return $this->render('AcuerdosGestionBundle:Acta:list-coment.html.twig',array('reunion'=> $reunion));

            //necesito enviar para el cliente el comentario y la persona q lo hizo
//            $coment_element = "
//                <div class='row'>
//                    <div class='col-md-12'>
//                        <div class='msg'>
//                            <a href='#'>".$persona->getDescripcion()."</a>
//                                <div class='pull-right' data_id='".$comentario->getId()."' data_url='".$this->generateUrl('comentario_edit')."'>
//                                    <a href='#' class='link-tooltip link-editar' data-placement='top' title='Editar'>
//                                        <span class='glyphicon glyphicon-pencil'></span>
//                                    </a>
//                                    <a
//                                        href='#'
//                                        class='link-tooltip'
//                                        data-placement='top'
//                                        title='Eliminar'
//                                        >
//                                        <span class='glyphicon glyphicon-trash'></span>
//                                    </a>
//                                </div><!--/.pull-righ-->
//                                <p class='clave'>". $comentario->getComentario()."</p>
//                        </div><!--/.msg-->
//                    </div><!--/.col-md-12-->
//                </div><!--/.row-->";
            //return new Response(json_encode($datos));
//            return new Response('ok');
        }else{
            return new Response('bad');
//            $em = $this->getDoctrine()->getManager();
//            $persona = $em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(15);//busca la persona
//            $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->findOneById(181);//busca el tema
////            $comentario = ;
//
//            $comentario = new Comentario();
//            $comentario->setComentario('vbvbvbv');
//            $comentario->setPersona($persona);
//            $comentario->setTema($tema);
//
//            $em->persist($comentario);
//            $em->flush();
//
//            return new Response('ok');
        }
    }

    /**
     * @param Request $request
     * @return Response
     * Editar los comentarios por ajax
     */
    public function editComentarioAction(Request $request){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $text = $request->request->get('text');//texto recibido
            $id_comentario = $request->request->get('id');//id recibido
            //busco en mi bd el comentario de con el id enviado
            $comentario = $em->getRepository('AcuerdosGestionBundle:Comentario')->findOneById($id_comentario);
            $comentario->setComentario($text);
            $em->flush();
            return new Response($id_comentario);
        }
    }

    /**
     * eliminar un comentario
     */
    public function deleteComentarioAction(Request $request){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $comentario = $em->getRepository('AcuerdosGestionBundle:Comentario')->findOneById($request->request->get('id'));
            $em->remove($comentario);
            $em->flush();
            //busco la reunio q se le esta haciendo el acta
            $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($request->request->get('id_reunion'));

            return $this->render('AcuerdosGestionBundle:Acta:list-coment.html.twig',array('reunion'=> $reunion));//a esta plantilla hay q darle varias variables
//            return new Response('ok');
        }
    }
}


