<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/29/16
 * Time: 1:04 a.m.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TareaRepository extends EntityRepository
{
    public function findByOwner($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario));

        return $resultset1;
    }

    public function findByOwnerDate($idUsuario, $fecha)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT t FROM AppBundle:Tarea t WHERE t.id_usuario = :idUsuario AND t.fecha >= :fecha'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('fecha', $fecha)->getResult();

        return $resultset2;
    }

    public function findByOwnerRangeDate($idUsuario, $fechaInicio, $fechaFin)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT t FROM AppBundle:Tarea t
                 WHERE t.id_usuario = :idUsuario
                 AND t.fecha >= :fechaInicio AND t.fecha<= :fechaFin AND t.activo=1'
            )->setParameter('fechaInicio', $fechaInicio)
            ->setParameter('fechaFin', $fechaFin)
            ->setParameter('idUsuario', $idUsuario)->getResult();

        return $resultset2;
    }


}