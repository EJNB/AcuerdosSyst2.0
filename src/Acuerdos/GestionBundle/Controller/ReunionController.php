<?php

namespace Acuerdos\GestionBundle\Controller;

use Acuerdos\GestionBundle\Entity\Persona;
use Symfony\Component\HttpFoundation\Request;
use Acuerdos\GestionBundle\Entity\Tema;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Acuerdos\GestionBundle\Entity\Reunion;
use Acuerdos\GestionBundle\Form\ReunionType;
use Acuerdos\GestionBundle\Entity\ReunionPersona;

/**
 * Reunion controller.
 *
 */
class ReunionController extends Controller
{

    /**
     * Lists all Reunion entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();//
        $dql = "SELECT r FROM AcuerdosGestionBundle:Reunion r ORDER BY r.idReunion";
        $reuniones = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $reuniones,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('AcuerdosGestionBundle:Reunion:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new Reunion entity.
     *
     */
    public function createAction(Request $request)
    {
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
            $url = $request->request->get('url');
//            var_dump($url);
            if($url=='http://localhost/AcuerdosSyst2.0/web/app_dev.php/Frontend/new_convocatoria'){//si la url es la de
                return $this->redirect($this->generateUrl('mis_convocatorias'));
            }else{
                return $this->redirect($this->generateUrl('reunion'));
            }
        }

        return $this->render('AcuerdosGestionBundle:Reunion:new.html.twig', array(
            'reunion' => $reunion,
            'form'   => $form->createView(),
            'personas' => $personas,
            'temas' => $temas,
        ));
    }

     /**
     * Creates a form to create a Reunion entity.
     *
     * @param Reunion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reunion $entity)
    {
        $form = $this->createForm(new ReunionType(), $entity, array(
            'action' => $this->generateUrl('reunion_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Reunion entity.
     * OK
     */
    public function newAction()
    {
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

    /**
     * Finds and displays a Reunion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Reunion')->find($id);
        $participantes = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByidReunion($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reunion entity.');
        }

        return $this->render('AcuerdosGestionBundle:Reunion:show.html.twig', array(
            'entity'=> $entity,
            'temas' => $entity->getTemas(),
            'participantes' => $participantes,
        ));
    }

    /**
     * Displays a form to edit an existing Reunion entity.
     *
     */
    public function editAction($id)
    {
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

    /**
    * Creates a form to edit a Reunion entity.
    *
    * @param Reunion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reunion $entity)
    {
        $form = $this->createForm(new ReunionType(), $entity, array(
            'action' => $this->generateUrl('reunion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reunion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Reunion')->find($id);
        $emails = array();// esto es para guardar todos los emails de las partcipantes
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reunion entity.');
        }
        //obtengo los registros q incluyen los participantes asociados a la reunion pasada por parametros
        $participantes = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findBy(array(
            'idReunion'=> $id,
        ));

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            foreach($participantes as $participante){
                $em->remove($participante);
            }

            $lista = new ArrayCollection();
//
//            $coordinador = new ReunionPersona();
//            $coordinador->setIdPersona($em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(intval($request->request->get('coordinador'))));
//            $coordinador->setIdReunion($entity);
//            $coordinador->setTipo('Coordinador');
//            $lista->add($coordinador);

            //guardar el secretario de actas
            $secretario = new ReunionPersona();
            $secretario->setIdPersona($em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(intval($request->request->get('secretario'))));
            $secretario->setIdReunion($entity);
            $secretario->setTipo('Secretario');
            $lista->add($secretario);

            //recorrer la lista de participantes y guardarlos
            foreach($request->request->get('select-participantes-disponibles') as $value){
                $persona = new ReunionPersona();
                $persona->setIdPersona($em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(intval($value)));
                $persona->setIdReunion($entity);
                $persona->setTipo('Participante');
                $lista->add($persona);
            }
//            //guardar la lista de invitados
            foreach($request->request->get('select-invitados-disponibles') as $valor ){
                $invitado = new ReunionPersona();
                $invitado->setIdPersona($em->getRepository('AcuerdosGestionBundle:Persona')->findOneById(intval($valor)));
                $invitado->setIdReunion($entity);
                $invitado->setTipo('Invitado');
                $lista->add($invitado);
            }

            //recorrer la lista de temas y guardarlos
            foreach($request->request->get('select-temas-asignados') as $value){
                $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->findOneById(intval($value));
                $tema->setReunion($entity);
            }

            foreach ($lista as $participante){
                $em->persist($participante);
                $emails[]=$participante->getIdPersona()->getEmail();
            }
            $em->flush();

            //recojo todos lo temas asociados con mi reunion para pasarlos por email
            $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findByReunion($entity->getId());
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
                            'reunion' => $entity,
                            'temas' => $temas,
                        )
                    ),
                    'text/html'
                );
            //envio el mensaje
            $this->get('mailer')->send($mesage);

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido actualizados satisfactoriamente');

            return $this->redirect($this->generateUrl('reunion'));
        }

        return $this->render('AcuerdosGestionBundle:Reunion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Reunion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Reunion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reunion entity.');
        }
        //buscar todos los participantes de esa reunion y tomar su correos en la variable esta debajo $emails
        $reuniones = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByIdReunion($id);
        //array para guardar todos  mis emails
        $emails = array();

        foreach($reuniones as $reunion){
            $emails[] = $reunion->getIdPersona()->getEmail();
        }

        $em->remove($entity);
        $em->flush();

        //envio de mensaje para noticar a los participantes q se ha cancelado la reunion
        $message = \Swift_Message::newInstance()
            ->setSubject('Reunion Cancelada')
            ->setFrom('acuerdos@cubanacan.tur.cu')
            ->setTo($emails)
            ->setBody(
                $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                    'Emails/delete-reunion.html.twig',
                    array('reunion' => $entity)
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);

        //create flash message
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Su registro fue eliminado satisfactoriamente');

        return $this->redirect($this->generateUrl('reunion'));
    }
}
