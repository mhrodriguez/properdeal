<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/6/16
 * Time: 11:55 a.m.
 */
namespace AppBundle\Repository;

use AppBundle\Entity\Usuario;

class ColaboradorRepository
{
    private $doctrineManager;
    private $authuser;

    public function __construct($_doctrineManager, $_authuser)
    {
        $this->doctrineManager = $_doctrineManager;
        $this->authuser = $_authuser;
    }

    public function findAllCandidatoColaborador()
    {
        $connection = $this->doctrineManager->getConnection();

        $statement = $connection->prepare(
            'SELECT u.id, u.nombre, u.empresa, u.fecha_creacion, uc.id_colaborador, u.id_usuario_padre FROM usuario u
             LEFT JOIN usuario_colaborador uc ON u.id = uc.id_colaborador AND uc.id_usuario=:idUsuario
             WHERE uc.id_colaborador IS NULL
             AND u.id <> :idUsuario
             AND (u.id_usuario_padre <> :idUsuario OR u.id_usuario_padre IS NULL)'
        );
        $statement->bindValue('idUsuario', $this->authuser->getId());
        $statement->execute();

        $resultados = $statement->fetchAll();

        $colaboradores = array();

        for($i = 0; $i < count($resultados); ++$i)
        {
            $colaborador = new Usuario();

            $colaborador->setId($resultados[$i]['id']);
            $colaborador->setNombre($resultados[$i]['nombre']);
            $colaborador->setEmpresa($resultados[$i]['empresa']);
            $colaborador->setFechaCreacion($resultados[$i]['fecha_creacion']);

            array_push($colaboradores, $colaborador);
        }

        return $colaboradores;
    }

    public function findAllHandshakes()
    {
        $usuario = $this->doctrineManager
            ->createQuery(
                'SELECT u FROM AppBundle:Usuario u WHERE u.id = :idUsuario'
            )->setParameter('idUsuario', $this->authuser->getId())->getResult();

        $handshakes = $usuario[0]->getColaboradores();

        // Remover Campos no necesarios
        for($i = 0; $i < count($handshakes); ++$i)
        {
            $handshake = $handshakes[$i];
            $handshake->setPassword(null);
        }

        return $handshakes;
    }

    public function findAllSeguidores()
    {
        $connection = $this->doctrineManager->getConnection();

        $statement = $connection->prepare(
                'SELECT u.nombre, u.empresa, u.fecha_creacion FROM usuario_colaborador uc INNER JOIN usuario u ON uc.id_usuario = u.id WHERE uc.id_colaborador = :idUsuario'
            );
        $statement->bindValue('idUsuario', $this->authuser->getId());
        $statement->execute();

        $resultados = $statement->fetchAll();

        $seguidores = array();

        for($i = 0; $i < count($resultados); ++$i)
        {
            $seguidor = new Usuario();

            $seguidor->setNombre($resultados[$i]['nombre']);
            $seguidor->setEmpresa($resultados[$i]['empresa']);
            $seguidor->setFechaCreacion($resultados[$i]['fecha_creacion']);

            array_push($seguidores, $seguidor);
        }

        return $seguidores;
    }
}