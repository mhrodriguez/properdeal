<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/23/16
 * Time: 8:45 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="caracteristica")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaracteristicaRepository")
 */
class Caracteristica
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCaracteristica;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idCaracteristica
     *
     * @return integer 
     */
    public function getIdCaracteristica()
    {
        return $this->idCaracteristica;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Caracteristica
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
     * @return Caracteristica
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
