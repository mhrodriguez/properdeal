<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArchivoPType extends AbstractType
{
    private $modoEdicion=false;
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['modoEdicion'] != null)
        {
            $this->modoEdicion = $options['modoEdicion'];
        }

        if ($this->modoEdicion) {
            $builder
                ->add('privado')
                ->add('comentarios', TextAreaType::class,
                    array('attr' => array('class' => 'materialize-textarea'),
                        'required' => true))
            ;
        }
        else{
            $builder
                ->add('privado')
                ->add('comentarios', TextAreaType::class,
                    array('attr' => array('class' => 'materialize-textarea'),
                        'required' => true))
                ->add('file', FileType::class);
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ArchivoP'
        ));

        $resolver
            ->setDefault('modoEdicion', false)
            ->setRequired('modoEdicion')
            ->setAllowedTypes('modoEdicion', array('bool'))
        ;
    }
}
