<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ComisionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('comparte')
            ->add('cliente')
            ->add('monto', NumberType::class, array(
                'label' => 'Monto ($)',
            ))
            ->add('propiedadexterna', TextType::class, array(
                'label' => 'Propiedad externa',
            ))
            ->add('comision', TextType::class, array(
                'label' => 'Comisión (%)',
            ))
            ->add('comisionoficina', TextType::class, array(
                'label' => 'Comisión Oficina (%)',
            ))
            ->add('comisionasesor', TextType::class, array(
                'label' => 'Comisión Asesor (%)',
            ))
            ->add('asesor', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['asesores'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('inmueble', ChoiceType::class,
                array(
                    'label' => 'Propiedad',
                    'choices' => $options['inmuebles'],
                    'choices_as_values' => true,
                    'choice_label' => function($propiedad, $key, $index) {
                        /** @var Category $category */
                        return strtoupper('ID: ' . $propiedad->getLegacyid() . ' - ' . $propiedad->getCiudad() . ' ' . $propiedad->getIdEstado()->getNombre() . ' ' . $propiedad->getCalle());
                    },
                ))
            ->add('operacioninmueble', ChoiceType::class,
                array(
                    'label' => 'Operación',
                    'choices' => $options['operacionesinmueble'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'attr' => array('onchange' => 'onChangeOperacion()')
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comision'
        ));

        $resolver
            ->setDefault('asesores', null)
            ->setRequired('asesores')
            ->setAllowedTypes('asesores', array('array'))
        ;

        $resolver
            ->setDefault('inmuebles', null)
            ->setRequired('inmuebles')
            ->setAllowedTypes('inmuebles', array('array'))
        ;

        $resolver
            ->setDefault('operacionesinmueble', null)
            ->setRequired('operacionesinmueble')
            ->setAllowedTypes('operacionesinmueble', array('array'))
        ;
    }
}
