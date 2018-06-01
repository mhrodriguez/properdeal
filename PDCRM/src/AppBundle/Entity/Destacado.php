<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/20/16
 * Time: 10:27 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="destacado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccesorioRepository")
 */
class Destacado
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Inmueble")
     * @ORM\JoinColumn(name="id_inmueble", referencedColumnName="id", nullable=false)
     */
    private $inmueble;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $descripcion;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Destacado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Destacado
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
     * Set inmueble
     *
     * @param \AppBundle\Entity\Inmueble $inmueble
     * @return Destacado
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Destacado
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
}
