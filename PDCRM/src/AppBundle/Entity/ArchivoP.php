<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/19/16
 * Time: 11:28 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\Reference;

use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="archivop")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArchivoRepository")
 */
class ArchivoP
{
    /**
     * Constructor
     */
    public function __construct($domainRootName)
    {
        $this->domainRootName = $domainRootName;
        $this->fechaCreacion = new \DateTime();
    }

    private $domainRootName;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idArchivo;

    /**
     * @ORM\ManyToOne(targetEntity="Prospecto")
     * @ORM\JoinColumn(name="id_prospecto", referencedColumnName="id", nullable=false)
     */
    protected $prospecto;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaCreacion;

    /**
     * @ORM\Column(name="aprobado", type="boolean", options={"default" = null}, nullable=true)
     */
    protected $privado;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $comentarios;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    protected $activo;


    /**
     * Get idArchivo
     *
     * @return integer
     */
    public function getIdArchivo()
    {
        return $this->idArchivo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Archivo
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Archivo
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
     * Set privado
     *
     * @param boolean $privado
     * @return Archivo
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
     * Set comentarios
     *
     * @param string $comentarios
     * @return Archivo
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Archivo
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

    // MANEJO DE ARCHIVOS ------------------------------------------

    /**
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile($file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getAbsolutePath()
    {
        return null === $this->nombre
            ? null
            : $this->getUploadRootDir().'/'.$this->nombre;
    }

    public function getWebPath()
    {
        return null === $this->nombre
            ? null
            : $this->domainRootName . '/PDCRM/web/' . $this->getUploadDir(). '/' . $this->nombre;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'archivos';
    }


    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $partes_ruta = pathinfo($this->getFile()->getClientOriginalName());
        $this->nombre = md5(uniqid()) . '.' . $partes_ruta['extension'];

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->nombre
        );

        $this->url = $this->getWebPath();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    /**
     * Set prospecto
     *
     * @param \AppBundle\Entity\Prospecto $prospecto
     * @return Archivo
     */
    public function setProspecto(\AppBundle\Entity\Prospecto $prospecto)
    {
        $this->prospecto = $prospecto;

        return $this;
    }

    /**
     * Get prospecto
     *
     * @return \AppBundle\Entity\Prospecto
     */
    public function getProspecto()
    {
        return $this->prospecto;
    }
}
