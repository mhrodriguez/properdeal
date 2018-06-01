<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/24/16
 * Time: 6:47 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="imagen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImagenRepository")
 */
class Imagen
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"list"})
     */
    public $idImagen;

    /**
     * @ORM\Column(type="string", length=100)
     * @Srz\Groups({"list"})
     * @Assert\NotBlank
     */
    public $descripcion;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    public $path;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     * @Srz\Groups({"list"})
     */
    public $url;

    /**
     * @Assert\NotBlank(message="Por favor, seleccione una imagen.")
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
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : '/PDCRM/web/' . $this->getUploadDir().'/'.$this->path;
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
        return 'uploads/images';
    }


    /**
     * Get idImagen
     *
     * @return integer 
     */
    public function getIdImagen()
    {
        return $this->idImagen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Imagen
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Imagen
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
     * Set path
     *
     * @param string $path
     * @return Imagen
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Imagen
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


    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $partes_ruta = pathinfo($this->getFile()->getClientOriginalName());
        $nombre = $partes_ruta['filename'] . '_' . date('YmdHis') . '.' . $partes_ruta['extension'];

        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $nombre
        );

        // set the path property to the filename where you've saved the file
        $this->path = $nombre;

        $this->url = $this->getWebPath();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }
}
