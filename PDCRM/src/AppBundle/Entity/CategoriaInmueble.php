<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 8:48 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="categoriainmueble")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaInmuebleRepository")
 */
class CategoriaInmueble
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCategoriaInmueble;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    function __construct($idCategoriaInmueble, $nombre) {
        $this->setIdCategoriaInmueble($idCategoriaInmueble);
        $this->setNombre($nombre);
    }

    /**
     * Get idCategoriaInmueble
     *
     * @return integer 
     */
    public function getIdCategoriaInmueble()
    {
        return $this->idCategoriaInmueble;
    }

    /**
     * Set idCategoriaInmueble
     *
     * @return CategoriaInmueble
     */
    public function setIdCategoriaInmueble($idCategoriaInmueble)
    {
        $this->idCategoriaInmueble = $idCategoriaInmueble;

        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CategoriaInmueble
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
     * @return CategoriaInmueble
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
