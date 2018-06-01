<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/4/16
 * Time: 12:09 a.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="contacto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactoRepository")
 */
class Contacto
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idContacto;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Assert\NotBlank(message="Este campo es requerido.")
     *
     * @Assert\Email(
     *  message = "El e-mail '{{ value }}' no es válido.",
     *  checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $empresa;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\ManyToMany(targetEntity="ListaContacto")
     * @ORM\JoinTable(name="contacto_listacontacto",
     *      joinColumns={@ORM\JoinColumn(name="id_contacto", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_listacontacto", referencedColumnName="id")}
     *      )
     */
    private $listascontacto;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    protected $id_usuario;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;
    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->listascontacto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->listascontacto = array();
        $this->fechaCreacion = new \DateTime();
    }

    /**
     * Get idContacto
     *
     * @return integer 
     */
    public function getIdContacto()
    {
        return $this->idContacto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Contacto
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Contacto
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return Contacto
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Contacto
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Contacto
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Contacto
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
     * Add listascontacto
     *
     * @param \AppBundle\Entity\ListaContacto $listascontacto
     * @return Contacto
     */
    public function addListascontacto(\AppBundle\Entity\ListaContacto $listascontacto)
    {
        $this->listascontacto[] = $listascontacto;

        return $this;
    }

    /**
     * Remove listascontacto
     *
     * @param \AppBundle\Entity\ListaContacto $listascontacto
     */
    public function removeListascontacto(\AppBundle\Entity\ListaContacto $listascontacto)
    {
        $this->listascontacto->removeElement($listascontacto);
    }

    /**
     * Get listascontacto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListascontacto()
    {
        return $this->listascontacto;
    }

    /**
     * Set id_usuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return Prospecto
     */
    public function setIdUsuario(\AppBundle\Entity\Usuario $idUsuario)
    {
        $this->id_usuario = $idUsuario;

        return $this;
    }

    /**
     * Get id_usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
}
