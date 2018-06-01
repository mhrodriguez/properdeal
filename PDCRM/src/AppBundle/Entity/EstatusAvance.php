<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/18/16
 * Time: 9:20 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="estatusavance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstatusAvanceRepository")
 */
class EstatusAvance
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEstatusAvance;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $porcentaje;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idEstatusAvance
     *
     * @return integer 
     */
    public function getIdEstatusAvance()
    {
        return $this->idEstatusAvance;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return EstatusAvance
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return EstatusAvance
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
     * Set porcentaje
     *
     * @param integer $porcentaje
     * @return EstatusAvance
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return integer 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return EstatusAvance
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
}
