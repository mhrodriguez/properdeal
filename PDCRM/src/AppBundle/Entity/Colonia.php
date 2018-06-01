<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 7:35 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation as Srz;

/**
 * @ORM\Table(name="colonia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ColoniaRepository")
 */
class Colonia
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Srz\Groups({"list"})
     */
    private $idColonia;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Srz\Groups({"list"})
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumn(name="id_municipio", referencedColumnName="id", nullable=false)
     */
    private $municipio;

    /**
     * @ORM\Column(name="activo", type="boolean", options={"default" = 1})
     */
    private $activo;

    /**
     * Get idColonia
     *
     * @return integer 
     */
    public function getIdColonia()
    {
        return $this->idColonia;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Colonia
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
     * Set activo
     *
     * @param boolean $activo
     * @return Colonia
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
}
