<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SolicitudType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $buscando = $options['buscando'];

        $builder
            ->add('precio', NumberType::class, array('label' => '($) Precio desde'))
            ->add('preciomax', NumberType::class, array('label' => '($) Precio hasta'))

            ->add('metrosconstruccion', IntegerType::class, array('label' => 'Metros de Construcción desde', 'attr' => array('min' => '0')))
            ->add('metrosterreno', IntegerType::class, array('label' => 'Metros de Terreno desde', 'attr' => array('min' => '0')))
            ->add('metrosconstruccionmax', IntegerType::class, array('label' => 'Metros de Construcción hasta', 'attr' => array('min' => '0')))
            ->add('metrosterrenomax', IntegerType::class, array('label' => 'Metros de Terreno hasta', 'attr' => array('min' => '0')))

            ->add('id_tipo_inmueble', ChoiceType::class,
                array(
                    'label' => 'Inmueble',
                    'choices' => $options['tiposInmueble'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'group_by' => function($tipoInmueble, $key, $index) {
                        return $tipoInmueble->getIdCategoriaInmueble()->getNombre();
                    },
                ))
            ->add('id_operacion_inmueble', ChoiceType::class,
                array(
                    'label' => 'Transacción',
                    'choices' => $options['operacionesInmueble'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_estado', ChoiceType::class,
                array(
                    'label' => 'Estado',
                    'choices' => $options['estados'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'attr' => array('onchange' => 'onChangeEstado()')
                )
            )
            ->add('ciudad')
            ->add('colonia')
            ->add('id_moneda', ChoiceType::class,
                array(
                    'label' => 'Moneda',
                    'choices' => $options['monedas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre'
                )
            )
            ->add('id_usuario', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['usuarios'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('caracteristicas', ChoiceType::class,
                array(
                    'label' => 'Características',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['caracteristicas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ));

            if (!$buscando)
            {
                $builder->add('descripcion', TextAreaType::class,
                    array('label' => 'Descripción del Requerimiento', 'attr' => array('class' => 'materialize-textarea', 'placeholder' => 'Mi cliente busca...')));
            }

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitud'
        ));

        $resolver
            ->setDefault('estados', null)
            ->setRequired('estados')
            ->setAllowedTypes('estados', array('array'))
        ;

        $resolver
            ->setDefault('tiposInmueble', null)
            ->setRequired('tiposInmueble')
            ->setAllowedTypes('tiposInmueble', array('array'))
        ;

        $resolver
            ->setDefault('operacionesInmueble', null)
            ->setRequired('operacionesInmueble')
            ->setAllowedTypes('operacionesInmueble', array('array'))
        ;

        $resolver
            ->setDefault('caracteristicas', null)
            ->setRequired('caracteristicas')
            ->setAllowedTypes('caracteristicas', array('array'))
        ;

        $resolver
            ->setDefault('monedas', null)
            ->setRequired('monedas')
            ->setAllowedTypes('monedas', array('array'))
        ;

        $resolver
            ->setDefault('buscando', false)
            ->setAllowedTypes('buscando', array('boolean'));
        ;

        $resolver
            ->setDefault('usuarios', null)
            ->setRequired('usuarios')
            ->setAllowedTypes('usuarios', array('array'))
        ;

    }
}
