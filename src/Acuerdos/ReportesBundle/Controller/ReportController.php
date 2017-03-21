<?php

namespace Acuerdos\ReportesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    public function seleccionProcedenciasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $procedencias = $em->getRepository('AcuerdosGestionBundle:Procedencia')->findAll();
        $areas = $em->getRepository('AcuerdosGestionBundle:Area')->findAll();
        return $this->render('AcuerdosReportesBundle:Report:seleccionProcedencias.html.twig', array(
                'procedencias' => $procedencias,
                'areas'     => $areas,
            ));
    }

    public function reunionProcedenciaAction($procedencia)
    {
        $em = $this->getDoctrine()->getManager();
        $reuniones = $em->getRepository('AcuerdosGestionBundle:Reunion')->findByProcedencia($procedencia);
        return $this->render('AcuerdosReportesBundle:Report:reunionProcedencia.html.twig', array(
               'reuniones' => $reuniones,
            ));
    }

    public function acuerdosReunionAction(Request $request,$reunion)
    {
        $em = $this->getDoctrine()->getManager();
        $reunion = $em->getRepository('AcuerdosGestionBundle:Reunion')->findOneById($reunion);
        $dql = "SELECT a FROM AcuerdosGestionBundle:Acuerdo a WHERE a.reunion =:idReunion";
        $acuerdos = $em->createQuery($dql);
        $acuerdos->setParameter('idReunion',$reunion->getId());
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $acuerdos,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('AcuerdosReportesBundle:Report:acuerdosReunion.html.twig', array(
                'pagination' => $pagination,
            ));
    }

    public function acuerdosMessageAction()
    {
        return $this->render('AcuerdosReportesBundle:Report:acuerdosMessage.html.twig', array(
                // ...
            ));    }

    public function acuerdosPdfAction()
    {
        return $this->render('AcuerdosReportesBundle:Report:acuerdosPdf.html.twig', array(
                // ...
            ));    }

    public function acuerdosPersonaAction()
    {
        return $this->render('AcuerdosReportesBundle:Report:acuerdosPersona.html.twig', array(
                // ...
            ));    }

}
