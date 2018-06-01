<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/27/16
 * Time: 6:33 p.m.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BuscarInmuebleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                    'choice_label' => 'nombre',
                )
            )
            ->add('id_moneda', ChoiceType::class,
                array(
                    'label' => 'Moneda',
                    'choices' => $options['monedas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                )
            )
            ->add('colonia')

            ->add('plantas', IntegerType::class, array( 'attr' => array('min' => '0'), 'label' => 'Plantas' ))
            ->add('recamaras', IntegerType::class, array( 'attr' => array('min' => '0'), 'label' => 'Recámaras' ))
            ->add('precio', NumberType::class, array('label' => '($) Precio desde'))
            ->add('metrosterreno', IntegerType::class, array('label' => 'Desde M2 Terreno', 'attr' => array('min' => '0')))
            ->add('preciomax', NumberType::class, array('label' => '($) Precio hasta'))
            ->add('metrosterrenomax', IntegerType::class, array('label' => 'Hasta M2 Terreno', 'attr' => array('min' => '0')))

            ->add('metrosconstruccion', IntegerType::class, array('label' => 'Desde M2 Construcción', 'attr' => array('min' => '0')))
            ->add('metrosconstruccionmax', IntegerType::class, array('label' => 'Hasta M2 Construcción', 'attr' => array('min' => '0')))

            ->add('alberca', CheckboxType::class, array('label' => 'Alberca'))
            ->add('amueblado', CheckboxType::class, array('label' => 'Amueblado'))

            ->add('legacyid', IntegerType::class, array( 'attr' => array('min' => '0'), 'label' => 'ID' ));
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
            ->setDefault('monedas', null)
            ->setRequired('monedas')
            ->setAllowedTypes('monedas', array('array'))
        ;

        $resolver
            ->setDefault('municipios', null)
            ->setRequired('municipios')
            ->setAllowedTypes('municipios', array('array'))
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

    }
}
