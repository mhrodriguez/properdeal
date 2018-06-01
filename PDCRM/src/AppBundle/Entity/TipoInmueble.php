<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 6:43 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="tipoinmueble")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoInmuebleRepository")
 */
class TipoInmueble
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTipoInmueble;

    /**
     * @ORM\ManyToOne(targetEntity="CategoriaInmueble")
     * @ORM\JoinColumn(name="id_categoria_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_categoria_inmueble;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    function __construct($idTipoInmueble, $nombre) {
        $this->setIdTipoInmueble($idTipoInmueble);
        $this->setNombre($nombre);
    }

    /**
     * Get idTipoInmueble
     *
     * @return integer 
     */
    public function getIdTipoInmueble()
    {
        return $this->idTipoInmueble;
    }

    /**
     * Set activo
     *
     * @return TipoInmueble
     */
    public function setIdTipoInmueble($idTipoInmueble)
    {
        $this->idTipoInmueble = $idTipoInmueble;

        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TipoInmueble
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
     * @return TipoInmueble
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
     * Set id_categoria_inmueble
     *
     * @param \AppBundle\Entity\CategoriaInmueble $idCategoriaInmueble
     * @return TipoInmueble
     */
    public function setIdCategoriaInmueble(\AppBundle\Entity\CategoriaInmueble $idCategoriaInmueble)
    {
        $this->id_categoria_inmueble = $idCategoriaInmueble;

        return $this;
    }

    /**
     * Get id_categoria_inmueble
     *
     * @return \AppBundle\Entity\CategoriaInmueble 
     */
    public function getIdCategoriaInmueble()
    {
        return $this->id_categoria_inmueble;
    }
}
