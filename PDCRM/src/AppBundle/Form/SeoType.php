<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SeoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', TextType::class,
                array('label' => 'Título'))
            ->add('keywords', TextAreaType::class,
                    array('label' => 'Palabras Clave', 'attr' => array('class' => 'materialize-textarea')))
            ->add('descripcion', TextAreaType::class,
                array('label' => 'Descripción', 'attr' => array('class' => 'materialize-textarea')))
            ->add('mision', TextAreaType::class,
                array('label' => 'Misión', 'attr' => array('class' => 'materialize-textarea')))
            ->add('telefono', TextType::class,
                array('label' => 'Teléfonos'))
            ->add('fax')
            ->add('direccion', TextAreaType::class,
                array('label' => 'Dirección', 'attr' => array('class' => 'materialize-textarea')))
            ->add('derechosautor', TextAreaType::class,
                array('label' => 'Derechos de autor', 'attr' => array('class' => 'materialize-textarea')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Seo'
        ));
    }
}
