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

class InmuebleProspecto
{
    /*
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $prospecto;

    /**
     * Get accesorios
     *
     *
     */
    public function getProspecto()
    {
        return $this->prospecto;
    }

    /**
     * Get accesorios
     *
     *
     */
    public function setProspecto($prospecto)
    {
        $this->prospecto = $prospecto;
    }

}
