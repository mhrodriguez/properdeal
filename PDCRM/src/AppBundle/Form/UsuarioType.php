<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $editando = $options['editando'];

        if (!$editando)
        {
        $builder
            ->add('nombre', TextType::class)
            ->add('empresa', TextType::class)
            ->add('telefono', TextType::class, array('label' => 'Teléfono'))
            ->add('email', EmailType::class, array('label' => 'E-mail'))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Los campos de Password deben coincidir y no estar en blanco.',
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Confirmar Password')));
        }
        else
        {
            $builder
                ->add('nombre', TextType::class)
                ->add('empresa', TextType::class)
                ->add('telefono', TextType::class, array('label' => 'Teléfono'))
                ->add('telefono2', TextType::class, array('label' => 'Teléfono 2'))
                ->add('celular', TextType::class, array('label' => 'Celular'))
                ->add('fileFoto', FileType::class, array('required' => 'false'))
                ->add('fileLogo', FileType::class, array('required' => 'false'))
                ->add('email', EmailType::class, array('label' => 'E-mail', 'disabled'=>'disabled'))
                ->add('pwdemail', TextType::class, array('label' => 'Password de cuenta de E-mail'
                    ));
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));

        $resolver
            ->setDefault('editando', false)
            ->setAllowedTypes('editando', array('boolean'));
        ;
    }
}
