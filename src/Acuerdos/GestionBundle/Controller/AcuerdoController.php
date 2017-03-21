<?php

namespace Acuerdos\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acuerdos\GestionBundle\Entity\Acuerdo;
use Acuerdos\GestionBundle\Form\AcuerdoType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Acuerdo controller.
 *
 */
class AcuerdoController extends Controller
{

    /**
     * Lists all Acuerdo entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT a FROM AcuerdosGestionBundle:Acuerdo a ORDER BY a.idAcuerdo ASC";
        $acuerdos = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $acuerdos,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('AcuerdosGestionBundle:Acuerdo:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new Acuerdo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Acuerdo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isValid()) {
            $entity->setFechaCreacion(new \DateTime('now'));
            $tema = $em->getRepository('AcuerdosGestionBundle:Tema')->find($request->request->get('select-temas'));
            $entity->setTema($tema);
            //guardo los responsables
            foreach($request->request->get('select-responsab-disponibles') as $responsable){
                $persona = $em->getRepository('AcuerdosGestionBundle:Persona')->find($responsable);
                $entity->addPersona($persona);
            }
            //genero el idAcuerdo
            $cantidadAcuerdos = $entity->getReunion()->getAcuerdos()->count()+1;
//            echo $cantidadAcuerdos;
            $entity->setIdAcuerdo($entity->getReunion().'-A'.$cantidadAcuerdos);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('acuerdo'));
        }

        return $this->render('AcuerdosGestionBundle:Acuerdo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Acuerdo entity.
     *
     * @param Acuerdo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Acuerdo $entity)
    {
        $form = $this->createForm(new AcuerdoType(), $entity, array(
            'action' => $this->generateUrl('acuerdo_create'),
            'method' => 'POST',
        ));

//        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Acuerdo entity.
     *
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AcuerdosGestionBundle:Tema');
        if($request->isXmlHttpRequest()){
            $temas = $repository->findByReunion(intval($request->request->get('id')));
            return $this->render('AcuerdosGestionBundle:Acuerdo:temas.html.twig',array(
                'temas' => $temas,
            ));
//            return new Response('ok');
        }else{
            $entity = new Acuerdo();
            $form   = $this->createCreateForm($entity);
            $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();
            $temas = $repository->findAll();

            return $this->render('AcuerdosGestionBundle:Acuerdo:new.html.twig', array(
                'entity' => $entity,
                'temas' => $temas,
                'areas' => $areas,
                'form'   => $form->createView(),
            ));
        }
    }

    /**
     * Finds and displays a Acuerdo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Acuerdo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acuerdo entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcuerdosGestionBundle:Acuerdo:show.html.twig', array(
            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Acuerdo entity.
     *
     */
    public function editAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AcuerdosGestionBundle:Tema');
        if($request->isXmlHttpRequest()){
            $temas = $repository->findByReunion(intval($request->request->get('id')));
            return $this->render('AcuerdosGestionBundle:Acuerdo:temas.html.twig',array(
                'temas' => $temas,
            ));
//            return new Response('ok');
        }else {
            $entity = $em->getRepository('AcuerdosGestionBundle:Acuerdo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Acuerdo entity.');
            }

            $editForm = $this->createEditForm($entity);
            $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();
            $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->find($entity->getReunion());

            return $this->render('AcuerdosGestionBundle:Acuerdo:edit.html.twig', array(
                'entity' => $entity,
                'edit_form' => $editForm->createView(),
                'areas' => $areas,
                'temas' => $reunion->getTemas(),
//            'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
    * Creates a form to edit a Acuerdo entity.
    *
    * @param Acuerdo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Acuerdo $entity)
    {
        $form = $this->createForm(new AcuerdoType(), $entity, array(
            'action' => $this->generateUrl('acuerdo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Acuerdo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Acuerdo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acuerdo entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('acuerdo_edit', array('id' => $id)));
        }

        return $this->render('AcuerdosGestionBundle:Acuerdo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Acuerdo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AcuerdosGestionBundle:Acuerdo');
        if($request->isXmlHttpRequest()){

            $reunion_id = $request->request->get('reunion');
            // busco el acuerdo y lo elimino
            $acuerdo = $repository->find($request->request->get('data'));
            $em->remove($acuerdo);
            $em->flush();

            //busco los acuerdos por reunion
            $acuerdos = $em->getRepository('AcuerdosGestionBundle:Acuerdo')->findByReunion($reunion_id);

            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $acuerdos,
                $request->query->getInt('page', 1),
                15
            );
            return $this->render('AcuerdosGestionBundle:Acuerdo:table-index.html.twig',array(
                'pagination' => $pagination
            ));

        }else{
            $entity = $repository->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Acuerdo entity.');
            }

            $em->remove($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('acuerdo'));
        }
    }

}
