<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/4/16
 * Time: 3:42 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="enlace")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnlaceRepository")
 */
class Enlace
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEnlace;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $url;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idEnlace
     *
     * @return integer
     */
    public function getIdEnlace()
    {
        return $this->idEnlace;
    }

    /**
     * Set idEnlace
     *
     * @return Enlace
     */
    public function setIdEnlace($idEnlace)
    {
        $this->idEnlace = $idEnlace;

        return $this;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Enlace
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
     * Set url
     *
     * @param string $url
     * @return Enlace
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Enlace
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
