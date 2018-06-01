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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class InmuebleProspectoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('prospecto', ChoiceType::class,
            array(
                'label' => 'Prospecto',
                'choices' => $options['prospectos'],
                'choices_as_values' => true,
                'choice_label' => function($prospecto, $key, $index) {
                    /** @var Category $category */
                    return strtoupper($prospecto->getNombre() . ' ' . $prospecto->getApellidos());
                },
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\InmuebleProspecto'
        ));

        $resolver
            ->setDefault('prospectos', null)
            ->setRequired('prospectos')
            ->setAllowedTypes('prospectos', array('array'))
        ;

    }
}
