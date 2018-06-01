<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/18/16
 * Time: 6:47 p.m.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AsesorPermisoRepository extends EntityRepository
{
    public function findAllOrdered()
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT ap FROM AppBundle:AsesorPermiso ap
                 JOIN ap.usuario u
                 JOIN u.rol r
                 WHERE (r.idRol = 1 OR r.idRol = 2)
                 ORDER BY u.nombre ASC'
            )->getResult();

        return $resultset2;
    }


}