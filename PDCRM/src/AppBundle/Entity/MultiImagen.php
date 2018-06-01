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

class MultiImagen
{
    protected $paths;

    protected $urls;

    /**
     * @Assert\NotBlank(message="Por favor, seleccione una imagen.")

     */
    private $files;

/*
    public function __construct()
    {
        $this->files = array();
    }
*/

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFiles($files = null)
    {
        $this->files = $files;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFiles()
    {
        return $this->files;
    }


    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath($path)
    {
        return null === $path
            ? null
            : '/PDCRM/web/' . $this->getUploadDir().'/'.$path;
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
     * Set path
     *
     * @param string $path
     * @return Imagen
     */
    public function setPaths($paths)
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Imagen
     */
    public function setURLs($urls)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getURLs()
    {
        return $this->urls;
    }

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFiles()) {
            return;
        }

        $this->paths = array();
        $this->urls = array();

        foreach($this->files as $file) {

            // use the original file name here but you should
            // sanitize it at least to avoid any security issues
            $partes_ruta = pathinfo($file->getClientOriginalName());
            //$nombre = $partes_ruta['filename'] . '_' . date('YmdHis') . '.' . $partes_ruta['extension'];
            $nombre = md5(uniqid()) . '.' . $partes_ruta['extension'];

            //$nombre = str_replace(' ', '_', $nombre);

            // move takes the target directory and then the
            // target filename to move to
            $file->move(
                $this->getUploadRootDir(),
                $nombre
            );

            // set the path property to the filename where you've saved the file
            $path = $nombre;
            array_push($this->paths, $path);

            $url = $this->getWebPath($path);
            array_push($this->urls, $url);

            // clean up the file property as you won't need it anymore
            //$this->file = null;
        }
    }

    public function validarExtensiones()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFiles()) {
            return false;
        }

        foreach($this->files as $file) {

            if ($file == null) return false;

            // use the original file name here but you should
            // sanitize it at least to avoid any security issues
            $partes_ruta = pathinfo($file->getClientOriginalName());
            $extension = strtoupper($partes_ruta['extension']);

            if ($extension != 'JPG' && $extension != 'JPEG' && $extension != 'GIF' && $extension != 'PNG')
            {
                return false;
            }
        }

        return true;
    }
}
