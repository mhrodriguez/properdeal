<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/19/16
 * Time: 3:31 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\Reference;

use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="banner")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BannerRepository")
 */
class Banner
{
    /**
     * Constructor
     */
    public function __construct($domainRootName)
    {
        $this->domainRootName = $domainRootName;
    }

    private $domainRootName;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"sync"})
     */
    protected $idBanner;

    /**
     * @ORM\Column(type="string", length=500)
     * @Srz\Groups({"sync"})
     */
    protected $url;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     * @Srz\Groups({"sync"})
     */
    protected $activo;

    /**
     * Get idBanner
     *
     * @return integer
     */
    public function getIdBanner()
    {
        return $this->idBanner;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Banner
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
     * Set url
     *
     * @param string $url
     * @return Banner
     */
    public function setURL($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getURL()
    {
        return $this->url;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Banner
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
     * Set nombre
     *
     * @param string $nombre
     * @return nombre
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
     * Set version
     *
     * @param string $version
     * @return Banner
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Banner
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
        return 'banners';
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
        $this->nombre = $partes_ruta['filename'] . '_' . date('YmdHis') . '.' . $partes_ruta['extension'];

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

}
