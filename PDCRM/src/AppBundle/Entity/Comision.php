<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/8/16
 * Time: 9:42 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="comision")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComisionRepository")
 */
class Comision
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_asesor", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $asesor;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $comparte;

    /**
     * @ORM\ManyToOne(targetEntity="Inmueble")
     * @ORM\JoinColumn(name="id_inmueble", referencedColumnName="id", nullable=false)
     */
    private $inmueble;

    /**
     * @ORM\ManyToOne(targetEntity="OperacionInmueble")
     * @ORM\JoinColumn(name="id_operacion_inmueble", referencedColumnName="id", nullable=false)
     */
    private $operacioninmueble;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cliente;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    protected $monto;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $propiedadexterna;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    protected $comision;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    protected $comisionoficina;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    protected $comisionasesor;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Comision
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Comision
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set comparte
     *
     * @param string $comparte
     * @return Comision
     */
    public function setComparte($comparte)
    {
        $this->comparte = $comparte;

        return $this;
    }

    /**
     * Get comparte
     *
     * @return string 
     */
    public function getComparte()
    {
        return $this->comparte;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Comision
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Comision
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set propiedadexterna
     *
     * @param string $propiedadexterna
     * @return Comision
     */
    public function setPropiedadexterna($propiedadexterna)
    {
        $this->propiedadexterna = $propiedadexterna;

        return $this;
    }

    /**
     * Get propiedadexterna
     *
     * @return string 
     */
    public function getPropiedadexterna()
    {
        return $this->propiedadexterna;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Comision
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set comisionoficina
     *
     * @param string $comisionoficina
     * @return Comision
     */
    public function setComisionoficina($comisionoficina)
    {
        $this->comisionoficina = $comisionoficina;

        return $this;
    }

    /**
     * Get comisionoficina
     *
     * @return string 
     */
    public function getComisionoficina()
    {
        return $this->comisionoficina;
    }

    /**
     * Set comisionasesor
     *
     * @param string $comisionasesor
     * @return Comision
     */
    public function setComisionasesor($comisionasesor)
    {
        $this->comisionasesor = $comisionasesor;

        return $this;
    }

    /**
     * Get comisionasesor
     *
     * @return string 
     */
    public function getComisionasesor()
    {
        return $this->comisionasesor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Comision
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     * @return Comision
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set inmueble
     *
     * @param \AppBundle\Entity\Inmueble $inmueble
     * @return Comision
     */
    public function setInmueble(\AppBundle\Entity\Inmueble $inmueble)
    {
        $this->inmueble = $inmueble;

        return $this;
    }

    /**
     * Get inmueble
     *
     * @return \AppBundle\Entity\Inmueble 
     */
    public function getInmueble()
    {
        return $this->inmueble;
    }

    /**
     * Set operacioninmueble
     *
     * @param \AppBundle\Entity\OperacionInmueble $operacioninmueble
     * @return Comision
     */
    public function setOperacioninmueble(\AppBundle\Entity\OperacionInmueble $operacioninmueble)
    {
        $this->operacioninmueble = $operacioninmueble;

        return $this;
    }

    /**
     * Get operacioninmueble
     *
     * @return \AppBundle\Entity\OperacionInmueble 
     */
    public function getOperacioninmueble()
    {
        return $this->operacioninmueble;
    }

    /**
     * Set asesor
     *
     * @param \AppBundle\Entity\Usuario $asesor
     * @return Comision
     */
    public function setAsesor(\AppBundle\Entity\Usuario $asesor)
    {
        $this->asesor = $asesor;

        return $this;
    }

    /**
     * Get asesor
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getAsesor()
    {
        return $this->asesor;
    }
}
