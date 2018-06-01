<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/14/16
 * Time: 12:04 a.m.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UsuarioRepository extends EntityRepository
{
    public function findByAsesores()
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                "SELECT u FROM AppBundle:Usuario u WHERE (u.rol = 1 OR u.rol = 2) AND u.activo = 1 ORDER BY u.nombre"
            )->getResult();


        return $resultset;
    }
}