<?php

namespace Acuerdos\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion','text',array('label' => 'Nombre y apellidos'))
            ->add('username')
//            ->add('password','password',array('label' => 'Contraseña'))
            ->add('cargo')
            ->add('email')
            ->add('isActive','checkbox',array(
                'label' => 'Activo',
                'required' => false
            ))
            ->add('area','entity',array(
                'class' => 'AcuerdosGestionBundle:Area',
                'placeholder' => 'Seleccione el area',
                'attr' => array(
                    'class' => 'selectpicker',
                    'data-live-search' => 'true',
                    'data-size' => 7,
                )
            ))
//            ->add('acuerdos')
            ->add('roles','entity',array(
                'class' => 'AcuerdosSeguridadBundle:Role',
//                'label' => 'Seleccionar roles',
                'multiple' => true,
                'expanded' => true,
                'attr' => array('required' => true)
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acuerdos\GestionBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acuerdos_gestionbundle_persona';
    }
}
