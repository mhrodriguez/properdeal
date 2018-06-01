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
 * @ORM\Table(name="propietario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PropietarioRepository")
 */
class Propietario
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $telefonomovil;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $oficina;

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
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $horariovisita;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $comision;

    /**
     * @ORM\Column(name="enviarmail", type="boolean", options={"default" = 0})
     */
    private $enviarmail;

    /**
     * @ORM\Column(name="mostrardatos", type="boolean", options={"default" = 0})
     */
    private $mostrardatos;

  /**
     * @ORM\ManyToOne(targetEntity="CanalCaptacion")
     * @ORM\JoinColumn(name="id_canal_captacion", referencedColumnName="id", nullable=false)
     */
    protected $canalCaptacion;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fecha = new \DateTime();
    }

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
     * Set nombre
     *
     * @param string $nombre
     * @return Propietario
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
     * @return Propietario
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
     * Set telefono
     *
     * @param string $telefono
     * @return Propietario
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
     * @return Propietario
     */
    public function setTelefonomovil($telefonomovil)
    {
        $this->telefonomovil = $telefonomovil;

        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonomovil()
    {
        return $this->telefonomovil;
    }

    /**
     * Set oficina
     *
     * @param string $oficina
     * @return Propietario
     */
    public function setOficina($oficina)
    {
        $this->oficina = $oficina;

        return $this;
    }

    /**
     * Get oficina
     *
     * @return string 
     */
    public function getOficina()
    {
        return $this->oficina;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Propietario
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
     * Set horariovisita
     *
     * @param string $horariovisita
     * @return Propietario
     */
    public function setHorariovisita($horariovisita)
    {
        $this->horariovisita = $horariovisita;

        return $this;
    }

    /**
     * Get horariovisita
     *
     * @return string 
     */
    public function getHorariovisita()
    {
        return $this->horariovisita;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Propietario
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set enviarmail
     *
     * @param boolean $enviarmail
     * @return Propietario
     */
    public function setEnviarmail($enviarmail)
    {
        $this->enviarmail = $enviarmail;

        return $this;
    }

    /**
     * Get enviarmail
     *
     * @return boolean 
     */
    public function getEnviarmail()
    {
        return $this->enviarmail;
    }

    /**
     * Set mostrardatos
     *
     * @param boolean $mostrardatos
     * @return Propietario
     */
    public function setMostrardatos($mostrardatos)
    {
        $this->mostrardatos = $mostrardatos;

        return $this;
    }

    /**
     * Get mostrardatos
     *
     * @return boolean 
     */
    public function getMostrardatos()
    {
        return $this->mostrardatos;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Propietario
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Propietario
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
     * Set canalCaptacion
     *
     * @param \AppBundle\Entity\CanalCaptacion $canalCaptacion
     * @return Propietario
     */
    public function setCanalCaptacion(\AppBundle\Entity\CanalCaptacion $canalCaptacion)
    {
        $this->canalCaptacion = $canalCaptacion;

        return $this;
    }

    /**
     * Get canalCaptacion
     *
     * @return \AppBundle\Entity\CanalCaptacion 
     */
    public function getCanalCaptacion()
    {
        return $this->canalCaptacion;
    }
}
