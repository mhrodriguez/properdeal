<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use AppBundle\Entity\AsesorPermiso;

class AsesorPermisoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('altapropiedad', CheckboxType::class,
                array(
                    'label' => 'Alta de Propiedad',))
            ->add('editarpropiedad', CheckboxType::class,
                array('label' => 'Editar Propiedad',
                ))
            ->add('inactivarpropiedad', CheckboxType::class,
                array('label' => 'Activar/Inactivar Propiedad',
                ))
            ->add('destacarpropiedad', CheckboxType::class,
                array('label' => 'Destacar Propiedad',
                ))
         /*   ->add('notificaraltapropiedad', CheckboxType::class,
                array('label' => 'Notificar alta de Propiedad',
                ))
            ->add('duplicarprospectos', CheckboxType::class,
                array('label' => 'Duplicar Prospectos',
                ))
            ->add('publicarsolocondatospropietario', CheckboxType::class,
                array('label' => 'Publicar sólo con datos del propietario',
                ))*/
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AsesorPermiso'
        ));
    }
}
