<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 6:26 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="inmueble")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InmuebleRepository")
 */
class Inmueble
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInmueble;
    
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false)
     */
    private $id_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="TipoInmueble")
     * @ORM\JoinColumn(name="id_tipo_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_tipo_inmueble;

    /**
     * @ORM\ManyToOne(targetEntity="OperacionInmueble")
     * @ORM\JoinColumn(name="id_operacion_inmueble", referencedColumnName="id", nullable=false)
     */
    private $id_operacion_inmueble;

    /**
     * @ORM\ManyToOne(targetEntity="Zona")
     * @ORM\JoinColumn(name="id_zona", referencedColumnName="id", nullable=true)
     */
    private $id_zona;

    /**
     * @ORM\ManyToOne(targetEntity="Propietario")
     * @ORM\JoinColumn(name="id_propietario", referencedColumnName="id", nullable=true)
     */
    private $id_propietario;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $nombreid;

    /**
     * @ORM\Column(type="integer", unique=false)
     */
    private $legacyid;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nombreedificio;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nombreplaza;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $oficina;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $calle;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", nullable=true, length=10)
     */
    private $numeroint;

    /**
     * @ORM\Column(type="string", nullable=true, length=50)
     */
    private $entrecalles_primera;

    /**
     * @ORM\Column(type="string", nullable=true, length=50)
     */
    private $entrecalles_segunda;

    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id", nullable=false)
     */
    protected $id_estado;

    /**
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumn(name="id_municipio", referencedColumnName="id", nullable=false)
     */
    protected $id_municipio;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    //private $ciudad;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $colonia;

    /**
     * @ORM\ManyToOne(targetEntity="Moneda")
     * @ORM\JoinColumn(name="id_moneda", referencedColumnName="id", nullable=false)
     */
    protected $id_moneda;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $latlng;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="id_usuariomodifico", referencedColumnName="id", nullable=true)
     */
    private $id_usuariomodifico;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaAlta;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 0
     * )
     */
    private $recamaras;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 0
     * )
     */
    private $plantas;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2)
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    protected $precio;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, options={"default" = 0})
     */
    protected $preciohasta;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    protected $cuotamantenimiento;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     *
     */
    private $comision;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $porcentajecompartir;

    protected $preciomax;

    /**
     * @ORM\ManyToOne(targetEntity="TipoTerreno")
     * @ORM\JoinColumn(name="id_tipoterreno", referencedColumnName="id", nullable=false)
     */
    protected $id_tipoterreno;

    /**
     * @ORM\ManyToOne(targetEntity="CuartoServicio")
     * @ORM\JoinColumn(name="id_cuartoservicio", referencedColumnName="id", nullable=false)
     */
    protected $id_cuartoservicio;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosconstruccion;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosfrente;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosfondo;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosterreno;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosjardin;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $metrosterraza;

    private $metrosconstruccionmax;
    private $metrosterrenomax;

    /**
     * @ORM\ManyToMany(targetEntity="Caracteristica")
     * @ORM\JoinTable(name="inmueble_caracteristica",
     *      joinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_caracteristica", referencedColumnName="id")}
     *      )
     */
    private $caracteristicas;

    /**
     * @ORM\ManyToMany(targetEntity="Accesorio")
     * @ORM\JoinTable(name="inmueble_accesorio",
     *      joinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_accesorio", referencedColumnName="id")}
     *      )
     */
    private $accesorios;

    /**
     * @ORM\ManyToMany(targetEntity="Prospecto")
     * @ORM\JoinTable(name="inmueble_prospecto",
     *      joinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_prospecto", referencedColumnName="id")}
     *      )
     */
    private $prospectos;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $antiguedad;

    /**
     * @ORM\ManyToOne(targetEntity="InstalacionElectrica")
     * @ORM\JoinColumn(name="id_instalacionelectrica", referencedColumnName="id", nullable=false)
     */
    protected $id_instalacionelectrica;

    /**
     * @ORM\ManyToOne(targetEntity="TipoClima")
     * @ORM\JoinColumn(name="id_tipoclima", referencedColumnName="id", nullable=false)
     */
    protected $id_tipoclima;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $banos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mediobanos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 0
     * )
     */
    private $espacioautos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Range(
     *      min = 0
     * )
     */
    private $espaciovisitas;


    /**
     * @ORM\ManyToMany(targetEntity="Imagen")
     * @ORM\JoinTable(name="inmueble_imagen",
     *      joinColumns={@ORM\JoinColumn(name="id_inmueble", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_imagen", referencedColumnName="id")}
     *      )
     * @ORM\OrderBy({"orden" = "ASC"})
     */
    private $imagenes;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $restricciones;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     */
    private $keywords;

    /**
     * @ORM\Column(name="destacado", type="boolean", options={"default" = 0})
     */
    private $destacado;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $youtube;

    /**
     * @ORM\Column(name="cerrado", type="boolean", options={"default" = 0})
     */
    private $cerrado;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * @ORM\Column(name="aireacondicionado", type="boolean", options={"default" = 0})
     */
    private $aireacondicionado;

    /**
     * @ORM\Column(name="publicarmapa", type="boolean", options={"default" = 0})
     */
    private $publicarmapa;

    /**
     * @ORM\Column(name="modificado", type="boolean", options={"default" = 0})
     */
    private $modificado;

    /**
     * @ORM\Column(name="privado", type="boolean", options={"default" = 0})
     */
    private $privado;

    protected $preciometroterrenomin;
    protected $preciometroterrenomax;

    protected $preciometroconstruccionmin;
    protected $preciometroconstruccionmax;

    protected $mostrarinactivas;
    protected $amueblado;
    protected $alberca;


    public function __construct()
    {
        $this->zonas = array();
        $this->fechaCreacion = new \DateTime();
    }

    /**
     * Set alberca
     *
     * @param string $alberca
     * @return Inmueble
     */
    public function setAlberca($alberca)
    {
        $this->alberca = $alberca;

        return $this;
    }

    /**
     * Get alberca
     *
     * @return string
     */
    public function getAlberca()
    {
        return $this->alberca;
    }

    /**
     * Set amueblado
     *
     * @param string $amueblado
     * @return Inmueble
     */
    public function setAmueblado($amueblado)
    {
        $this->amueblado = $amueblado;

        return $this;
    }

    /**
     * Get amueblado
     *
     * @return string
     */
    public function getAmueblado()
    {
        return $this->amueblado;
    }

    /**
     * Set mostrarinactivas
     *
     * @param string $mostrarinactivas
     * @return Inmueble
     */
    public function setMostrarinactivas($mostrarinactivas)
    {
        $this->mostrarinactivas = $mostrarinactivas;

        return $this;
    }

    /**
     * Get mostrarinactivas
     *
     * @return string
     */
    public function getMostrarinactivas()
    {
        return $this->mostrarinactivas;
    }

    /**
     * Set preciometroconstruccionmax
     *
     * @param string $preciometroconstruccionmax
     * @return Inmueble
     */
    public function setPreciometroconstruccionmax($preciometroconstruccionmax)
    {
        $this->preciometroconstruccionmax = $preciometroconstruccionmax;

        return $this;
    }

    /**
     * Get preciometroconstruccionmax
     *
     * @return string
     */
    public function getPreciometroconstruccionmax()
    {
        return $this->preciometroconstruccionmax;
    }

    /**
     * Set preciometroconstruccionmin
     *
     * @param string $preciometroconstruccionmin
     * @return Inmueble
     */
    public function setPreciometroconstruccionmin($preciometroconstruccionmin)
    {
        $this->preciometroconstruccionmin = $preciometroconstruccionmin;

        return $this;
    }

    /**
     * Get preciometroconstruccionmin
     *
     * @return string
     */
    public function getPreciometroconstruccionmin()
    {
        return $this->preciometroconstruccionmin;
    }

    /**
     * Set preciometroterrenomin
     *
     * @param string $preciometroterrenomin
     * @return Inmueble
     */
    public function setPreciometroterrenomin($preciometroterrenomin)
    {
        $this->preciometroterrenomin = $preciometroterrenomin;

        return $this;
    }

    /**
     * Get preciometroterrenomin
     *
     * @return string
     */
    public function getPreciometroterrenomin()
    {
        return $this->preciometroterrenomin;
    }

    /**
     * Set preciometroterrenomax
     *
     * @param string $preciometroterrenomax
     * @return Inmueble
     */
    public function setPreciometroterrenomax($preciometroterrenomax)
    {
        $this->preciometroterrenomax = $preciometroterrenomax;

        return $this;
    }

    /**
     * Get preciometroterrenomax
     *
     * @return string
     */
    public function getPreciometroterrenomax()
    {
        return $this->preciometroterrenomax;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Inmueble
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Inmueble
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set numeroint
     *
     * @param string $numeroint
     * @return Inmueble
     */
    public function setNumeroint($numeroint)
    {
        $this->numeroint = $numeroint;

        return $this;
    }

    /**
     * Get numeroint
     *
     * @return string 
     */
    public function getNumeroint()
    {
        return $this->numeroint;
    }

    /**
     * Set entrecalles_primera
     *
     * @param string $entrecallesPrimera
     * @return Inmueble
     */
    public function setEntrecallesPrimera($entrecallesPrimera)
    {
        $this->entrecalles_primera = $entrecallesPrimera;

        return $this;
    }

    /**
     * Get entrecalles_primera
     *
     * @return string 
     */
    public function getEntrecallesPrimera()
    {
        return $this->entrecalles_primera;
    }

    /**
     * Set entrecalles_segunda
     *
     * @param string $entrecallesSegunda
     * @return Inmueble
     */
    public function setEntrecallesSegunda($entrecallesSegunda)
    {
        $this->entrecalles_segunda = $entrecallesSegunda;

        return $this;
    }

    /**
     * Get entrecalles_segunda
     *
     * @return string 
     */
    public function getEntrecallesSegunda()
    {
        return $this->entrecalles_segunda;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Inmueble
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set latlng
     *
     * @param string $latlng
     * @return Inmueble
     */
    public function setLatlng($latlng)
    {
        $this->latlng = $latlng;

        return $this;
    }

    /**
     * Get latlng
     *
     * @return string 
     */
    public function getLatlng()
    {
        return $this->latlng;
    }

    /**
     * Set id_usuario
     *
     * @param \AppBundle\Entity\Usuario $idUsuario
     * @return Inmueble
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
     * Set id_tipo_inmueble
     *
     * @param \AppBundle\Entity\TipoInmueble $idTipoInmueble
     * @return Inmueble
     */
    public function setIdTipoInmueble(\AppBundle\Entity\TipoInmueble $idTipoInmueble)
    {
        $this->id_tipo_inmueble = $idTipoInmueble;

        return $this;
    }

    /**
     * Get id_tipo_inmueble
     *
     * @return \AppBundle\Entity\TipoInmueble 
     */
    public function getIdTipoInmueble()
    {
        return $this->id_tipo_inmueble;
    }

    /**
     * Set id_operacion_inmueble
     *
     * @param \AppBundle\Entity\OperacionInmueble $idOperacionInmueble
     * @return Inmueble
     */
    public function setIdOperacionInmueble(\AppBundle\Entity\OperacionInmueble $idOperacionInmueble)
    {
        $this->id_operacion_inmueble = $idOperacionInmueble;

        return $this;
    }

    /**
     * Get id_operacion_inmueble
     *
     * @return \AppBundle\Entity\OperacionInmueble 
     */
    public function getIdOperacionInmueble()
    {
        return $this->id_operacion_inmueble;
    }

    /**
     * Set id_estado
     *
     * @param \AppBundle\Entity\Estado $idEstado
     * @return Inmueble
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
     * Set id_colonia
     *
     * @param \AppBundle\Entity\Colonia $idColonia
     * @return Inmueble
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get id_colonia
     *
     * @return \AppBundle\Entity\Colonia 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Get idInmueble
     *
     * @return integer 
     */
    public function getIdInmueble()
    {
        return $this->idInmueble;
    }


    /**
     * Get idInmueble
     *
     * @return integer
     */
    public function setIdInmueble($idInmueble)
    {
        $this->idInmueble = $idInmueble;
    }


    /**
     * Set id_moneda
     *
     * @param \AppBundle\Entity\Moneda $idMoneda
     * @return Inmueble
     */
    public function setIdMoneda(\AppBundle\Entity\Moneda $idMoneda)
    {
        $this->id_moneda = $idMoneda;

        return $this;
    }

    /**
     * Get id_moneda
     *
     * @return \AppBundle\Entity\Moneda
     */
    public function getIdMoneda()
    {
        return $this->id_moneda;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Inmueble
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Inmueble
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Inmueble
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Inmueble
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
     * Set modificado
     *
     * @param boolean $modificado
     * @return Inmueble
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Get modificado
     *
     * @return boolean
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Set destacado
     *
     * @param boolean $destacado
     * @return Inmueble
     */
    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;

        return $this;
    }

    /**
     * Get destacado
     *
     * @return boolean
     */
    public function getDestacado()
    {
        return $this->destacado;
    }

    /**
     * Set publicarmapa
     *
     * @param boolean $publicarmapa
     * @return Inmueble
     */
    public function setPublicarmapa($publicarmapa)
    {
        $this->publicarmapa = $publicarmapa;

        return $this;
    }

    /**
     * Get publicarmapa
     *
     * @return boolean
     */
    public function getPublicarmapa()
    {
        return $this->publicarmapa;
    }


    /**
     * Set aireacondicionado
     *
     * @param boolean $aireacondicionado
     * @return Inmueble
     */
    public function setAireacondicionado($aireacondicionado)
    {
        $this->aireacondicionado = $aireacondicionado;

        return $this;
    }

    /**
     * Get aireacondicionado
     *
     * @return boolean
     */
    public function getAireacondicionado()
    {
        return $this->aireacondicionado;
    }

    /**
     * Add zonas
     *
     * @param \AppBundle\Entity\Zona $zonas
     * @return Inmueble
     */
    public function addZona(\AppBundle\Entity\Zona $zonas)
    {
        $this->zonas[] = $zonas;

        return $this;
    }

    /**
     * Remove zonas
     *
     * @param \AppBundle\Entity\Zona $zonas
     */
    public function removeZona(\AppBundle\Entity\Zona $zonas)
    {
        $this->zonas->removeElement($zonas);
    }

    /**
     * Set recamaras
     *
     * @param integer $recamaras
     * @return Inmueble
     */
    public function setRecamaras($recamaras)
    {
        $this->recamaras = $recamaras;

        return $this;
    }

    /**
     * Get recamaras
     *
     * @return integer 
     */
    public function getRecamaras()
    {
        return $this->recamaras;
    }

    /**
     * Set plantas
     *
     * @param integer $plantas
     * @return Inmueble
     */
    public function setPlantas($plantas)
    {
        $this->plantas = $plantas;

        return $this;
    }

    /**
     * Get plantas
     *
     * @return integer
     */
    public function getPlantas()
    {
        return $this->plantas;
    }


    /**
     * Set precio
     *
     * @param string $precio
     * @return Inmueble
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Inmueble
     */
    public function setPreciomax($precio)
    {
        $this->preciomax = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPreciomax()
    {
        return $this->preciomax;
    }

    /**
     * Set metrosconstruccion
     *
     * @param integer $metrosconstruccion
     * @return Inmueble
     */
    public function setMetrosconstruccion($metrosconstruccion)
    {
        $this->metrosconstruccion = $metrosconstruccion;

        return $this;
    }

    /**
     * Get metrosconstruccion
     *
     * @return integer 
     */
    public function getMetrosconstruccion()
    {
        return $this->metrosconstruccion;
    }

    /**
     * Set metrosconstruccionmax
     *
     * @param integer $metrosconstruccionmax
     * @return Inmueble
     */
    public function setMetrosconstruccionmax($metrosconstruccionmax)
    {
        $this->metrosconstruccionmax = $metrosconstruccionmax;

        return $this;
    }

    /**
     * Get metrosconstruccionmax
     *
     * @return integer
     */
    public function getMetrosconstruccionmax()
    {
        return $this->metrosconstruccionmax;
    }

    /**
     * Set metrosconstruccion
     *
     * @param integer $metrosconstruccion
     * @return Inmueble
     */
    public function setMetrosterrenomax($metrosterreno)
    {
        $this->metrosterrenomax = $metrosterreno;

        return $this;
    }

    /**
     * Get metrosconstruccion
     *
     * @return integer
     */
    public function getMetrosterrenomax()
    {
        return $this->metrosterrenomax;
    }

    /**
     * Set metrosterreno
     *
     * @param integer $metrosterreno
     * @return Inmueble
     */
    public function setMetrosterreno($metrosterreno)
    {
        $this->metrosterreno = $metrosterreno;

        return $this;
    }

    /**
     * Get metrosterreno
     *
     * @return integer 
     */
    public function getMetrosterreno()
    {
        return $this->metrosterreno;
    }

    /**
     * Add caracteristicas
     *
     * @param \AppBundle\Entity\Caracteristica $caracteristicas
     * @return Inmueble
     */
    public function addCaracteristica(\AppBundle\Entity\Caracteristica $caracteristicas)
    {
        $this->caracteristicas[] = $caracteristicas;

        return $this;
    }

    /**
     * Remove caracteristicas
     *
     * @param \AppBundle\Entity\Caracteristica $caracteristicas
     */
    public function removeCaracteristica(\AppBundle\Entity\Caracteristica $caracteristicas)
    {
        $this->caracteristicas->removeElement($caracteristicas);
    }

    /**
     * Get caracteristicas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Get caracteristicas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setCaracteristicas($caracteristicas_)
    {
        $this->caracteristicas =$caracteristicas_ ;
    }


    /**
     * Add imagenes
     *
     * @param \AppBundle\Entity\Imagen $imagenes
     * @return Inmueble
     */
    public function addImagen(\AppBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes[] = $imagenes;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \AppBundle\Entity\Imagen $imagenes
     */
    public function removeImagen(\AppBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Inmueble
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
     * @return Inmueble
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
     * Add imagenes
     *
     * @param \AppBundle\Entity\Imagen $imagenes
     * @return Inmueble
     */
    public function addImagene(\AppBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes[] = $imagenes;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \AppBundle\Entity\Imagen $imagenes
     */
    public function removeImagene(\AppBundle\Entity\Imagen $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Set oficina
     *
     * @param string $oficina
     * @return Inmueble
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
     * Set telefono
     *
     * @param string $telefono
     * @return Inmueble
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
     * Set id_zona
     *
     * @param \AppBundle\Entity\Zona $idZona
     * @return Inmueble
     */
    public function setIdZona(\AppBundle\Entity\Zona $idZona)
    {
        $this->id_zona = $idZona;

        return $this;
    }

    /**
     * Get id_zona
     *
     * @return \AppBundle\Entity\Zona 
     */
    public function getIdZona()
    {
        return $this->id_zona;
    }

    /**
     * Set nombreid
     *
     * @param string $nombreid
     * @return Inmueble
     */
    public function setNombreid($nombreid)
    {
        $this->nombreid = $nombreid;

        return $this;
    }

    /**
     * Get nombreid
     *
     * @return string 
     */
    public function getNombreid()
    {
        return $this->nombreid;
    }

    /**
     * Set nombreedificio
     *
     * @param string $nombreedificio
     * @return Inmueble
     */
    public function setNombreedificio($nombreedificio)
    {
        $this->nombreedificio = $nombreedificio;

        return $this;
    }

    /**
     * Get nombreedificio
     *
     * @return string 
     */
    public function getNombreedificio()
    {
        return $this->nombreedificio;
    }

    /**
     * Set nombreplaza
     *
     * @param string $nombreplaza
     * @return Inmueble
     */
    public function setNombreplaza($nombreplaza)
    {
        $this->nombreplaza = $nombreplaza;

        return $this;
    }

    /**
     * Get nombreplaza
     *
     * @return string 
     */
    public function getNombreplaza()
    {
        return $this->nombreplaza;
    }

    /**
     * Set cuotamantenimiento
     *
     * @param string $cuotamantenimiento
     * @return Inmueble
     */
    public function setCuotamantenimiento($cuotamantenimiento)
    {
        $this->cuotamantenimiento = $cuotamantenimiento;

        return $this;
    }

    /**
     * Get cuotamantenimiento
     *
     * @return string 
     */
    public function getCuotamantenimiento()
    {
        return $this->cuotamantenimiento;
    }

    /**
     * Set comision
     *
     * @param integer $comision
     * @return Inmueble
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return integer 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set metrosfrente
     *
     * @param integer $metrosfrente
     * @return Inmueble
     */
    public function setMetrosfrente($metrosfrente)
    {
        $this->metrosfrente = $metrosfrente;

        return $this;
    }

    /**
     * Get metrosfrente
     *
     * @return integer 
     */
    public function getMetrosfrente()
    {
        return $this->metrosfrente;
    }

    /**
     * Set metrosfondo
     *
     * @param integer $metrosfondo
     * @return Inmueble
     */
    public function setMetrosfondo($metrosfondo)
    {
        $this->metrosfondo = $metrosfondo;

        return $this;
    }

    /**
     * Get metrosfondo
     *
     * @return integer 
     */
    public function getMetrosfondo()
    {
        return $this->metrosfondo;
    }

    /**
     * Set metrosjardin
     *
     * @param integer $metrosjardin
     * @return Inmueble
     */
    public function setMetrosjardin($metrosjardin)
    {
        $this->metrosjardin = $metrosjardin;

        return $this;
    }

    /**
     * Get metrosjardin
     *
     * @return integer 
     */
    public function getMetrosjardin()
    {
        return $this->metrosjardin;
    }

    /**
     * Set metrosterraza
     *
     * @param integer $metrosterraza
     * @return Inmueble
     */
    public function setMetrosterraza($metrosterraza)
    {
        $this->metrosterraza = $metrosterraza;

        return $this;
    }

    /**
     * Get metrosterraza
     *
     * @return integer 
     */
    public function getMetrosterraza()
    {
        return $this->metrosterraza;
    }

    /**
     * Set antiguedad
     *
     * @param string $antiguedad
     * @return Inmueble
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return string 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set banos
     *
     * @param integer $banos
     * @return Inmueble
     */
    public function setBanos($banos)
    {
        $this->banos = $banos;

        return $this;
    }

    /**
     * Get banos
     *
     * @return integer 
     */
    public function getBanos()
    {
        return $this->banos;
    }

    /**
     * Set espacioautos
     *
     * @param integer $espacioautos
     * @return Inmueble
     */
    public function setEspacioautos($espacioautos)
    {
        $this->espacioautos = $espacioautos;

        return $this;
    }

    /**
     * Get espacioautos
     *
     * @return integer 
     */
    public function getEspacioautos()
    {
        return $this->espacioautos;
    }

    /**
     * Set espaciovisitas
     *
     * @param integer $espaciovisitas
     * @return Inmueble
     */
    public function setEspaciovisitas($espaciovisitas)
    {
        $this->espaciovisitas = $espaciovisitas;

        return $this;
    }

    /**
     * Get espaciovisitas
     *
     * @return integer 
     */
    public function getEspaciovisitas()
    {
        return $this->espaciovisitas;
    }

    /**
     * Set restricciones
     *
     * @param string $restricciones
     * @return Inmueble
     */
    public function setRestricciones($restricciones)
    {
        $this->restricciones = $restricciones;

        return $this;
    }

    /**
     * Get restricciones
     *
     * @return string 
     */
    public function getRestricciones()
    {
        return $this->restricciones;
    }

    /**
     * Set id_tipoterreno
     *
     * @param \AppBundle\Entity\TipoTerreno $idTipoterreno
     * @return Inmueble
     */
    public function setIdTipoterreno(\AppBundle\Entity\TipoTerreno $idTipoterreno)
    {
        $this->id_tipoterreno = $idTipoterreno;

        return $this;
    }

    /**
     * Get id_tipoterreno
     *
     * @return \AppBundle\Entity\TipoTerreno 
     */
    public function getIdTipoterreno()
    {
        return $this->id_tipoterreno;
    }

    /**
     * Set id_cuartoservicio
     *
     * @param \AppBundle\Entity\CuartoServicio $idCuartoservicio
     * @return Inmueble
     */
    public function setIdCuartoservicio(\AppBundle\Entity\CuartoServicio $idCuartoservicio)
    {
        $this->id_cuartoservicio = $idCuartoservicio;

        return $this;
    }

    /**
     * Get id_cuartoservicio
     *
     * @return \AppBundle\Entity\CuartoServicio 
     */
    public function getIdCuartoservicio()
    {
        return $this->id_cuartoservicio;
    }

    /**
     * Set id_instalacionelectrica
     *
     * @param \AppBundle\Entity\InstalacionElectrica $idInstalacionelectrica
     * @return Inmueble
     */
    public function setIdInstalacionelectrica(\AppBundle\Entity\InstalacionElectrica $idInstalacionelectrica)
    {
        $this->id_instalacionelectrica = $idInstalacionelectrica;

        return $this;
    }

    /**
     * Get id_instalacionelectrica
     *
     * @return \AppBundle\Entity\InstalacionElectrica 
     */
    public function getIdInstalacionelectrica()
    {
        return $this->id_instalacionelectrica;
    }

    /**
     * Set id_tipoclima
     *
     * @param \AppBundle\Entity\TipoClima $idTipoclima
     * @return Inmueble
     */
    public function setIdTipoclima(\AppBundle\Entity\TipoClima $idTipoclima)
    {
        $this->id_tipoclima = $idTipoclima;

        return $this;
    }

    /**
     * Get id_tipoclima
     *
     * @return \AppBundle\Entity\TipoClima 
     */
    public function getIdTipoclima()
    {
        return $this->id_tipoclima;
    }

    /**
     * Set id_usuariomodifico
     *
     * @param \AppBundle\Entity\Usuario $idUsuariomodifico
     * @return Inmueble
     */
    public function setIdUsuariomodifico(\AppBundle\Entity\Usuario $idUsuariomodifico = null)
    {
        $this->id_usuariomodifico = $idUsuariomodifico;

        return $this;
    }

    /**
     * Get id_usuariomodifico
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getIdUsuariomodifico()
    {
        return $this->id_usuariomodifico;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return Inmueble
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }

    /**
     * Set id_propietario
     *
     * @param \AppBundle\Entity\Propietario $idPropietario
     * @return Inmueble
     */
    public function setIdPropietario(\AppBundle\Entity\Propietario $idPropietario = null)
    {
        $this->id_propietario = $idPropietario;

        return $this;
    }

    /**
     * Get id_propietario
     *
     * @return \AppBundle\Entity\Propietario 
     */
    public function getIdPropietario()
    {
        return $this->id_propietario;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     * @return Inmueble
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string 
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Add accesorios
     *
     * @param \AppBundle\Entity\Accesorio $accesorios
     * @return Inmueble
     */
    public function addAccesorio(\AppBundle\Entity\Accesorio $accesorios)
    {
        $this->accesorios[] = $accesorios;

        return $this;
    }

    /**
     * Remove accesorios
     *
     * @param \AppBundle\Entity\Accesorio $accesorios
     */
    public function removeAccesorio(\AppBundle\Entity\Accesorio $accesorios)
    {
        $this->accesorios->removeElement($accesorios);
    }

    /**
     * Get accesorios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccesorios()
    {
        return $this->accesorios;
    }

    /**
     * Get accesorios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setAccesorios($accesorios)
    {
        $this->accesorios = $accesorios;
    }

    /**
     * Set mediobanos
     *
     * @param integer $mediobanos
     * @return Inmueble
     */
    public function setMediobanos($mediobanos)
    {
        $this->mediobanos = $mediobanos;

        return $this;
    }

    /**
     * Get mediobanos
     *
     * @return integer 
     */
    public function getMediobanos()
    {
        return $this->mediobanos;
    }

    /**
     * Set legacyid
     *
     * @param string $legacyid
     * @return Inmueble
     */
    public function setLegacyid($legacyid)
    {
        $this->legacyid = $legacyid;

        return $this;
    }

    /**
     * Get legacyid
     *
     * @return string
     */
    public function getLegacyid()
    {
        return $this->legacyid;
    }

    /**
     * Add prospectos
     *
     * @param \AppBundle\Entity\Prospecto $prospectos
     * @return Inmueble
     */
    public function addProspecto(\AppBundle\Entity\Prospecto $prospectos)
    {
        $this->prospectos[] = $prospectos;

        return $this;
    }

    /**
     * Remove prospectos
     *
     * @param \AppBundle\Entity\Prospecto $prospectos
     */
    public function removeProspecto(\AppBundle\Entity\Prospecto $prospectos)
    {
        $this->prospectos->removeElement($prospectos);
    }

    /**
     * Get prospectos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProspectos()
    {
        return $this->prospectos;
    }

    /**
     * Get prospectos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setProspectos($prospectos_)
    {
        $this->prospectos =$prospectos_ ;
    }

    /**
     * Set porcentajecompartir
     *
     * @param integer $porcentajecompartir
     * @return Inmueble
     */
    public function setPorcentajecompartir($porcentajecompartir)
    {
        $this->porcentajecompartir = $porcentajecompartir;

        return $this;
    }

    /**
     * Get porcentajecompartir
     *
     * @return integer
     */
    public function getPorcentajecompartir()
    {
        return $this->porcentajecompartir;
    }

    /**
     * Set preciohasta
     *
     * @param string $preciohasta
     * @return Inmueble
     */
    public function setPreciohasta($preciohasta)
    {
        $this->preciohasta = $preciohasta;

        return $this;
    }

    /**
     * Get preciohasta
     *
     * @return string 
     */
    public function getPreciohasta()
    {
        return $this->preciohasta;
    }

    /**
     * Set privado
     *
     * @param boolean $privado
     * @return Inmueble
     */
    public function setPrivado($privado)
    {
        $this->privado = $privado;

        return $this;
    }

    /**
     * Get privado
     *
     * @return boolean
     */
    public function getPrivado()
    {
        return $this->privado;
    }

    /**
     * Set id_municipio
     *
     * @param \AppBundle\Entity\Municipio $idMunicipio
     * @return Inmueble
     */
    public function setIdMunicipio(\AppBundle\Entity\Municipio $idMunicipio = null)
    {
        $this->id_municipio = $idMunicipio;

        return $this;
    }

    /**
     * Get id_municipio
     *
     * @return \AppBundle\Entity\Municipio 
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }
}
