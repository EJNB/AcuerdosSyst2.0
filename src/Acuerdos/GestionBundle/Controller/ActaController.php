<?php

namespace Acuerdos\GestionBundle\Controller;

use Acuerdos\GestionBundle\Entity\ReunionPersona;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acuerdos\GestionBundle\Entity\Acuerdo;
use Acuerdos\GestionBundle\Form\AcuerdoType;
use Acuerdos\GestionBundle\Entity\Acta;
use Acuerdos\GestionBundle\Form\ActaType;
use Doctrine\Common\Collections\ArrayCollection;
use Acuerdos\GestionBundle\Entity\AcuerdoPersona;

/**
 * Acta controller.
 *
 */
class ActaController extends Controller
{

    /**
     * Lists all Acta entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

//        $entities = $em->getRepository('AcuerdosGestionBundle:Acta')->findAll();
        $dql = "SELECT a FROM AcuerdosGestionBundle:Acta a";
        $actas = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $actas,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('AcuerdosGestionBundle:Acta:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new Acta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Acta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
//            $entity->setIdActa('1');
            $em = $this->getDoctrine()->getManager();
            $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($request->request->get('reunion_id'));
            $entity->setHoraInicio(new \DateTime($request->request->get('horainicio')));
            $entity->setHoraFin(new \ DateTime('now'));
            $entity->setFecha(new \DateTime('today'));
            $entity->setAprobada($request->request->get('aprobada'));
            $entity->setRevisada($request->request->get('revisada'));
            $prefijo = $reunion->getIdReunion();//aqui obtengo el prefijo de la reunion algo asi como CD-R54
            $numero = substr($prefijo,strpos($prefijo,'R')+1,strlen($prefijo));
            $entity->setNumero($numero);
            //dame lo q viene en el campo hidden con el name reunion_id
            $entity->setDescripcion('ACTA NO. '.$numero.' '.$reunion->getProcedencia());
            $entity->setReunion($reunion);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('acta'));
        }


        return $this->render('AcuerdosGestionBundle:Acta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Acta entity.
     *
     * @param Acta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Acta $entity)
    {
        $form = $this->createForm(new ActaType(), $entity, array(
            'action' => $this->generateUrl('acta_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Acta entity.
     *
     */
    public function newAction()
    {
//        $entity = new Acta();
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $reunion_personas = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findBy(array(
            'tipo' => 'Coordinador',
            'idPersona' => $user->getId()
        ));
        $convocatorias = new ArrayCollection();
        foreach ($reunion_personas as $reunion){
            //aqui deberia verificar q estas convocatorias sean solo de las fechas actuales

            $convocatorias->add($reunion->getIdReunion());
        }

        return $this->render('AcuerdosGestionBundle:Acta:new.html.twig', array(
            'reuniones' => $convocatorias,
//            'form'   => $form->createView(),
        ));
    }

    /*
     * Este metodo es el encargado de tomar la reunion q se selecciono y devolver el la plantilla new con todos los campos
     * para q el formularion la llene
     */
    public function actanewAction(Request $request,$reunion_id){
        //necesito construir el formulario de Acuerdos
        $areas = array();
//        $acuerdo = new Acuerdo();
//        $form = $this->createForm(new AcuerdoType(), $acuerdo);
        //rocojo todos los acuerdos q se tomaron en esa reuunion
        $acta = new Acta();
        $form_acta = $this->createCreateForm($acta);
        $em = $this->getDoctrine()->getManager();
        $reuniones = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByidReunion($reunion_id);
        $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($reunion_id);
        foreach($reuniones as $persona){
            $areas[] = $persona->getIdPersona()->getArea();
        }

        $dql = "SELECT a FROM AcuerdosGestionBundle:Acuerdo a WHERE a.reunion =:idReunion";
        $acuerdos = $em->createQuery($dql);
        $acuerdos->setParameter('idReunion',$reunion_id);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $acuerdos,
            $request->query->getInt('page', 1),
            15
        );

