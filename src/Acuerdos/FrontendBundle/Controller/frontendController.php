<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 1/30/2017
 * Time: 12:26 p.m.
 */

namespace Acuerdos\FrontendBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acuerdos\GestionBundle\Entity\Reunion;
use Acuerdos\GestionBundle\Form\ReunionType;
use Acuerdos\GestionBundle\Entity\Acuerdo;
use Acuerdos\GestionBundle\Form\AcuerdoType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\VarDumper\Cloner\Data;
use Acuerdos\GestionBundle\Entity\ReunionPersona;


class frontendController extends Controller
{
    /*Esta accion buscara todos los acuerdos del ususrio loguedo*/
    public function misAcuerdosAction(Request $request){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $acuerdos = $user->getAcuerdos();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $acuerdos,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('AcuerdosFrontendBundle:Acuerdo:mis_acuerdos.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /*Mis convocatorias*/
    public function misConvocatoriasAction(Request $request){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $reunion_personas = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findBy(array(
            'tipo' => 'Coordinador',
            'idPersona' => $user->getId()
        ));

        $convocatorias = new ArrayCollection();
        foreach ($reunion_personas as $reunion){
            $convocatorias->add($reunion->getIdReunion());
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $convocatorias,
            $request->query->getInt('page', 1),
            15
        );
//        var_dump($convocatorias);
        return $this->render('AcuerdosGestionBundle:Reunion:index.html.twig',array(
            'pagination' => $pagination
        ));
    }

    public function newConvocatoriaAction(){
        //verificar si hay temas no asosiado a ninguna reunion
        $em = $this->getDoctrine()->getManager();
        $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findBy(array(
            'reunion' => null
        ));
        //recorro mi array de temas y los elimino de la
        foreach($temas as $valor){
            $em->remove($valor);
            $em->flush();
        }

        $entity = new Reunion();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();
        $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();

        return $this->render('AcuerdosGestionBundle:Reunion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'areas' =>$areas,
        ));
    }

    public function createCreateForm(Reunion $entity){
        $form = $this->createForm(new ReunionType(), $entity, array(
            'action' => $this->generateUrl('convocatoria_create'),
            'method' => 'POST',
        ));
        return $form;
    }

    public function createConvocatoriaAction(Request $request){
        $reunion = new Reunion();
        $reunion->setFechaCreacion(new \DateTime('now'));
        $form = $this->createCreateForm($reunion);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AcuerdosGestionBundle:Persona');
        $personas = $repository->findAll();
        //yo puedo buscar inicialmente puedo guardar en la variables temas null de manera tal q en cuanto rendirice la plantilla no se mueste nada
        $temas = null;
//        $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findAll();
//        echo count($reunion->getProcedencia()->getReuniones())+1;

        if ($form->isValid()) {
//            echo $this->count($reunion->getProcedencia()->getReuniones())+1;
            $cant = count($reunion->getProcedencia()->getReuniones())+1;
            $reunion->setIdReunion($reunion->getProcedencia()->getPrefijo()."-R".$cant);
            $em = $this->getDoctrine()->getManager();
            $lista = new ArrayCollection();

            //guardar el secretario de actas
            $secretario = new ReunionPersona();
            $secretario->setIdPersona($repository->findOneById(intval($request->request->get('secretario'))));
            $secretario->setIdReunion($reunion);
            $secretario->setTipo('Secretario');
            $lista->add($secretario);

            $coordinador = new ReunionPersona();
            $coordinador->setIdPersona($repository->findOneById($this->get('security.token_storage')->getToken()->getUser()->getId()));
            $coordinador->setIdReunion($reunion);
            $coordinador->setTipo('Coordinador');
            $lista->add($coordinador);

            //guardar en la bd cada participante
            foreach($request->request->get('select-participantes-disponibles') as $clave => $valor ){
                $participantes = new ReunionPersona();
                $participantes->setIdPersona($repository->findOneById(intval($valor)));
                $participantes->setIdReunion($reunion);
                $participantes->setTipo('Participante');
                $lista->add($participantes);
            }

            //guardar en la bd cada invitado
            if ($request->request->get('select-invitados-disponibles')){
                foreach($request->request->get('select-invitados-disponibles') as $valor ){
                    $invitado = new ReunionPersona();
                    $invitado->setIdPersona($repository->findOneById(intval($valor)));
                    $invitado->setIdReunion($reunion);
                    $invitado->setTipo('Invitado');
                    $lista->add($invitado);
                }
            }

            //guardar en la bd todos los temas seleccionados
            foreach($request->request->get('select-temas-asignados') as $clave => $valor ){
                $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->findOneById(intval($valor));
                $tema->setReunion($reunion);
            }

//            $emails = array();
            foreach ($lista as $participante){
                $em->persist($participante);
                $emails[]=$participante->getIdPersona()->getEmail();
            }

            $em->persist($reunion);
            $em->flush();

//            recojo todos lo temas asociados con mi reunion para pasarlos por email
            $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findByReunion(array(
                'reunion' => $reunion->getId()
            ));
            //enviarle el correo a todos los implicados en la reunion
            $mesage = \Swift_Message::newInstance()
                ->setSubject('Convocatoria')
                ->setFrom('acuerdos@cubanacan.tur.cu')
                ->setTo($emails)//aqui le doy el array de participantes
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/registration.html.twig',
                        array(
                            'reunion' => $reunion,
                            'temas' => $temas,
                        )
                    ),
                    'text/html'
                );
            //envio el mensaje
            $this->get('mailer')->send($mesage);

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido guardados satisfactoriamente');
//            $url = $request->request->get('url');
//            var_dump($url);
//            if($url=='http://localhost/AcuerdosSyst2.0/web/app_dev.php/Frontend/new_convocatoria'){//si la url es la de
//                return $this->redirect($this->generateUrl('mis_convocatorias'));
//            }else{
                return $this->redirect($this->generateUrl('mis_convocatorias'));
//            }
        }

