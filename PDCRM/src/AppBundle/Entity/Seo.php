<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/18/16
 * Time: 5:38 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="seo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeoRepository")
 */
class Seo
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=false, nullable=true)
     *
     */
    private $titulo;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     *
     */
    private $keywords;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     *
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     *
     */
    private $mision;

    /**
     * @ORM\Column(type="string", length=50, unique=false, nullable=true)
     *
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, unique=false, nullable=true)
     *
     */
    private $fax;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     *
     */
    private $direccion;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     *
     */
    private $derechosautor;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
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
     * Set titulo
     *
     * @param string $titulo
     * @return Seo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Seo
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Seo
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
     * Set mision
     *
     * @param string $mision
     * @return Seo
     */
    public function setMision($mision)
    {
        $this->mision = $mision;

        return $this;
    }

    /**
     * Get mision
     *
     * @return string 
     */
    public function getMision()
    {
        return $this->mision;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Seo
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Seo
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Seo
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set derechosautor
     *
     * @param string $derechosautor
     * @return Seo
     */
    public function setDerechosautor($derechosautor)
    {
        $this->derechosautor = $derechosautor;

        return $this;
    }

    /**
     * Get derechosautor
     *
     * @return string 
     */
    public function getDerechosautor()
    {
        return $this->derechosautor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Seo
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
     * @return Seo
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
}
