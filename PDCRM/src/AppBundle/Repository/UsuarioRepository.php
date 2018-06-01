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
    private $doctrineManager;

    public function setDoctrineManager($_doctrineManager)
    {
        $this->doctrineManager = $_doctrineManager;
    }

    public function findByWebsitekey($websitekey)
    {
        $resultset = $this->findBy(array('websitekey' => $websitekey));

        return $resultset;
    }

    public function findAllRole1and2()
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM AppBundle:Usuario u
                 JOIN u.rol r
                 WHERE u.activo = 1 AND (r.idRol = 1 OR r.idRol = 2)
                 ORDER BY u.nombre'
            )->getResult();

        return $resultset2;
    }

    public function findAllRole1and2Activo($activo)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM AppBundle:Usuario u
                 JOIN u.rol r
                 WHERE u.activo = :activo AND (r.idRol = 1 OR r.idRol = 2)
                 ORDER BY u.nombre'
            )->setParameter('activo', $activo)
            ->getResult();

        return $resultset2;
    }

    public function obtenerFotoURL($idUsuario)
    {
        $connection = $this->doctrineManager->getConnection();

        $statement = $connection->prepare("SELECT u.url_foto
        FROM usuario u
        WHERE u.id = " . strval($idUsuario));
        // $statement->bindValue('idUsuario', $idUsuario);
        $statement->execute();

        $resultset = $statement->fetchAll();

        return $resultset[0]['url_foto'];
    }


}