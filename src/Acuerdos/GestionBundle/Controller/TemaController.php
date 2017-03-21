<?php

namespace Acuerdos\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acuerdos\GestionBundle\Entity\Tema;
use Acuerdos\GestionBundle\Form\TemaType;

/**
 * Tema controller.
 *
 */
class TemaController extends Controller
{

    /**
     * Lists all Tema entities.
     *
     */
    public function indexAction(Request $request)
    {
        //verificar si hay temas no asosiados a ninguna reunion
        $em = $this->getDoctrine()->getManager();
        $temas = $em->getRepository('AcuerdosGestionBundle:Tema')->findBy(array(
            'reunion' => null
        ));
        //recorro mi array de temas y los elimino de la
//        foreach($temas as $valor){
//            $em->remove($valor);
//            $em->flush();
//        }
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT t FROM AcuerdosGestionBundle:Tema t";
        $temas = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $temas,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('AcuerdosGestionBundle:Tema:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new Tema entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tema();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido guardados correctamente'
            );

            return $this->redirect($this->generateUrl('tema'));
        }

        return $this->render('AcuerdosGestionBundle:Tema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Tema entity.
     *
     * @param Tema $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Tema $entity)
    {
        $form = $this->createForm(new TemaType(), $entity, array(
            'action' => $this->generateUrl('tema_create'),
            'method' => 'POST',
        ));

//        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tema entity.
     *
     */
    public function newAction()
    {
        $entity = new Tema();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcuerdosGestionBundle:Tema:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tema entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Tema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tema entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcuerdosGestionBundle:Tema:show.html.twig', array(
            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tema entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Tema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tema entity.');
        }

        $editForm = $this->createEditForm($entity);
//        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcuerdosGestionBundle:Tema:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Tema entity.
     *
     * @param Tema $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Tema $entity)
    {
        $form = $this->createForm(new TemaType(), $entity, array(
            'action' => $this->generateUrl('tema_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tema entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Tema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tema entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido editados correctamente'
            );

            return $this->redirect($this->generateUrl('tema'));
        }

        return $this->render('AcuerdosGestionBundle:Tema:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tema entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AcuerdosGestionBundle:Tema');

        if($request->isXmlHttpRequest()){
            $tema = $repository->findOneById($id);
            $em->remove($tema);
            $em->flush();
            return new Response($id);
        }else{
            $entity = $repository->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tema entity.');
            }

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido eliminados correctamente'
            );
            return $this->redirect($this->generateUrl('tema'));
        }
    }

    /**
     * @param Request $request
     * @return Response
     * agregar temas en la gestion de reuniones
     */
    public function addTemaAction(Request $request){
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();

            $title = $request->request->get('tema');//tema
            $clasificacion = $request->request->get('clasificacion');//clasificacion del tema
            $descripcion = $request->request->get('descripcion');//descripcion

            $tema = new Tema();
            $tema->setTema($title);
            $tema->setDescripcion($descripcion);
            $tema->setClasificacion($clasificacion);

            $em->persist($tema);
            $em->flush();
            $arr = array(
                'tema' => $tema->getTema(),
                'value' => $tema->getId(),
            );

            $response = json_encode($arr);

            return new Response($response);
//            return new Response('ok');
        }else{
            $em = $this->getDoctrine()->getManager();
            $tema = new Tema();
            $tema->setTema('TEma prueba');
            $tema->setDescripcion('dfhfjhdjfhjdhfh');
            $tema->setClasificacion('dfdhfjhdjhf');

            $em->persist($tema);
            $em->flush();
            return new Response('ok');
        }
    }

}
