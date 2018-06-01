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
 * @ORM\Table(name="rotulo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RotuloRepository")
 */
class Rotulo
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
     */
    private $asesor;

    /**
     * @ORM\ManyToOne(targetEntity="RotuloAccion")
     * @ORM\JoinColumn(name="id_rotulo_accion", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $accion;


    /**
     * @ORM\ManyToMany(targetEntity="RotuloElemento")
     * @ORM\JoinTable(name="rotulo_elemento",
     *      joinColumns={@ORM\JoinColumn(name="id_rotulo", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_rotulo_elemento", referencedColumnName="id")}
     *      )
     */
    private $elementos;

    /**
     * @ORM\ManyToOne(targetEntity="RotuloTamano")
     * @ORM\JoinColumn(name="id_rotulo_tamano", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $tamano;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Inmueble")
     * @ORM\JoinColumn(name="id_inmueble", referencedColumnName="id", nullable=false)
     */
    private $inmueble;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->elementos = new \Doctrine\Common\Collections\ArrayCollection();

    }

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
     * @return Rotulo
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
     * Set activo
     *
     * @param boolean $activo
     * @return Rotulo
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
     * @return Rotulo
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
     * Set accion
     *
     * @param \AppBundle\Entity\RotuloAccion $accion
     * @return Rotulo
     */
    public function setAccion(\AppBundle\Entity\RotuloAccion $accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return \AppBundle\Entity\RotuloAccion 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Add elementos
     *
     * @param \AppBundle\Entity\RotuloElemento $elementos
     * @return Rotulo
     */
    public function addElemento(\AppBundle\Entity\RotuloElemento $elementos)
    {
        $this->elementos[] = $elementos;

        return $this;
    }

    /**
     * Remove elementos
     *
     * @param \AppBundle\Entity\RotuloElemento $elementos
     */
    public function removeElemento(\AppBundle\Entity\RotuloElemento $elementos)
    {
        $this->elementos->removeElement($elementos);
    }

    /**
     * Get elementos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getElementos()
    {
        return $this->elementos;
    }

    /**
     * Set tamano
     *
     * @param \AppBundle\Entity\RotuloTamano $tamano
     * @return Rotulo
     */
    public function setTamano(\AppBundle\Entity\RotuloTamano $tamano)
    {
        $this->tamano = $tamano;

        return $this;
    }

    /**
     * Get tamano
     *
     * @return \AppBundle\Entity\RotuloTamano 
     */
    public function getTamano()
    {
        return $this->tamano;
    }

    /**
     * Set inmueble
     *
     * @param \AppBundle\Entity\Inmueble $inmueble
     * @return Rotulo
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
     * Set asesor
     *
     * @param \AppBundle\Entity\Usuario $asesor
     * @return Rotulo
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
