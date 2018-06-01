<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/17/16
 * Time: 1:36 a.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="inmuebleactividad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InmuebleRepository")
 */
class InmuebleActividad
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInmuebleActividad;

    /**
     * @ORM\ManyToOne(targetEntity="Inmueble")
     * @ORM\JoinColumn(name="id_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_inmueble;

    /**
     * @ORM\Column(type="integer")
     */
    private $actividadcodigo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;


    public function __construct()
    {
        $this->fecha = new \DateTime();
    }

    /**
     * Get idInmuebleActividad
     *
     * @return integer 
     */
    public function getIdInmuebleActividad()
    {
        return $this->idInmuebleActividad;
    }

    /**
     * Set actividadcodigo
     *
     * @param integer $actividadcodigo
     * @return InmuebleActividad
     */
    public function setActividadcodigo($actividadcodigo)
    {
        $this->actividadcodigo = $actividadcodigo;

        return $this;
    }

    /**
     * Get actividadcodigo
     *
     * @return integer 
     */
    public function getActividadcodigo()
    {
        return $this->actividadcodigo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return InmuebleActividad
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
     * Set id_inmueble
     *
     * @param \AppBundle\Entity\Inmueble $idInmueble
     * @return InmuebleActividad
     */
    public function setIdInmueble(\AppBundle\Entity\Inmueble $idInmueble)
    {
        $this->id_inmueble = $idInmueble;

        return $this;
    }

    /**
     * Get id_inmueble
     *
     * @return \AppBundle\Entity\Inmueble 
     */
    public function getIdInmueble()
    {
        return $this->id_inmueble;
    }
}
