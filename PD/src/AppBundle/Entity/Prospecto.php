<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/18/16
 * Time: 6:45 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="prospecto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProspectoRepository")
 */
class Prospecto
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"list"})
     */
    private $idProspecto;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     * @Srz\Groups({"list"})
     */
    private $nombre;

    private $nombreCompleto;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     *
     * @Assert\Email(
     *  message = "El e-mail '{{ value }}' no es válido.",
     *  checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id", nullable=false)
     */
    protected $id_estado;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $telefonoMovil;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $presupuesto;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    protected $id_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="CanalCaptacion")
     * @ORM\JoinColumn(name="id_canal_captacion", referencedColumnName="id", nullable=false)
     */
    protected $id_canal_captacion;

    /**
     * @ORM\ManyToOne(targetEntity="EstatusAvance")
     * @ORM\JoinColumn(name="id_estatus_avance", referencedColumnName="id", nullable=false)
     */
    protected $id_estatus_avance;

    /**
     * @ORM\ManyToOne(targetEntity="TipoProspecto")
     * @ORM\JoinColumn(name="id_tipo_prospecto", referencedColumnName="id", nullable=false)
     */
    protected $id_tipo_prospecto;

    /**
     * @ORM\ManyToMany(targetEntity="Documento")
     * @ORM\JoinTable(name="prospecto_documento",
     *      joinColumns={@ORM\JoinColumn(name="id_prospecto", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_documento", referencedColumnName="id")}
     *      )
     */
    protected $documentos;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documentos = array();
        $this->fechaCreacion = new \DateTime();
        //$this->documentos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idProspecto
     *
     * @return integer 
     */
    public function getIdProspecto()
    {
        return $this->idProspecto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Prospecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        $this->nombreCompleto = $this->nombre . ' ' . $this->apellidos;

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
     * Get nombre
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Prospecto
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        $this->nombreCompleto = $this->nombre . ' ' . $this->apellidos;

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
     * @return Prospecto
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
     * Set direccion
     *
     * @param string $direccion
     * @return Prospecto
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
     * Set ciudad
     *
     * @param string $ciudad
     * @return Prospecto
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Prospecto
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
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     * @return Prospecto
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;

        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set presupuesto
     *
     * @param \numeric $presupuesto
     * @return Prospecto
     */
    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return \numeric 
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Prospecto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Prospecto
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
     * @return Prospecto
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
     * Set id_estado
     *
     * @param \AppBundle\Entity\Estado $idEstado
     * @return Prospecto
     */
    public function setIdEstado(\AppBundle\Entity\Estado $idEstado)
    {
        $this->id_estado = $idEstado;

        return $this;
    }

    /**
     * Get id_estado
     *
     * @return \AppBundle\Entity\Estado 
     */
    public function getIdEstado()
    {
        return $this->id_estado;
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

    /**
     * Set id_canal_captacion
     *
     * @param \AppBundle\Entity\CanalCaptacion $idCanalCaptacion
     * @return Prospecto
     */
    public function setIdCanalCaptacion(\AppBundle\Entity\CanalCaptacion $idCanalCaptacion)
    {
        $this->id_canal_captacion = $idCanalCaptacion;

        return $this;
    }

    /**
     * Get id_canal_captacion
     *
     * @return \AppBundle\Entity\CanalCaptacion 
     */
    public function getIdCanalCaptacion()
    {
        return $this->id_canal_captacion;
    }

    /**
     * Set id_estatus_avance
     *
     * @param \AppBundle\Entity\EstatusAvance $idEstatusAvance
     * @return Prospecto
     */
    public function setIdEstatusAvance(\AppBundle\Entity\EstatusAvance $idEstatusAvance)
    {
        $this->id_estatus_avance = $idEstatusAvance;

        return $this;
    }

    /**
     * Get id_estatus_avance
     *
     * @return \AppBundle\Entity\EstatusAvance 
     */
    public function getIdEstatusAvance()
    {
        return $this->id_estatus_avance;
    }

    /**
     * Set id_tipo_prospecto
     *
     * @param \AppBundle\Entity\TipoProspecto $idTipoProspecto
     * @return Prospecto
     */
    public function setIdTipoProspecto(\AppBundle\Entity\TipoProspecto $idTipoProspecto)
    {
        $this->id_tipo_prospecto = $idTipoProspecto;

        return $this;
    }

    /**
     * Get id_tipo_prospecto
     *
     * @return \AppBundle\Entity\TipoProspecto 
     */
    public function getIdTipoProspecto()
    {
        return $this->id_tipo_prospecto;
    }

    /**
     * Add documentos
     *
     * @param \AppBundle\Entity\Documento $documentos
     * @return Prospecto
     */
    public function addDocumento(\AppBundle\Entity\Documento $documentos)
    {
        $this->documentos[] = $documentos;

        return $this;
    }

    /**
     * Remove documentos
     *
     * @param \AppBundle\Entity\Documento $documentos
     */
    public function removeDocumento(\AppBundle\Entity\Documento $documentos)
    {
        $this->documentos->removeElement($documentos);
    }

    /**
     * Get documentos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocumentos()
    {
        return $this->documentos;
    }
}
