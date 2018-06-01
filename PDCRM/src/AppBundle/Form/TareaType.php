<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TareaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         //   ->add('fecha', DateTimeType::class, array('format' => 'yyyy-MM-dd hh:mm:ss', 'date_widget' => 'single_text', 'attr' => array('class' => 'datepicker')))
            ->add('id_usuario', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['asesores'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'attr' => array('onchange' => 'onChangeAsesor();'),
                ))
            ->add('id_accion', ChoiceType::class,
                array(
                    'label' => 'Accion',
                    'choices' => $options['acciones'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_prospecto', ChoiceType::class,
                array(
                    'label' => 'Prospecto',
                    'choices' => $options['prospectos'],
                    'choices_as_values' => true,
                    'choice_label' => function($prospecto, $key, $index) {
                        /** @var Category $category */
                        return strtoupper($prospecto->getNombre() . ' ' . $prospecto->getApellidos());
                    },
                ))
            ->add('agregarmicalendario', CheckboxType::class,
                array('label' => 'Descargar a mi calendario'
                ))
            ->add('propiedad')
            ->add('comentarios', TextAreaType::class,
                array('attr' => array('class' => 'materialize-textarea'),
                    'required' => false))
            ->add('indexSelectedAsesor', 'hidden')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Tarea'
        ));

        $resolver
            ->setDefault('prospectos', null)
            ->setRequired('prospectos')
            ->setAllowedTypes('prospectos', array('array'))
        ;

        $resolver
            ->setDefault('acciones', null)
            ->setRequired('acciones')
            ->setAllowedTypes('acciones', array('array'))
        ;

        $resolver
            ->setDefault('asesores', null)
            ->setRequired('asesores')
            ->setAllowedTypes('asesores', array('array'))
        ;
    }
}
