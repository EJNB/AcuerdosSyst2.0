<?php

namespace Acuerdos\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acuerdos\GestionBundle\Entity\Procedencia;
use Acuerdos\GestionBundle\Form\ProcedenciaType;

/**
 * Procedencia controller.
 *
 */
class ProcedenciaController extends Controller
{

    /**
     * Lists all Procedencia entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT p FROM AcuerdosGestionBundle:Procedencia p";
        $procedencias = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $procedencias,
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('AcuerdosGestionBundle:Procedencia:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new Procedencia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Procedencia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Los cambios fueron guardados satisfactoriamente!'
            );

            return $this->redirect($this->generateUrl('procedencia', array('id' => $entity->getId())));
        }

        return $this->render('AcuerdosGestionBundle:Procedencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Procedencia entity.
     *
     * @param Procedencia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Procedencia $entity)
    {
        $form = $this->createForm(new ProcedenciaType(), $entity, array(
            'action' => $this->generateUrl('procedencia_create'),
            'method' => 'POST',
        ));

//        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Procedencia entity.
     *
     */
    public function newAction()
    {
        $entity = new Procedencia();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcuerdosGestionBundle:Procedencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Procedencia entity.
     *
     */
//    public function showAction($id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('AcuerdosGestionBundle:Procedencia')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Procedencia entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//
//        return $this->render('AcuerdosGestionBundle:Procedencia:show.html.twig', array(
//            'entity'      => $entity,
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Displays a form to edit an existing Procedencia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Procedencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcuerdosGestionBundle:Procedencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Procedencia entity.
    *
    * @param Procedencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Procedencia $entity)
    {
        $form = $this->createForm(new ProcedenciaType(), $entity, array(
            'action' => $this->generateUrl('procedencia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

//        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Procedencia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcuerdosGestionBundle:Procedencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedencia entity.');
        }

//        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Los cambios fueron guardados satisfactoriamente!'
            );

            return $this->redirect($this->generateUrl('procedencia', array('id' => $id)));
        }

        return $this->render('AcuerdosGestionBundle:Procedencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Procedencia entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcuerdosGestionBundle:Procedencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Procedencia entity.');
        }

        $em->remove($entity);
        $em->flush();

        //creo el flash-message
        $this->get('session')->getFlashBag()->add(
            'notice',
            'El registro fue eliminado satisfactoriamente!'
        );

        return $this->redirect($this->generateUrl('procedencia'));
    }

    /**
     * Creates a form to delete a Procedencia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('procedencia_delete', array('id' => $id)))
//            ->setMethod('DELETE')
//            ->add('submit', 'submit', array('label' => 'Delete'))
//            ->getForm()
//        ;

    }
}
