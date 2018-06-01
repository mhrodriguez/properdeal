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
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SolicitudRepository")
 */
class Solicitud
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSolicitud;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="TipoInmueble")
     * @ORM\JoinColumn(name="id_tipo_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_tipo_inmueble;

    /**
     * @ORM\ManyToOne(targetEntity="OperacionInmueble")
     * @ORM\JoinColumn(name="id_operacion_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_operacion_inmueble;

    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id", nullable=false)
     */
    protected $id_estado;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $colonia;

    /**
     * @ORM\ManyToOne(targetEntity="Moneda")
     * @ORM\JoinColumn(name="id_moneda", referencedColumnName="id", nullable=false)
     */
    protected $id_moneda;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    private $fechabusqueda;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    protected $precio;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    protected $preciomax;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metrosconstruccion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metrosconstruccionmax;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metrosterreno;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $metrosterrenomax;

    /**
     * @ORM\ManyToMany(targetEntity="Caracteristica")
     * @ORM\JoinTable(name="solicitud_caracteristica",
     *      joinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_caracteristica", referencedColumnName="id")}
     *      )
     */
    private $caracteristicas;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;


    public function __construct()
    {
        $this->fechaCreacion = new \DateTime();
    }


    /**
     * Set id_usuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return Inmueble
     */
    public function setIdUsuario(\AppBundle\Entity\Usuario $idUsuario)
    {
        $this->id_usuario = $idUsuario;

        return $this;
    }

    /**
     * Get id_usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set id_tipo_inmueble
     *
     * @param \AppBundle\Entity\TipoInmueble $idTipoInmueble
     * @return Inmueble
     */
    public function setIdTipoInmueble(\AppBundle\Entity\TipoInmueble $idTipoInmueble)
    {
        $this->id_tipo_inmueble = $idTipoInmueble;

        return $this;
    }

    /**
     * Get id_tipo_inmueble
     *
     * @return \AppBundle\Entity\TipoInmueble
     */
    public function getIdTipoInmueble()
    {
        return $this->id_tipo_inmueble;
    }

    /**
     * Set id_operacion_inmueble
     *
     * @param \AppBundle\Entity\OperacionInmueble $idOperacionInmueble
     * @return Inmueble
     */
    public function setIdOperacionInmueble(\AppBundle\Entity\OperacionInmueble $idOperacionInmueble)
    {
        $this->id_operacion_inmueble = $idOperacionInmueble;

        return $this;
    }

    /**
     * Get id_operacion_inmueble
     *
     * @return \AppBundle\Entity\OperacionInmueble
     */
    public function getIdOperacionInmueble()
    {
        return $this->id_operacion_inmueble;
    }

    /**
     * Set id_estado
     *
     * @param \AppBundle\Entity\Estado $idEstado
     * @return Inmueble
     */
    public function setIdEstado(\AppBundle\Entity\Estado $idEstado)
    {
        $this->id_estado = $idEstado;

        return $this;
    }

    /**
     * Get id_estado
     *
     * @return \AppBundle\Entity\Estado
     */
    public function getIdEstado()
    {
        return $this->id_estado;
    }

    /**
     * Set id_municipio
     *
     * @param \AppBundle\Entity\Municipio $idMunicipio
     * @return Inmueble
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get id_municipio
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set id_colonia
     *
     * @param \AppBundle\Entity\Colonia $idColonia
     * @return Inmueble
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get id_colonia
     *
     * @return \AppBundle\Entity\Colonia
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Get idInmueble
     *
     * @return integer
     */
    public function getIdInmueble()
    {
        return $this->idInmueble;
    }

    /**
     * Set id_moneda
     *
     * @param \AppBundle\Entity\Moneda $idMoneda
     * @return Inmueble
     */
    public function setIdMoneda(\AppBundle\Entity\Moneda $idMoneda)
    {
        $this->id_moneda = $idMoneda;

        return $this;
    }

    /**
     * Get id_moneda
     *
     * @return \AppBundle\Entity\Moneda
     */
    public function getIdMoneda()
    {
        return $this->id_moneda;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Inmueble
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
     * Set activo
     *
     * @param boolean $activo
     * @return Inmueble
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
     * Set precio
     *
     * @param string $precio
     * @return Inmueble
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Inmueble
     */
    public function setPreciomax($precio)
    {
        $this->preciomax = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPreciomax()
    {
        return $this->preciomax;
    }

    /**
     * Set metrosconstruccion
     *
     * @param integer $metrosconstruccion
     * @return Inmueble
     */
    public function setMetrosconstruccion($metrosconstruccion)
    {
        $this->metrosconstruccion = $metrosconstruccion;

        return $this;
    }

    /**
     * Get metrosconstruccion
     *
     * @return integer
     */
    public function getMetrosconstruccion()
    {
        return $this->metrosconstruccion;
    }


    /**
     * Set metrosconstruccion
     *
     * @param integer $metrosconstruccion
     * @return Inmueble
     */
    public function setMetrosterrenomax($metrosterreno)
    {
        $this->metrosterrenomax = $metrosterreno;

        return $this;
    }

    /**
     * Get metrosconstruccion
     *
     * @return integer
     */
    public function getMetrosterrenomax()
    {
        return $this->metrosterrenomax;
    }

    /**
     * Set metrosterreno
     *
     * @param integer $metrosterreno
     * @return Inmueble
     */
    public function setMetrosterreno($metrosterreno)
    {
        $this->metrosterreno = $metrosterreno;

        return $this;
    }

    /**
     * Get metrosterreno
     *
     * @return integer
     */
    public function getMetrosterreno()
    {
        return $this->metrosterreno;
    }

    /**
     * Add caracteristicas
     *
     * @param \AppBundle\Entity\Caracteristica $caracteristicas
     * @return Inmueble
     */
    public function addCaracteristica(\AppBundle\Entity\Caracteristica $caracteristicas)
    {
        $this->caracteristicas[] = $caracteristicas;

        return $this;
    }

    /**
     * Remove caracteristicas
     *
     * @param \AppBundle\Entity\Caracteristica $caracteristicas
     */
    public function removeCaracteristica(\AppBundle\Entity\Caracteristica $caracteristicas)
    {
        $this->caracteristicas->removeElement($caracteristicas);
    }

    /**
     * Get caracteristicas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Get caracteristicas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;
    }
    

    /**
     * Get idSolicitud
     *
     * @return integer 
     */
    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }

    /**
     * Set metrosconstruccionmax
     *
     * @param integer $metrosconstruccionmax
     * @return Solicitud
     */
    public function setMetrosconstruccionmax($metrosconstruccionmax)
    {
        $this->metrosconstruccionmax = $metrosconstruccionmax;

        return $this;
    }

    /**
     * Get metrosconstruccionmax
     *
     * @return integer 
     */
    public function getMetrosconstruccionmax()
    {
        return $this->metrosconstruccionmax;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Solicitud
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Solicitud
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
     * Set fecha
     *
     * @param \DateTime $fechabusqueda
     *
     */
    public function setFechabusqueda($fechabusqueda)
    {
        $this->fechabusqueda = $fechabusqueda;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFechabusqueda()
    {
        return $this->fechabusqueda;
    }
}
