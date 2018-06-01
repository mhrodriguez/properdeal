<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/27/16
 * Time: 6:33 p.m.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class BuscarInmuebleType extends AbstractType
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
                    'choices' => $options['asesores'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('id_tipo_inmueble', ChoiceType::class,
                array(
                    'label' => 'Inmueble',/*,
                    'attr' => array('name' => 'id_tipo_inmueble'),*/
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
            ->add('id_municipio', ChoiceType::class,
                array(
                    'label' => 'Ciudad',
                    'choices' => $options['municipios'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre'
                )
            )
            ->add('colonia')
            ->add('plantas', IntegerType::class, array( 'attr' => array('min' => '0'), 'label' => 'Plantas' ))
            ->add('recamaras', IntegerType::class, array( 'attr' => array('min' => '0'), 'label' => 'Recámaras' ))
            ->add('precio', NumberType::class, array('label' => '($) Precio desde'))
            ->add('metrosterreno', IntegerType::class, array('label' => 'M2 de Terreno desde', 'attr' => array('min' => '0')))
            ->add('preciomax', NumberType::class, array('label' => '($) Precio hasta'))
            ->add('metrosterrenomax', IntegerType::class, array('label' => 'M2 de Terreno hasta', 'attr' => array('min' => '0')))

            ->add('metrosconstruccion', IntegerType::class, array('label' => 'M2 de Construccion desde', 'attr' => array('min' => '0')))
            ->add('metrosconstruccionmax', IntegerType::class, array('label' => 'M2 de Construccion hasta', 'attr' => array('min' => '0')))

            ->add('preciometroterrenomin', NumberType::class, array('label' => '($) Precio/M2 de Terreno desde'))
            ->add('preciometroterrenomax', NumberType::class, array('label' => '($) Precio/M2 de Terreno hasta'))
            ->add('preciometroconstruccionmin', NumberType::class, array('label' => '($) Precio/M2 de const. desde'))
            ->add('preciometroconstruccionmax', NumberType::class, array('label' => '($) Precio/M2 de const. hasta'))

            ->add('alberca', CheckboxType::class, array('label' => 'Alberca'))
            ->add('amueblado', CheckboxType::class, array('label' => 'Amueblado'))
            ->add('mostrarinactivas', CheckboxType::class, array('label' => 'Mostrar inactivas'))
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
            ->setDefault('asesores', null)
            ->setRequired('asesores')
            ->setAllowedTypes('asesores', array('array'))
        ;

        $resolver
            ->setDefault('municipios', null)
            ->setRequired('municipios')
            ->setAllowedTypes('municipios', array('array'))
        ;
    }
}
