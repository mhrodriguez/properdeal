<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Propietario extends \AppBundle\Entity\Propietario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'apellidos', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'telefonomovil', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'oficina', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'horariovisita', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'comision', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'enviarmail', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'mostrardatos', 'canalCaptacion', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'activo');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'nombre', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'apellidos', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'telefonomovil', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'oficina', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'horariovisita', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'comision', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'enviarmail', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'mostrardatos', 'canalCaptacion', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\Propietario' . "\0" . 'activo');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Propietario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', array($apellidos));

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', array());

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonomovil($telefonomovil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonomovil', array($telefonomovil));

        return parent::setTelefonomovil($telefonomovil);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonomovil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonomovil', array());

        return parent::getTelefonomovil();
    }

    /**
     * {@inheritDoc}
     */
    public function setOficina($oficina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOficina', array($oficina));

        return parent::setOficina($oficina);
    }

    /**
     * {@inheritDoc}
     */
    public function getOficina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOficina', array());

        return parent::getOficina();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setHorariovisita($horariovisita)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHorariovisita', array($horariovisita));

        return parent::setHorariovisita($horariovisita);
    }

    /**
     * {@inheritDoc}
     */
    public function getHorariovisita()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHorariovisita', array());

        return parent::getHorariovisita();
    }

    /**
     * {@inheritDoc}
     */
    public function setComision($comision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComision', array($comision));

        return parent::setComision($comision);
    }

    /**
     * {@inheritDoc}
     */
    public function getComision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComision', array());

        return parent::getComision();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnviarmail($enviarmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnviarmail', array($enviarmail));

        return parent::setEnviarmail($enviarmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnviarmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnviarmail', array());

        return parent::getEnviarmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMostrardatos($mostrardatos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMostrardatos', array($mostrardatos));

        return parent::setMostrardatos($mostrardatos);
    }

    /**
     * {@inheritDoc}
     */
    public function getMostrardatos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMostrardatos', array());

        return parent::getMostrardatos();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', array($activo));

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', array());

        return parent::getActivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanalCaptacion(\AppBundle\Entity\CanalCaptacion $canalCaptacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanalCaptacion', array($canalCaptacion));

        return parent::setCanalCaptacion($canalCaptacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanalCaptacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanalCaptacion', array());

        return parent::getCanalCaptacion();
    }

}
