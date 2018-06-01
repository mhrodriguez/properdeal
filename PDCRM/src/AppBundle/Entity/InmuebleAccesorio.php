<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/17/16
 * Time: 1:36 a.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class InmuebleAccesorio
{
    private $accesorios;

    public function __construct()
    {
        $this->accesorios = array();
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
}
