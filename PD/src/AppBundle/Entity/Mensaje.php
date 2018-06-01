<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/24/16
 * Time: 6:55 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="mensaje")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MensajeRepository")
 */
class Mensaje
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMensaje;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=true)
     */
    private $id_usuario;

    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    private $destinoemail;

    /**
     * @ORM\Column(type="string", length=50)
     *
     */
    private $titulo;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Este campo es requerido.")
     *
     */
    private $texto;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(name="leido", type="boolean", options={"default" = 0})
     */
    private $leido;

    /**
     * @ORM\ManyToMany(targetEntity="Inmueble")
     * @ORM\JoinTable(name="mensaje_inmueble",
     *      joinColumns={@ORM\JoinColumn(name="id_mensaje", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")}
     *      )
     */
    private $inmuebles;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     */
    private $emailremitente;



    private $tipoMensaje;

    private $id_listacontacto;

    public function __construct()
    {
        $this->leido = false;
        $this->fechaCreacion = new \DateTime();
    }

    /**
     * Get idMensaje
     *
     * @return integer
     */
    public function getIdMensaje()
    {
        return $this->idMensaje;
    }

    /**
     * Set destinoemail
     *
     * @param string $destinoemail
     * @return Mensaje
     */
    public function setDestinoemail($destinoemail)
    {
        $this->destinoemail = $destinoemail;

        return $this;
    }

    /**
     * Get destinoemail
     *
     * @return string
     */
    public function getDestinoemail()
    {
        return $this->destinoemail;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Mensaje
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
     * Set Leido
     *
     * @param boolean $leido
     * @return Usuario
     */
    public function setLeido($leido)
    {
        $this->leido = $leido;

        return $this;
    }

    /**
     * Get Leido
     *
     * @return boolean
     */
    public function getLeido()
    {
        return $this->leido;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Mensaje
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
     * Set texto
     *
     * @param string $texto
     * @return Mensaje
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Get TipoMensaje
     *
     * @return integer
     */
    public function getTipoMensaje()
    {
        return $this->tipoMensaje;
    }

    /**
     * Set tipoMensaje
     *
     * @param string $tipoMensaje
     * @return Mensaje
     */
    public function setTipoMensaje($tipoMensaje)
    {
        $this->tipoMensaje = $tipoMensaje;

        return $this;
    }

    /**
     * Set id_usuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return Mensaje
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
     * Add inmuebles
     *
     * @param \AppBundle\Entity\Inmueble $inmuebles
     * @return Mensaje
     */
    public function addInmueble(\AppBundle\Entity\Inmueble $inmuebles)
    {
        $this->inmuebles[] = $inmuebles;

        return $this;
    }

    /**
     * Remove inmuebles
     *
     * @param \AppBundle\Entity\Inmueble $inmuebles
     */
    public function removeInmueble(\AppBundle\Entity\Inmueble $inmuebles)
    {
        $this->inmuebles->removeElement($inmuebles);
    }

    /**
     * Get inmuebles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInmuebles()
    {
        return $this->inmuebles;
    }

    /**
     * Set id_estado
     *
     * @param \AppBundle\Entity\Estado $idEstado
     * @return Inmueble
     */
    public function setIdListacontacto(\AppBundle\Entity\ListaContacto $idListaContacto)
    {
        $this->id_listacontacto = $idListaContacto;

        return $this;
    }

    /**
     * Get id_estado
     *
     * @return \AppBundle\Entity\ListaContacto
     */
    public function getIdListacontacto()
    {
        return $this->id_listacontacto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Mensaje
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
     * Set telefono
     *
     * @param string $telefono
     * @return Mensaje
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
     * Set emailremitente
     *
     * @param string $emailremitente
     * @return Mensaje
     */
    public function setEmailremitente($emailremitente)
    {
        $this->emailremitente = $emailremitente;

        return $this;
    }

    /**
     * Get emailremitente
     *
     * @return string
     */
    public function getEmailremitente()
    {
        return $this->emailremitente;
    }
}
