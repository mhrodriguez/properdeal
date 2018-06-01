<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProspectoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array('label' => 'Nombre'))
            ->add('apellidos')
            ->add('email', EmailType::class, array('label' => 'E-mail *'))
            ->add('direccion', TextAreaType::class, array('attr' => array('class' => 'materialize-textarea'),
                                                          'required' => false, 'label' => 'Dirección'
            ))
            ->add('ciudad')
            ->add('telefono', TextType::class, array('label' => 'Teléfono *',
                'required' => false))
            ->add('telefonoMovil', TextType::class, array('label' => 'Teléfono Móvil'))
            ->add('presupuesto', NumberType::class, array(
                'label' => '($) Presupuesto',
                'required' => false
                )
            )
            ->add('observaciones', TextAreaType::class,
                array('attr' => array('class' => 'materialize-textarea'),
                      'required' => false)
            )
            ->add('id_estado', ChoiceType::class,
                array(
                    'label' => 'Estado',
                    'choices' => $options['estados'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    )
            )
            ->add('id_usuario', ChoiceType::class,
                array(
                    'label' => 'Asesor *',
                    'choices' => $options['usuarios'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_canal_captacion', ChoiceType::class,
                array(
                    'label' => 'Canal de Captación',
                    'choices' => $options['canalescaptacion'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_estatus_avance', ChoiceType::class,
                array(
                    'label' => 'Estatus de Avance',
                    'choices' => $options['estatusavance'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_tipo_prospecto', ChoiceType::class,
                array(
                    'label' => 'Tipo de Prospecto',
                    'expanded' => true,
                    'multiple' => false,
                    'choices' => $options['tiposprospecto'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('documentos', ChoiceType::class,
                array(
                    'label' => 'Documentos',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['documentos'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Prospecto'
        ));

        $resolver
            ->setDefault('usuarios', null)
            ->setRequired('usuarios')
            ->setAllowedTypes('usuarios', array('array'))
        ;

        $resolver
            ->setDefault('estados', null)
            ->setRequired('estados')
            ->setAllowedTypes('estados', array('array'))
        ;

        $resolver
            ->setDefault('canalescaptacion', null)
            ->setRequired('canalescaptacion')
            ->setAllowedTypes('canalescaptacion', array('array'))
        ;

        $resolver
            ->setDefault('estatusavance', null)
            ->setRequired('estatusavance')
            ->setAllowedTypes('estatusavance', array('array'))
        ;

        $resolver
            ->setDefault('tiposprospecto', null)
            ->setRequired('tiposprospecto')
            ->setAllowedTypes('tiposprospecto', array('array'))
        ;

        $resolver
            ->setDefault('documentos', null)
            ->setRequired('documentos')
            ->setAllowedTypes('documentos', array('array'))
        ;
    }
}
