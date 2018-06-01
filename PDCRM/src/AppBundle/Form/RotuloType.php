<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RotuloType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('asesor', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['asesores'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('accion', ChoiceType::class,
                array(
                    'label' => 'Acción',
                    'choices' => $options['acciones'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('elementos', ChoiceType::class,
                array(
                    'label' => '',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['elementos'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))
            ->add('tamano', ChoiceType::class,
                array(
                    'label' => 'Tamaño',
                    'choices' => $options['tamanos'],
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
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Rotulo'
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
            ->setDefault('acciones', null)
            ->setRequired('acciones')
            ->setAllowedTypes('acciones', array('array'))
        ;

        $resolver
            ->setDefault('tamanos', null)
            ->setRequired('tamanos')
            ->setAllowedTypes('tamanos', array('array'))
        ;

        $resolver
            ->setDefault('elementos', null)
            ->setRequired('elementos')
            ->setAllowedTypes('elementos', array('array'))
        ;
    }
}
