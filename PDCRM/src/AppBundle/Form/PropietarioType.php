<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class PropietarioType extends AbstractType
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
            ->add('telefono')
            ->add('telefonomovil', TextType::class, array('label' =>
                'Celular'))
            ->add('oficina')
            ->add('email', TextType::class, array('label' =>
                'E-mail'))
            ->add('horariovisita', TextType::class, array('label' =>
                'Horario de visita'))
            ->add('comision')
            ->add('enviarmail', CheckboxType::class, array('label' =>
                'Enviar e-mail'))
            ->add('mostrardatos', CheckboxType::class, array('label' =>
                ' Sí mostrar Datos de Propietario a asesores internos en Vista de Impresión'))
            ->add('canalCaptacion', ChoiceType::class,
                array(
                    'label' => 'Canal de Captación',
                    'choices' => $options['canalescaptacion'],
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
            'data_class' => 'AppBundle\Entity\Propietario'
        ));

        $resolver
            ->setDefault('canalescaptacion', null)
            ->setRequired('canalescaptacion')
            ->setAllowedTypes('canalescaptacion', array('array'))
        ;
    }
}
