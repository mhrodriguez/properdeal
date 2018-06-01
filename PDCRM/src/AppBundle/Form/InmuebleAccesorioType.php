<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceboxType;

class InmuebleAccesorioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('accesorios', ChoiceType::class,
        array(
            'label' => 'accesorios',
            'required' => false,
            'expanded' => true,
            'multiple' => true,
            'choices' => $options['accesorios'],
            'choices_as_values' => true,
            'choice_label' => 'nombre',
        ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InmuebleAccesorio'
        ));

        $resolver
            ->setDefault('accesorios', null)
            ->setRequired('accesorios')
            ->setAllowedTypes('accesorios', array('array'))
        ;

    }
}
