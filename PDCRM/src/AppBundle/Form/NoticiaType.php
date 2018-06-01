<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NoticiaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('descripcion', TextAreaType::class,
                array('attr' => array('class' => 'materialize-textarea'),
                    'required' => true))
            ->add('url')
            ->add('publicar')
            ->add('fechaPublicacion', DateTimeType::class,
                array('format' => 'yyyy-MM-dd hh:mm:ss',
                    'date_widget' => 'single_text',
                    'attr' => array('class' => 'datepicker')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Noticia'
        ));
    }
}
