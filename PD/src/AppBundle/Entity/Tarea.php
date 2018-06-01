<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/20/16
 * Time: 10:25 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="tarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TareaRepository")
 */
class Tarea
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTarea;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    protected $id_usuario;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Accion")
     * @ORM\JoinColumn(name="id_accion", referencedColumnName="id", nullable=false)
     */
    protected $id_accion;

    /**
     * @ORM\ManyToOne(targetEntity="Prospecto")
     * @ORM\JoinColumn(name="id_prospecto", referencedColumnName="id", nullable=false)
     */
    protected $id_prospecto;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $propiedad;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fechaCreacion = new \DateTime();
        $this->indexSelectedAsesor = 0;
    }

    /**
     * Get idTarea
     *
     * @return integer 
     */
    public function getIdTarea()
    {
        return $this->idTarea;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Tarea
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
     * Set propiedad
     *
     * @param string $propiedad
     * @return Tarea
     */
    public function setPropiedad($propiedad)
    {
        $this->propiedad = $propiedad;

        return $this;
    }

    /**
     * Get propiedad
     *
     * @return string 
     */
    public function getPropiedad()
    {
        return $this->propiedad;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Tarea
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Tarea
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
     * @return Tarea
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
     * Set id_usuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return Tarea
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
     * Set id_accion
     *
     * @param \AppBundle\Entity\Accion $idAccion
     * @return Tarea
     */
    public function setIdAccion(\AppBundle\Entity\Accion $idAccion)
    {
        $this->id_accion = $idAccion;

        return $this;
    }

    /**
     * Get id_accion
     *
     * @return \AppBundle\Entity\Accion 
     */
    public function getIdAccion()
    {
        return $this->id_accion;
    }

    /**
     * Set id_prospecto
     *
     * @param \AppBundle\Entity\Prospecto $idProspecto
     * @return Tarea
     */
    public function setIdProspecto(\AppBundle\Entity\Prospecto $idProspecto)
    {
        $this->id_prospecto = $idProspecto;

        return $this;
    }

    /**
     * Get id_prospecto
     *
     * @return \AppBundle\Entity\Prospecto 
     */
    public function getIdProspecto()
    {
        return $this->id_prospecto;
    }

    /* HELPERS */
    private $indexSelectedAsesor;

    /**
     * @return mixed
     */
    public function getIndexSelectedAsesor()
    {
        return $this->indexSelectedAsesor;
    }

    /**
     * @param mixed $indexSelectedAsesor
     */
    public function setIndexSelectedAsesor($indexSelectedAsesor)
    {
        $this->indexSelectedAsesor = $indexSelectedAsesor;
    }


}
