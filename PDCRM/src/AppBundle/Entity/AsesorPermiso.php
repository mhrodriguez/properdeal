<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/18/16
 * Time: 6:32 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="asesorpermiso")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsesorPermisoRepository")
 */
class AsesorPermiso
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="altapropiedad", type="boolean", options={"default" = 1})
     */
    private $altapropiedad;

    /**
     * @ORM\Column(name="editarpropiedad", type="boolean", options={"default" = 1})
     */
    private $editarpropiedad;

    /**
     * @ORM\Column(name="inactivarpropiedad", type="boolean", options={"default" = 1})
     */
    private $inactivarpropiedad;

    /**
     * @ORM\Column(name="eliminarpropiedad", type="boolean", options={"default" = 1})
     */
    private $eliminarpropiedad;

    /**
     * @ORM\Column(name="notificaraltapropiedad", type="boolean", options={"default" = 1})
     */
    private $notificaraltapropiedad;

    /**
     * @ORM\Column(name="duplicarprospectos", type="boolean", options={"default" = 1})
     */
    private $duplicarprospectos;

    /**
     * @ORM\Column(name="publicarsolocondatospropietario", type="boolean", options={"default" = 1})
     */
    private $publicarsolocondatospropietario;

    /**
     * @ORM\Column(name="destacarpropiedad", type="boolean", options={"default" = 1})
     */
    private $destacarpropiedad;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     * @ORM\OrderBy({"nombre" = "ASC"})
     */
    private $usuario;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set altapropiedad
     *
     * @param boolean $altapropiedad
     * @return AsesorPermiso
     */
    public function setAltapropiedad($altapropiedad)
    {
        $this->altapropiedad = $altapropiedad;

        return $this;
    }

    /**
     * Get altapropiedad
     *
     * @return boolean 
     */
    public function getAltapropiedad()
    {
        return $this->altapropiedad;
    }

    /**
     * Set editarpropiedad
     *
     * @param boolean $editarpropiedad
     * @return AsesorPermiso
     */
    public function setEditarpropiedad($editarpropiedad)
    {
        $this->editarpropiedad = $editarpropiedad;

        return $this;
    }

    /**
     * Get editarpropiedad
     *
     * @return boolean 
     */
    public function getEditarpropiedad()
    {
        return $this->editarpropiedad;
    }

    /**
     * Set inactivarpropiedad
     *
     * @param boolean $inactivarpropiedad
     * @return AsesorPermiso
     */
    public function setInactivarpropiedad($inactivarpropiedad)
    {
        $this->inactivarpropiedad = $inactivarpropiedad;

        return $this;
    }

    /**
     * Get inactivarpropiedad
     *
     * @return boolean 
     */
    public function getInactivarpropiedad()
    {
        return $this->inactivarpropiedad;
    }

    /**
     * Set eliminarpropiedad
     *
     * @param boolean $eliminarpropiedad
     * @return AsesorPermiso
     */
    public function setEliminarpropiedad($eliminarpropiedad)
    {
        $this->eliminarpropiedad = $eliminarpropiedad;

        return $this;
    }

    /**
     * Get eliminarpropiedad
     *
     * @return boolean 
     */
    public function getEliminarpropiedad()
    {
        return $this->eliminarpropiedad;
    }

    /**
     * Set notificaraltapropiedad
     *
     * @param boolean $notificaraltapropiedad
     * @return AsesorPermiso
     */
    public function setNotificaraltapropiedad($notificaraltapropiedad)
    {
        $this->notificaraltapropiedad = $notificaraltapropiedad;

        return $this;
    }

    /**
     * Get notificaraltapropiedad
     *
     * @return boolean 
     */
    public function getNotificaraltapropiedad()
    {
        return $this->notificaraltapropiedad;
    }

    /**
     * Set duplicarprospectos
     *
     * @param boolean $duplicarprospectos
     * @return AsesorPermiso
     */
    public function setDuplicarprospectos($duplicarprospectos)
    {
        $this->duplicarprospectos = $duplicarprospectos;

        return $this;
    }

    /**
     * Get duplicarprospectos
     *
     * @return boolean 
     */
    public function getDuplicarprospectos()
    {
        return $this->duplicarprospectos;
    }

    /**
     * Set publicarsolocondatospropietario
     *
     * @param boolean $publicarsolocondatospropietario
     * @return AsesorPermiso
     */
    public function setPublicarsolocondatospropietario($publicarsolocondatospropietario)
    {
        $this->publicarsolocondatospropietario = $publicarsolocondatospropietario;

        return $this;
    }

    /**
     * Get publicarsolocondatospropietario
     *
     * @return boolean 
     */
    public function getPublicarsolocondatospropietario()
    {
        return $this->publicarsolocondatospropietario;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return AsesorPermiso
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
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     * @return AsesorPermiso
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set destacarpropiedad
     *
     * @param boolean $destacarpropiedad
     * @return AsesorPermiso
     */
    public function setDestacarpropiedad($destacarpropiedad)
    {
        $this->destacarpropiedad = $destacarpropiedad;

        return $this;
    }

    /**
     * Get destacarpropiedad
     *
     * @return boolean 
     */
    public function getDestacarpropiedad()
    {
        return $this->destacarpropiedad;
    }
}
