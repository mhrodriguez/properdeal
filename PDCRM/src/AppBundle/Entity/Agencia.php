<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/25/16
 * Time: 11:40 p.m.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="agencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgenciaRepository")
 */
class Agencia
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $nombre;
}