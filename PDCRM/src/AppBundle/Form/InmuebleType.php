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

class InmuebleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $builder
            ->add('oficina')
            //->add('legacyid', IntegerType::class, array('label' => 'ID'))
            ->add('telefono')
            ->add('nombreid', TextType::class, array('label' => 'Nombre identificación'))
            ->add('id_usuario', ChoiceType::class,
                array(
                    'label' => 'Asesor',
                    'choices' => $options['usuarios'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre'
                ))
            ->add('id_tipo_inmueble', ChoiceType::class,
                array(
                    'label' => 'Inmueble',
                    'choices' => $options['tiposInmueble'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'group_by' => function($tipoInmueble, $key, $index) {
                        return $tipoInmueble->getIdCategoriaInmueble()->getNombre();
                    },
                ))
            ->add('id_operacion_inmueble', ChoiceType::class,
                array(
                    'label' => 'Transacción',
                    'choices' => $options['operacionesInmueble'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                    'attr' => array('onchange' => 'onChangeOperacion()')
                ))
                ->add('id_zona', ChoiceType::class,
                    array(
                        'label' => 'Zona',
                        'choices' => $options['zonas'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre',
                    )
                )
            ->add('id_municipio', ChoiceType::class,
                    array(
                        'label' => 'Ciudad',
                        'choices' => $options['municipios'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre'
                    )
                )
            ->add('colonia')
            ->add('calle')
            ->add('numero', TextType::class, array('label' => 'Número Exterior'))
            ->add('numeroint', TextType::class, array('label' => 'Número Interior'))
            ->add('entrecalles_primera', TextType::class, array('label' => 'Entre calles (Primera calle)'))
            ->add('entrecalles_segunda', TextType::class, array('label' => 'Segunda calle'))
            ->add('id_estado', ChoiceType::class,
                array(
                    'label' => 'Estado',
                    'choices' => $options['estados'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre'
                )
            )
            ->add('id_moneda', ChoiceType::class,
                    array(
                        'label' => 'Moneda',
                        'choices' => $options['monedas'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre'
                    )
                )
            ->add('cp', TextType::class, array('label' => 'C.P.'))
            ->add('plantas', IntegerType::class, array( 'attr' => array('min' => '0') ))
            ->add('recamaras', IntegerType::class, array( 'attr' => array('min' => '0') ))
            ->add('precio', NumberType::class, array('label' => '($) Precio'))
            //->add('preciodesde', NumberType::class, array('label' => '($) Precio de Renta desde'))
            ->add('preciohasta', NumberType::class, array('label' => '($) Precio de Renta hasta'))
            ->add('cuotamantenimiento', NumberType::class, array('label' => '($) Cuota de Mantenimiento'))
            ->add('metrosconstruccion', NumberType::class, array('label' => 'M2 de Construcción', 'attr' => array('min' => '0')))
            ->add('metrosterreno', NumberType::class, array('label' => 'M2 de Terreno', 'attr' => array('min' => '0')))
            ->add('metrosfrente', NumberType::class, array('label' => 'M2 de frente', 'attr' => array('min' => '0')))
            ->add('metrosfondo', NumberType::class, array('label' => 'M2 de fondo', 'attr' => array('min' => '0')))
            ->add('metrosjardin', NumberType::class, array('label' => 'M2 de jardín', 'attr' => array('min' => '0')))
            ->add('metrosterraza', NumberType::class, array('label' => 'M2 de terraza/balcón', 'attr' => array('min' => '0')))
            ->add('banos', IntegerType::class, array('label' => 'Baños', 'attr' => array('min' => '0')))
            ->add('mediobanos', IntegerType::class, array('label' => 'Medios Baños', 'attr' => array('min' => '0')))
            ->add('espacioautos', IntegerType::class, array('label' => 'Estacionamientos', 'attr' => array('min' => '0')))
            ->add('espaciovisitas', IntegerType::class, array('label' => 'Estacionamiento para visitas', 'attr' => array('min' => '0')))
            ->add('antiguedad', TextType::class, array('label' => 'Antigüedad'))
            ->add('descripcion', TextAreaType::class,
                array('label' => 'Descripción', 'attr' => array('class' => 'materialize-textarea')))
            ->add('restricciones', TextAreaType::class,
                    array('label' => 'Restricciones', 'attr' => array('class' => 'materialize-textarea')))
            ->add('caracteristicas', ChoiceType::class,
                array(
                    'label' => 'Caracteristicas',
                    'required' => false,
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['caracteristicas'],
                    'choices_as_values' => true,
                    'choice_label' => 'nombre',
                ))

            ->add('latlng', TextType::class, array(
                'attr' => array('hidden' => 'true')
            ))
            ->add('destacado', CheckboxType::class,
                array(
            ))
            ->add('comision', NumberType::class, array('label' => 'Comisión', 'attr' => array('min' => '0')))
            ->add('porcentajecompartir', IntegerType::class, array('label' => 'Porcentaje a compartir (%)', 'attr' => array('min' => '0')))
            ->add('nombreedificio', TextType::class, array('label' => 'Nombre del edificio'))
            ->add('nombreplaza', TextType::class, array('label' => 'Nombre de la plaza'))
            ->add('id_tipoterreno', ChoiceType::class,
                    array(
                        'label' => 'Tipo de Terreno',
                        'choices' => $options['tiposterreno'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre',
                    )
                )
            ->add('id_instalacionelectrica', ChoiceType::class,
                    array(
                        'label' => 'Instalación eléctrica',
                        'choices' => $options['instalacioneselectrica'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre',
                    )
                )
           ->add('id_cuartoservicio', ChoiceType::class,
                    array(
                        'label' => 'Cuarto de Servicio',
                        'choices' => $options['cuartosservicio'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre',
                    )
                )
           ->add('id_tipoclima', ChoiceType::class,
                    array(
                        'label' => 'Tipo de Clima',
                        'choices' => $options['tiposclima'],
                        'choices_as_values' => true,
                        'choice_label' => 'nombre',
                    )
                )
            ->add('activo', CheckboxType::class,
                    array(
                    ))
            ->add('privado', CheckboxType::class,
                    array('label' => 'Propiedad privada (solo uso interno)'
                    ))
            ->add('cerrado', CheckboxType::class,
                    array('label' => 'Contrato Cerrado'
                    ))
            ->add('aireacondicionado', CheckboxType::class,
                    array('label' => 'Aire acondicionado'
                    ))
            ->add('publicarmapa', CheckboxType::class,
                    array('label' => 'Publicar Mapa'
                    ))
            ->add('youtube', TextAreaType::class, array('label' => 'Video de YouTube', 'attr' => array('class' => 'materialize-textarea')))

            ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inmueble'
        ));

        $resolver
            ->setDefault('usuarios', null)
            ->setRequired('usuarios')
            ->setAllowedTypes('usuarios', array('array'))
        ;

        $resolver
            ->setDefault('estados', null)
            ->setRequired('estados')
            ->setAllowedTypes('estados', array('array'))
        ;

        $resolver
            ->setDefault('municipios', null)
            ->setRequired('municipios')
            ->setAllowedTypes('municipios', array('array'))
        ;

        $resolver
            ->setDefault('tiposInmueble', null)
            ->setRequired('tiposInmueble')
            ->setAllowedTypes('tiposInmueble', array('array'))
        ;

        $resolver
            ->setDefault('operacionesInmueble', null)
            ->setRequired('operacionesInmueble')
            ->setAllowedTypes('operacionesInmueble', array('array'))
        ;

        $resolver
            ->setDefault('zonas', null)
            ->setRequired('zonas')
            ->setAllowedTypes('zonas', array('array'))
        ;

        $resolver
            ->setDefault('caracteristicas', null)
            ->setRequired('caracteristicas')
            ->setAllowedTypes('caracteristicas', array('array'))
        ;

        $resolver
            ->setDefault('monedas', null)
            ->setRequired('monedas')
            ->setAllowedTypes('monedas', array('array'))
        ;

        $resolver
            ->setDefault('tiposterreno', null)
            ->setRequired('tiposterreno')
            ->setAllowedTypes('tiposterreno', array('array'))
        ;

        $resolver
            ->setDefault('instalacioneselectrica', null)
            ->setRequired('instalacioneselectrica')
            ->setAllowedTypes('instalacioneselectrica', array('array'))
        ;

        $resolver
            ->setDefault('cuartosservicio', null)
            ->setRequired('cuartosservicio')
            ->setAllowedTypes('cuartosservicio', array('array'))
        ;

        $resolver
            ->setDefault('tiposclima', null)
            ->setRequired('tiposclima')
            ->setAllowedTypes('tiposclima', array('array'))
        ;

    }
}
