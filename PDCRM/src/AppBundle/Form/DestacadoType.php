<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DestacadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('inmueble', ChoiceType::class,
                array(
                    'label' => 'Propiedad',
                    'choices' => $options['inmuebles'],
                    'choices_as_values' => true,
                    'choice_label' => function($inmueble, $key, $index) {
                        return 'ID: ' . $inmueble->getLegacyid() . ' ' . $inmueble->getIdTipoInmueble()->getNombre() . ' en ' . $inmueble->getIdOperacionInmueble()->getNombre() . ' - ' . $inmueble->getColonia() . ' ' . $inmueble->getPrecio();
                    },
                )
            )
            ->add('descripcion', TextAreaType::class,
                array('label' => 'Descripción', 'attr' => array('class' => 'materialize-textarea')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Destacado'
        ));

        $resolver
            ->setDefault('inmuebles', null)
            ->setRequired('inmuebles')
            ->setAllowedTypes('inmuebles', array('array'))
        ;
    }
}
