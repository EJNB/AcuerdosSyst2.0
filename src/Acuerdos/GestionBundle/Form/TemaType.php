<?php

namespace Acuerdos\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TemaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tema','text',array('label' => 'Titulo del tema'))
            ->add('clasificacion','choice',array(
                'choices' => array(
                    'Informativo' => 'Informativo',
                    'Análisis y aprobación' => 'Análisis y aprobación',
                    'Seguimiento y control' => 'Seguimiento y control',
                ),
                'attr' => array(
                    'class' => 'selectpicker',
                    'data-live-search' => 'true',
                    'title' => 'Seleccione la clasificacion',
                    'data-size' => 7
                ),
            ))
            ->add('descripcion', 'textarea',array('label' => 'Descripcion', 'required' => false))
            ->add('reunion','entity',array(
                'class' => 'AcuerdosGestionBundle:Reunion',
                'placeholder' => 'Seleccione la reunion',
                'required' => false,
                'attr' => array('class' => 'selectpicker','data-live-search' => 'true'),
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acuerdos\GestionBundle\Entity\Tema'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acuerdos_gestionbundle_tema';
    }
}
