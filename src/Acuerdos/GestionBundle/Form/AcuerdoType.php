<?php

namespace Acuerdos\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AcuerdoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('idAcuerdo')
//            ->add('fechaCreacion')
            ->add('descripcion')
            ->add('fechaCumplimientoIndicada','date',array(
                'widget' => 'single_text',
                'label' => 'Fecha de Cumplimiento Indicada',
                'attr' => array('class' => 'format_date'),
                'required' => true,
//                'format' => 'yyyy-MM-dd',
            ))
            ->add('estado', 'choice', array(
                'choices' => array(
                    'Pendiente' => 'Pendiente',
                    'Incumplido' => 'Incumplido',
                    'Cumplido' => 'Cumplido',
                    'En_proceso' => 'En proceso',
                    'Permanente' => 'Permanente',
                    'Sin_efecto' => 'Sin efecto'
                ),
                'attr' => array(
                    'class'=>'selectpicker',
                    'data-live-search' => 'true',
                    'title' => 'Seleccione la reunion',
                    'data-size' => 6,
                    'required' => true,
                ),
            ))
//            ->add('fechaCumplimientoReal')
            ->add('reunion','entity',array(
                'class' => 'AcuerdosGestionBundle:Reunion',
                'attr' => array(
                    'required' => true,
                    'class'=>'selectpicker',
                    'data-live-search' => 'true',
                    'title' => 'Seleccione la reunion',
                    'data-size' => 7
                ),
            ))
//            ->add('personas','entity',array(
//                'class' => 'AcuerdosGestionBundle:Persona',
//                'attr' => array(
//                    'class'=>'selectpicker',
//                    'data-live-search' => 'true',
//                    'title' => 'Seleccione los responsables',
//                    'data-size' => 8
//                ),
//                'required' => 'true',
//            ))
//            ->add('tema')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acuerdos\GestionBundle\Entity\Acuerdo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acuerdos_gestionbundle_acuerdo';
    }
}
