<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class InmuebleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('id_usuario', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['usuarios'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
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
            ->add('zonas', ChoiceType::class,
                array(
                    'label' => 'Zonas',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['zonas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('calle')
            ->add('numero', TextType::class, array('label' => 'Número'))
            ->add('numeroint', TextType::class, array('label' => 'Número Interior'))
            ->add('entrecalles_primera', TextType::class, array('label' => 'Entre calles (Primera calle)'))
            ->add('entrecalles_segunda', TextType::class, array('label' => 'Segunda calle'))
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
            ->add('cp', TextType::class, array('label' => 'C.P.'))
            ->add('plantas', IntegerType::class, array( 'attr' => array('min' => '0') ))
            ->add('recamaras', IntegerType::class, array( 'attr' => array('min' => '0') ))
            ->add('precio', NumberType::class, array('label' => '($) Precio'))
            ->add('metrosconstruccion', NumberType::class, array('label' => 'Metros de Construcción', 'attr' => array('min' => '0')))
            ->add('metrosterreno', NumberType::class, array('label' => 'Metros de Terreno', 'attr' => array('min' => '0')))

            ->add('caracteristicas', ChoiceType::class,
                array(
                    'label' => 'Caracteristicas',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['caracteristicas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))

            ->add('latlng', TextType::class, array(
                'attr' => array('hidden' => 'true')
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inmueble'
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
            ->setDefault('zonas', null)
            ->setRequired('zonas')
            ->setAllowedTypes('zonas', array('array'))
        ;

        $resolver
            ->setDefault('caracteristicas', null)
            ->setRequired('caracteristicas')
            ->setAllowedTypes('caracteristicas', array('array'))
        ;


    }
}
