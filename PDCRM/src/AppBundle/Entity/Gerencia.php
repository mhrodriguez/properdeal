<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/17/16
 * Time: 11:08 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="gerencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GerenciaRepository")
 */
class Gerencia
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $gerente;

    /**
     * @ORM\Column(type="string", length=50, unique=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $gerencia;

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
     * Set gerente
     *
     * @param string $gerente
     * @return Gerencia
     */
    public function setGerente($gerente)
    {
        $this->gerente = $gerente;

        return $this;
    }

    /**
     * Get gerente
     *
     * @return string 
     */
    public function getGerente()
    {
        return $this->gerente;
    }

    /**
     * Set gerencia
     *
     * @param string $gerencia
     * @return Gerencia
     */
    public function setGerencia($gerencia)
    {
        $this->gerencia = $gerencia;

        return $this;
    }

    /**
     * Get gerencia
     *
     * @return string 
     */
    public function getGerencia()
    {
        return $this->gerencia;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Gerencia
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
     * @return Gerencia
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
