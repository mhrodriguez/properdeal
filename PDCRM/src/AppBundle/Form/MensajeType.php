<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MensajeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('texto', TextAreaType::class,
                array('attr' => array('class' => 'materialize-textarea'),
                    'required' => true));
            if (isset($options['listacontactos']))
            {
                $builder->add('id_listacontacto', ChoiceType::class,
                array(
                    'label' => 'Lista de Contacto',
                    'choices' => $options['listacontactos'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ));
            }

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Mensaje'
        ));

        $resolver
            ->setDefault('listacontactos', null)
            ->setRequired('listacontactos')
            ->setAllowedTypes('listacontactos', array('array', 'NULL'))
        ;
    }
}
