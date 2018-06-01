<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 7:18 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="operacioninmueble")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OperacionInmuebleRepository")
 */
class OperacionInmueble
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"list"})
     */
    private $idOperacionInmueble;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Srz\Groups({"list"})
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idOperacionInmueble
     *
     * @return integer 
     */
    public function getIdOperacionInmueble()
    {
        return $this->idOperacionInmueble;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return OperacionInmueble
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
     * @return OperacionInmueble
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