        return $this->render('AcuerdosGestionBundle:Reunion:new.html.twig', array(
            'reunion' => $reunion,
            'form'   => $form->createView(),
            'personas' => $personas,
            'temas' => $temas,
        ));
    }

    public function editConvocatoriaAction($id){
        //verificar si hay temas no asosiado a ninguna reunion
        $em = $this->getDoctrine()->getManager();
        $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findBy(array(
            'reunion' => null
        ));
        //recorro mi array de temas sin reunion y los elimino de la BD
        foreach($temas as $valor){
            $em->remove($valor);
            $em->flush();
        }

        $entity = $em->getRepository('AcuerdosGestionBundle:Reunion')->find($id);
        $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();
        $temas = $entity->getTemas();
        //dame los participantes
        $participant_selected = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findBy(array(
            'idReunion'=> $id,
        ));
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reunion entity.');
        }
        $editForm = $this->createEditForm($entity);

        return $this->render('AcuerdosGestionBundle:Reunion:edit.html.twig', array(
            'temas'         => $temas,
            'areas'         => $areas,
            'entity'        => $entity,
            'edit_form'     => $editForm->createView(),
            'participantes' => $participant_selected,
        ));
    }

    private function createEditForm(Reunion $entity)
    {
        $form = $this->createForm(new ReunionType(), $entity, array(
            'action' => $this->generateUrl('convocatoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /*esta accion se encargara de tomar las actas en la q el usuario logueado sea el secretario de actas */
    public function misActasAction(){
        $user = $this->get('security.token_storage')->getToken()->getUser();//obtengo el usuario logueado
        $em = $this->getDoctrine()->getManager();
        //aqui voy a buscar todos los usuarios q sean secretarios en las reuniones
        $reuniones = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findBy(array(
            'tipo' => 'Secretario',
//            'idPersona' => $user->getId(),
        ));
        $lista = new ArrayCollection();
        //depuro de todos los registros y me quedo solo en los q este el usuario logueado
        foreach($reuniones as $reunion){
            if($reunion->getIdPersona()->getId() == $user->getId() && $reunion->getIdReunion()->getFechaRealizacion()> new DateTime('now')){
                $lista->add($reunion);
            }
        }
        //busco el actas en por el id de la reunion
        $actas = new ArrayCollection();
        foreach($lista as $value){
            $actas = $em->getRepository('AcuerdosGestionBundle:Acta')->findBy(array(
                'reunion' => $value
            ));
        }

    }
}