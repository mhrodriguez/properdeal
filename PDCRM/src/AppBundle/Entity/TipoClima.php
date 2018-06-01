<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/18/16
 * Time: 7:31 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="tipoclima")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoClimaRepository")
 */
class TipoClima
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idTipoClima;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idTipoClima
     *
     * @return integer
     */
    public function getIdTipoClima()
    {
        return $this->idTipoClima;
    }

    /**
     * Set idTipoClima
     *
     * @return TipoClima
     */
    public function setIdTipoClima($idTipoClima)
    {
        $this->idTipoClima = $idTipoClima;

        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TipoClima
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
     * @return TipoClima
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
