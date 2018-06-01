<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('empresa')
            ->add('telefono')
            ->add('email')
            ->add('listascontacto', ChoiceType::class,
                array(
                    'label' => 'Listas de Contacto',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['listascontacto'],
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
            'data_class' => 'AppBundle\Entity\Contacto'
        ));

        $resolver
            ->setDefault('listascontacto', null)
            ->setRequired('listascontacto')
            ->setAllowedTypes('listascontacto', array('array'))
        ;
    }
}
