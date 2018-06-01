<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/18/16
 * Time: 7:39 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="canalcaptacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CanalCaptacionRepository")
 */
class CanalCaptacion
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCanalCaptacion;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idCanalCaptacion
     *
     * @return integer 
     */
    public function getIdCanalCaptacion()
    {
        return $this->idCanalCaptacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CanalCaptacion
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
     * @return CanalCaptacion
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
