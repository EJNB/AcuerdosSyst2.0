<?php

namespace Acuerdos\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReunionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('fechaCreacion')
            ->add('fechaRealizacion', 'datetime', array(
                'widget' => 'single_text',
                'label' => 'Fecha de realización',
                'attr' => array('class' => 'format_date_time'),
                'required' => true,
                'input' => 'datetime',
//                'format' => 'Y-M-D hh:ii',
            ))
            ->add('lugar')
//            ->add('nivel','choice',array(
//                'choices' => array(
//                    '1' => 'Director General',
//                    '2' => 'Subdirectores y jefes de dapartamentos',
//                    '3' => 'Jefes de Brigada,Jefes de turno y Auditores interno',
//                    '4' => 'Organizaciones',
//                ),
//                'placeholder' => 'Seleccione el nivel',
//                'attr' => array('class' => 'selectpicker')
//            ))
            ->add('tipo','choice',array(
                'choices' => array('1'=> 'Ordinaria','2' => 'Extraordinaria'),
                'multiple' =>false,
                'expanded' => true,
                'required' => true
            ))
//            ->add('descripcion')
            ->add('procedencia','entity',array(
                'class'=> 'AcuerdosGestionBundle:Procedencia',
                'attr' => array(
                    'class'=>'selectpicker',
                    'data-live-search' => 'true',
                    'title' => 'Seleccione la procedencia',
                    'data-size' => 7
                )
            ))
//            ->add('idReunion','text', array(
//                'label' => 'Codigo del reunion:',
//                'required' => true,
//            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acuerdos\GestionBundle\Entity\Reunion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acuerdos_gestionbundle_reunion';
    }
}