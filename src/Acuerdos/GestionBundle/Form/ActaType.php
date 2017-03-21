<?php

namespace Acuerdos\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('idActa')
//            ->add('reunion','entity',array(
//                'class' => 'AcuerdosGestionBundle:Reunion',
//                'placeholder'=>'Seleccione la reunion',
//                'attr' => array('class' => 'selectpicker', 'data-live-search' => true),
//                'required' => true,
//            ))
//            ->add('fecha','date',array(
//                'widget' => 'single_text',
//                'label' => 'Fecha de realización',
//                'attr' => array('class' => 'format_date form-control'),
//                'required' => true,
//            )) creo q la fecha de creacion del acta se deberia tomar de ya cuando se crea el acta como tal
//            ->add('horaInicio','time',array(
//                'widget' => 'single_text',
//                'label' => 'Hora inicio',
//                'required' => true,
//                'attr' => array('class' => 'date_hora_inicio'),
//            ))
//            ->add('horaFin') pienso q la hora fin no hace falta ponerla por q a la hora q se termina el acta es q se registra lahora fin
//            ->add('numero')
//            ->add('aprobada','choice',array(
//                'class' => 'AcuerdosGestionBundle:Persona',
//                'mapped' => false,
//            ))
//            ->add('revisada','entity',array(
//                'class' => 'AcuerdosGestionBundle:Persona',
//                'mapped' => false,
//            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acuerdos\GestionBundle\Entity\Acta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acuerdos_gestionbundle_acta';
    }
}