        $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findByReunion($reunion_id);
        return $this->render('AcuerdosGestionBundle:Acta:newActa.html.twig',array(
            'reuniones' => $reuniones,// esta son los registros de la reunion en la tabla reunion_persona
            'temas' => $temas,
            'pagination' => $pagination,//acuerdos tomados en esa reunion
            'form_acta' => $form_acta->createView(),//el formulario de acta
            'reunion' => $reunion, //simplemente el id de acuerdo
            'areas' => array_unique($areas),
        ));
    }

    /**
     * @param Request $request
     * @return Response
     * esta accion sera la encargada de actualizar la asistencia de los participantes
     */
    public function updateAsinstantAction(Request $request){
        if($request->isXmlHttpRequest()){
            //una vez q recibo el id del participante y el sustituto

            $em = $this->getDoctrine()->getManager();
            $text = $request->request->get('text');
            $sustituto = $request->request->get('sustituto');
            $participante_send = $request->request->get('id_participante');
            $reunion_id = $request->request->get('reunion_id');
            $asistencia = $request->request->get('asistencia');
            $participante = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findOneBy(array(
                'idReunion'=>$reunion_id,'idPersona'=>$participante_send
            ));
            if ($asistencia==0){//si es 0 significa q esta presente
                $participante->setCausa(null);
                $participante->setAsistencia(null);
                $participante->setSustituto(null);
                $em->flush();
            }else{
                $participante->setCausa($text);
                $participante->setAsistencia($asistencia);
                $participante->setSustituto($em->getRepository('AcuerdosGestionBundle:Persona')->findOneById($sustituto));
                $em->flush();
            }
            $reuniones = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByidReunion($reunion_id);
            return $this->render('AcuerdosGestionBundle:Acta:asistencia.html.twig',array(
                'reuniones' => $reuniones
            ));
        }
    }

    /**
     * funcion de crear acuerdos mediante AJAX
     */
    public function createAcuerdoAction(Request $request){
        if($request->isXmlHttpRequest()){
            $acuerdo = new Acuerdo();
            $em = $this->getDoctrine()->getManager();
            $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById(intval($request->request->get('idReunion')));
            $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->findOneById($request->request->get('tema'));
            //genero el idAcuerdo
            $cantidadAcuerdos = $reunion->getAcuerdos()->count()+1;
            $acuerdo->setIdAcuerdo($reunion->getIdReunion().'-A'.$cantidadAcuerdos);
            $acuerdo->setEstado($request->request->get('estado'));
            $acuerdo->setDescripcion($request->request->get('descripcion'));
            $acuerdo->setFechaCreacion(new \DateTime('today'));
            $acuerdo->setFechaCumplimientoIndicada(new \DateTime($request->request->get('fecha_cumplimiento')));

            $acuerdo->setReunion($reunion);
            $acuerdo->setTema($tema);

            //este foreach es para recorer los reponsables
            foreach($request->request->get('responsables') as $responsable){
                $persona = $em->getRepository('AcuerdosGestionBundle:Persona')->find($responsable);
                $acuerdo->addPersona($persona);
            }
            $em->persist($acuerdo);
            $em->flush();

            //busco todos mis acuerdos de la reunion q se esta desarrollando
            $acuerdos = $em->getRepository('AcuerdosGestionBundle:Acuerdo')->findByReunion($reunion->getId());

            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $acuerdos,
                $request->query->getInt('page', 1),
                8
            );

            return $this->render('AcuerdosGestionBundle:Acuerdo:table-index.html.twig', array(
                'pagination' => $pagination,
            ));
        }//endif
    }

    /**
     * Finds and displays a Acta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Acta')->find($id);
        $reunion = $entity->getReunion();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acta entity.');
        }

        return $this->render('AcuerdosGestionBundle:Acta:show.html.twig', array(
            'entity'      => $entity,
            'reunion' => $reunion,
        ));
    }

    /**
     * Displays a form to edit an existing Acta entity.
     *
     */
    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Acta')->find($id);

        //necesito construir el formulario de Acuerdos
        $acuerdo = new Acuerdo();
        $form = $this->createForm(new AcuerdoType(), $acuerdo);
//        $acta = new Acta();
//        $form_acta = $this->createEditForm($acta);
        //esto es para sacar a los participantes
        $reuniones = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByidReunion($entity->getReunion()->getId());
        $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($entity->getReunion()->getId());

        $dql = "SELECT a FROM AcuerdosGestionBundle:Acuerdo a WHERE a.reunion =:idReunion";
        $acuerdos = $em->createQuery($dql);
        $acuerdos->setParameter('idReunion',$reunion->getId());

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $acuerdos,
            $request->query->getInt('page', 1),
            15
        );

        foreach($reuniones as $persona){
            $areas[] = $persona->getIdPersona()->getArea();
        }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acta entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('AcuerdosGestionBundle:Acta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'reuniones' => $reuniones,// esta son los registros de la reunion en la tabla reunion_persona
//            'temas' => $temas,//todos los temas asociads a la reunion
            'form' => $form->createView(),//el formulario de acuerdos
            'reunion' => $reunion, //simplemente el id de acuerdo,
            'areas' => array_unique($areas),
            'pagination' => $pagination,
        ));
    }

    /**
    * Creates a form to edit a Acta entity.
    *
    * @param Acta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Acta $entity)
    {
        $form = $this->createForm(new ActaType(), $entity, array(
            'action' => $this->generateUrl('acta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Acta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Acta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acta entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('acta_edit', array('id' => $id)));
        }

        return $this->render('AcuerdosGestionBundle:Acta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Acta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Acta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acta entity.');
        }
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Su registro fue eliminado satisfactoriamente');
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('acta'));
    }

    /**
     * @param $id
     * @return Response pdf file
     */
    public function printpdfAction($id){

        $em = $this->getDoctrine()->getManager();
        $acta = $em->getRepository('AcuerdosGestionBundle:Acta')->find($id);
        //busco todos los registros en la tabla ReunionPersna para sacar los participanates, los ausentes. e invitados
        $entities = $em->getRepository('AcuerdosGestionBundle:ReunionPersona')->findByIdReunion($acta->getReunion()->getId());

        $html = $this->renderView('AcuerdosGestionBundle:Acta:acta-pdf.html.twig',array(
            'entities'=>$entities,
            'acta' => $acta,
            'temas' => $acta->getReunion()->getTemas(),
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );

//        return $this->render('AcuerdosGestionBundle:Acta:acta-pdf.html.twig',array(
//            'entities'=>$entities,
//            'acta' => $acta,
//            'temas' => $acta->getReunion()->getTemas(),
//        ));
    }
}
