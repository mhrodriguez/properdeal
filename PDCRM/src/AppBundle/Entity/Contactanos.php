<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/8/16
 * Time: 4:40 p.m.
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contactanos
{
    /**
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $nombre;

    /**
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $telefono;

    /**
     * @Assert\NotBlank(message="Este campo es requerido.")
     *
     * @Assert\Email(
     *  message = "El e-mail '{{ value }}' no es válido.",
     *  checkMX = true
     * )
     */
    private $email;

    /**
     * @Assert\NotBlank(message="Este campo es requerido.")
     */
    private $comentarios;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Usuario
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
}