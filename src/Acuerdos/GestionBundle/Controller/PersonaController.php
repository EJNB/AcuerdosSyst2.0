<?php

namespace Acuerdos\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acuerdos\GestionBundle\Entity\Persona;
use Acuerdos\GestionBundle\Form\PersonaType;

/**
 * Persona controller.
 *
 */
class PersonaController extends Controller
{

    /**
     * Lists all Persona entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
//        if($request->isXmlHttpRequest()){

//        }else{
        $dql = "SELECT p FROM AcuerdosGestionBundle:Persona p";
        $personas = $em->createQuery($dql);
//        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $personas,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('AcuerdosGestionBundle:Persona:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new Persona entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Persona();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $password = $form->get('password')->getData();// esto es equivlaente a lo de abajo
//            $plainPassword = $entity->getPassword();//dame el password q se envio
            $encoder = $this->container->get('security.password_encoder');//obtengo el servicio
            $encoded = $encoder->encodePassword($entity, $password);
            $entity->setPassword($encoded);
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus cambios fueron guardados satisfactoriamente'
            );

            return $this->redirect($this->generateUrl('persona'));
        }

        return $this->render('AcuerdosGestionBundle:Persona:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Persona entity.
     *
     * @param Persona $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Persona $entity)
    {
        $form = $this->createForm(new PersonaType(), $entity, array(
            'action' => $this->generateUrl('persona_create'),
            'method' => 'POST',
        ));
        $form->add('password','password',array('label'=>'Contraseña'));
        $form->add('password','repeated',array(
            'type' => 'password',
            'invalid_message' => 'Los campos deben coincidir',
            'options' => array('attr' => array('class' => 'password-field')),
            'required' => true,
            'first_options' => array('label' => 'Contraseña'),
            'second_options' => array('label' => 'Repetir Contraseña'),
        ));
        return $form;
    }

    /**
     * Displays a form to create a new Persona entity.
     *
     */
    public function newAction()
    {
        $entity = new Persona();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcuerdosGestionBundle:Persona:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Persona entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcuerdosGestionBundle:Persona:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Persona entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('AcuerdosGestionBundle:Persona:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Persona entity.
    *
    * @param Persona $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Persona $entity)
    {
        $form = $this->createForm(new PersonaType(), $entity, array(
            'action' => $this->generateUrl('persona_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Persona entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Sus datos han sido guardados correctamente'
            );

            return $this->redirect($this->generateUrl('persona'));
        }

        return $this->render('AcuerdosGestionBundle:Persona:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Persona entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Persona')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Persona entity.');
        }

        $em->remove($entity);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'notice',
            'Sus datos han sido eliminados correctamente'
        );

        return $this->redirect($this->generateUrl('persona'));
    }

    public function agregarPersonaAction(Request $request){
        if($request->isXmlHttpRequest()){

            $persona = new Persona();
            $em = $this->getDoctrine()->getManager();

            $persona->setDescripcion($request->request->get('description'));
            $persona->setCargo($request->request->get('cargo'));
            $persona->setEmail($request->request->get('email'));
            $persona->setUsername($request->request->get('username'));
            $persona->setIsActive(1);
            $encoder = $this->container->get('security.password_encoder');//obtengo el servicio
            $encoded = $encoder->encodePassword($persona, $request->request->get('first_password'));
            $persona->setPassword($encoded);
            //buscar el area en la BD
            $area = $em->getRepository('AcuerdosGestionBundle:Area')->findOneById($request->request->get('area'));
            $persona->setArea($area);

            $em->persist($persona);
            $em->flush();

            $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();

            return $this->render('AcuerdosGestionBundle:Reunion:select-participantes.html.twig',array(
                'areas' => $areas,
            ));
        }
    }

    //cambiar la contraseña de cada usuario
    public function changePasswordAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $persona = $em->getRepository('AcuerdosGestionBundle:Persona')->find($id);
        $first_password_send = $request->request->get('first_password');
        $repeat_password_send = $request->request->get('repeat_contraseña');
        if($repeat_password_send==$first_password_send){
            $encoder = $this->container->get('security.password_encoder');//obtengo el servicio
            $encoded = $encoder->encodePassword($persona, $first_password_send);
            $persona->setPassword($encoded);
            $em->persist($persona);
            $em->flush();
            return $this->indexAction($request);
        }
        return new Response('bad');
    }

    //busca a todas las personas
    public function findResponsablesAction(){
        $em = $this->getDoctrine()->getManager();
        $personas = $em->getRepository('AcuerdosGestionBundle:Persona')->findAll();

        return $this->render('AcuerdosGestionBundle:Persona:responsables.html.twig',array(
            'responsables' => $personas,
        ));
    }
}
