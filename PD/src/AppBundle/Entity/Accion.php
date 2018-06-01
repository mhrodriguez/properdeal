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
 * @ORM\Table(name="accion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccionRepository")
 */
class Accion
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAccion;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idAccion
     *
     * @return integer 
     */
    public function getIdAccion()
    {
        return $this->idAccion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Accion
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
     * @return Accion
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
