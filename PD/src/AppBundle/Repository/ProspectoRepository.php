<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * ProspectoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProspectoRepository extends EntityRepository
{
    public function findByOwner($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Prospecto p JOIN p.id_usuario u WHERE u.idUsuarioPadre = :idUsuario'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwnerCount($idUsuario)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(p.idProspecto) FROM AppBundle:Prospecto p JOIN p.id_usuario u WHERE u.idUsuarioPadre = :idUsuario'
            )->setParameter('idUsuario', $idUsuario)->getSingleScalarResult();

        return $count1 + $count2;
    }
}
