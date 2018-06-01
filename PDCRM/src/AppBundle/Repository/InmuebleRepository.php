<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 7:47 p.m.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class InmuebleRepository extends EntityRepository
{
    private $doctrineManager;

    public function setDoctrineManager($_doctrineManager)
    {
        $this->doctrineManager = $_doctrineManager;
    }

    public function findByOwnerTop3(/*$idUsuario*/)
    {
        $connection = $this->doctrineManager->getConnection();

        $statement = $connection->prepare("SELECT u.*, count(*) as total
        FROM inmueble i INNER JOIN usuario u ON u.id = i.id_usuario
        GROUP BY u.id
        ORDER BY count(i.id) DESC
        LIMIT 5");
       // $statement->bindValue('idUsuario', $idUsuario);
        $statement->execute();

        $resultset = $statement->fetchAll();

        return $resultset;
    }

    public function findByOwnerEnviadaTop3($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario'
            )->setMaxResults(3)
            ->setParameter('idUsuario', $idUsuario)->getResult();

        $resultset3 = array();

        if (count($resultset1) > 0) {
        array_push($resultset3, $resultset1[0]);
        array_push($resultset3, $resultset1[0]);
        }
        $resultset1=$resultset3;

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwner($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario, 'activo' => 1), array('fechaCreacion' => 'DESC'));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u
                 WHERE u.idUsuarioPadre = :idUsuario AND i.activo = 1
                 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return array_merge($resultset1, $resultset2);
    }

    public function findAllPaged($inicio, $maxresultados)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i WHERE i.activo=1
                 ORDER BY i.fechaCreacion DESC'
            )->setMaxResults($maxresultados)
            ->setFirstResult($inicio)
            ->getResult();

        return $resultset2;
    }

    public function findByIDNombreID($id)
    {
        if (ctype_digit($id)) {
            $resultset2 = $this->getEntityManager()
                ->createQuery(
                    'SELECT i FROM AppBundle:Inmueble i
                 WHERE (i.legacyid = :id OR LOWER(i.nombreid) LIKE :id2 )
                 ORDER BY i.fechaCreacion DESC'
                )->setParameter('id', $id)
                ->setParameter('id2', '%' . strtolower($id) . '%')
                ->getResult();
                //->setParameter('activo', $activo)->getResult();
        } else {
            $resultset2 = $this->getEntityManager()
                ->createQuery(
                    'SELECT i FROM AppBundle:Inmueble i
                 WHERE LOWER(i.nombreid) LIKE :id2 OR LOWER(i.colonia) LIKE :colonia
                 ORDER BY i.fechaCreacion DESC'
                )->setParameter('id2', '%' . strtolower($id) . '%')
                ->setParameter('colonia', '%' . $id . '%')
                ->getResult();
                //->setParameter('activo', $activo)->getResult();
        }

        return $resultset2;
    }

    public function findByOwnerAndDate($idUsuario, $fecha)
    {
        $resultset1 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i WHERE i.id_usuario = :idUsuario
                 AND i.fechaCreacion >= :fecha
                 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('fecha', $fecha)->getResult();


        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u
                 WHERE u.idUsuarioPadre = :idUsuario
                 AND i.fechaCreacion >= :fecha
                 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('fecha', $fecha)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwnerAndModified($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario, 'modificado' => 1), array('fechaCreacion' => 'DESC'));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.modificado=1 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwnerActivo($idUsuario, $activo)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario, 'activo' => $activo), array('fechaCreacion' => 'DESC'));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.activo=:activo
                 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('activo', $activo)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwnerOperacion($idUsuario, $idOperacion)
    {
        $resultset1 = $this->findBy(array('activo'=>1, 'id_usuario' => $idUsuario, 'id_operacion_inmueble' => $idOperacion), array('fechaCreacion' => 'DESC'));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u
                 WHERE u.idUsuarioPadre = :idUsuario AND i.id_operacion_inmueble=:idOperacionInmueble AND i.activo=1
                 ORDER BY i.fechaCreacion DESC '
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('idOperacionInmueble', $idOperacion)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOperacion($idOperacion)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i
                 WHERE i.id_operacion_inmueble=:idOperacionInmueble AND i.activo=1
                 ORDER BY i.fechaCreacion DESC'
            )
            ->setParameter('idOperacionInmueble', $idOperacion)->getResult();

        return $resultset2;
    }

    public function findByOwnerRentaFechaVencimiento($idUsuario, $fechaVencimiento)
    {
        $resultset1 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i WHERE i.id_usuario = :idUsuario
                 AND i.id_operacion_inmueble = 2
                 AND :fechaVencimiento > DATE_ADD(i.fechaAlta,320,\'day\') AND i.activo=1
                 ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('fechaVencimiento', $fechaVencimiento)->getResult();

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u
                WHERE u.idUsuarioPadre = :idUsuario
                AND i.id_operacion_inmueble = 2
                AND :fechaVencimiento > DATE_ADD(i.fechaAlta,320,\'day\') AND i.activo=1
                ORDER BY i.fechaCreacion DESC'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('fechaVencimiento', $fechaVencimiento)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByRentaFechaVencimiento($fechaVencimiento)
    {
        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i
                WHERE i.id_operacion_inmueble = 2
                AND :fechaVencimiento > DATE_ADD(i.fechaAlta,320,\'day\') AND i.activo=1
                ORDER BY i.fechaCreacion DESC')
            ->setParameter('fechaVencimiento', $fechaVencimiento)->getResult();

        return $resultset2;
    }

    public function findByOwnerActivaOperacionCount($idUsuario, $activo, $idOperacionInmueble)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario, 'activo' => $activo, 'id_operacion_inmueble' => $idOperacionInmueble));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u
                 WHERE u.idUsuarioPadre = :idUsuario AND i.activo=:activo AND i.id_operacion_inmueble=:id_operacion_inmueble'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('activo', $activo)
            ->setParameter('id_operacion_inmueble', $idOperacionInmueble)->getResult();

        return count(array_merge($resultset2, $resultset1));
    }

    public function findByActivaOperacionCount($activo, $idOperacionInmueble)
    {
        $resultset1 = $this->findBy(array('activo' => $activo, 'id_operacion_inmueble' => $idOperacionInmueble));

        return count($resultset1);
    }

    public function findByOwnerCount($idUsuario)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario, 'activo' => true)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getSingleScalarResult();

        return $count1 + $count2;
    }

    public function findByOwnerActivoCount($idUsuario, $activo)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario, 'activo' => $activo)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.activo=' . strval($activo)
            )->setParameter('idUsuario', $idUsuario)->getSingleScalarResult();

        return $count1 + $count2;
    }

    public function findByCount()
    {
        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i where i.activo=1'
            )->getSingleScalarResult();

        return $count2;
    }

    public function findByActivoCount($activo)
    {
        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i WHERE i.activo = ' . strval($activo)
            )->getSingleScalarResult();

        return $count2;
    }

    public function findByOwnerTipoInmuebleCount($idUsuario, $idTipoInmueble)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario, 'id_tipo_inmueble' => $idTipoInmueble)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.id_tipo_inmueble = :idTipoInmueble'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('idTipoInmueble', $idTipoInmueble)
            ->getSingleScalarResult();

        return $count1 + $count2;
    }

    public function findByTipoInmuebleCount($idTipoInmueble)
    {
        $count1 = count($this->findBy(array('id_tipo_inmueble' => $idTipoInmueble)));

        return $count1;
    }

    public function findByOwnerOperacionInmuebleCount($idUsuario, $idOperacionInmueble)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario, 'id_operacion_inmueble' => $idOperacionInmueble)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario
                AND i.id_operacion_inmueble = :idOperacionInmueble'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('idOperacionInmueble', 1)
            ->getSingleScalarResult();

        return $count1 + $count2;
    }

    public function obtenerPromedioDeVentas($idUsuario)
    {
        $promedio = $this->getEntityManager()
            ->createQuery(
                'SELECT AVG(i.precio) FROM AppBundle:Inmueble i WHERE i.id_usuario = :idUsuario
                AND i.id_operacion_inmueble = :idOperacionInmueble'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('idOperacionInmueble', 1)
            ->getSingleScalarResult();

        return $promedio;
    }

    public function obtenerPromedioDeRentas($idUsuario)
    {
        $promedio = $this->getEntityManager()
            ->createQuery(
                'SELECT AVG(i.precio) FROM AppBundle:Inmueble i WHERE i.id_usuario = :idUsuario
                AND i.id_operacion_inmueble = :idOperacionInmueble'
            )->setParameter('idUsuario', $idUsuario)
            ->setParameter('idOperacionInmueble', 2)
            ->getSingleScalarResult();

        return $promedio;
    }

    public function findByOwnerReporteTotal($idUsuario)
    {
        $connection = $this->doctrineManager->getConnection();

        // 1. Totales Activas
        $statement = $connection->prepare("
          SELECT t.nombre as tipoinmuebleNombre, o.nombre as operacionInmuebleNombre, COUNT(*) as totalActivo, 0 as totalInactivo, 0 as fechaActivo, 0 as fechaInactivo,
          t.id as idTipoInmueble, o.id as idOperacionInmueble
          FROM inmueble i
          INNER JOIN tipoinmueble t ON t.id = i.id_tipo_inmueble
          INNER JOIN operacioninmueble o ON o.id = i.id_operacion_inmueble
          WHERE i.id_usuario = :idUsuario AND i.activo = true
          GROUP BY t.nombre, o.nombre, i.activo"
        );
        $statement->bindValue('idUsuario', $idUsuario);
        $statement->execute();

        $resultset = $statement->fetchAll();

        // 2. Totales Inactivas
        $statement = $connection->prepare("
          SELECT t.nombre as tipoinmuebleNombre, o.nombre as operacionInmuebleNombre, 0 as totalActivo, COUNT(*) as totalInactivo, 0 as fechaActivo, 0 as fechaInactivo,
          t.id as idTipoInmueble, o.id as idOperacionInmueble
          FROM inmueble i
          INNER JOIN tipoinmueble t ON t.id = i.id_tipo_inmueble
          INNER JOIN operacioninmueble o ON o.id = i.id_operacion_inmueble
          WHERE i.id_usuario = :idUsuario AND i.activo = false
          GROUP BY t.nombre, o.nombre, i.activo"
        );
        $statement->bindValue('idUsuario', $idUsuario);
        $statement->execute();

        $resultset_temp = $statement->fetchAll();

        // 2.1 Buscar coincidencia
        for ($index=0; $index<count($resultset_temp); $index++)
        {
            $encontrado = false;
            for ($index2=0; $index2<count($resultset); $index2++)
            {
                if ($resultset_temp[$index]["idTipoInmueble"] == $resultset[$index2]["idTipoInmueble"] &&
                    $resultset_temp[$index]["idOperacionInmueble"] == $resultset[$index2]["idOperacionInmueble"])
                {
                    $resultset[$index2]["totalInactivo"] = $resultset_temp[$index]["totalInactivo"];
                    $encontrado=true;
                    break;
                }
            }

            if (!$encontrado)
            {
                array_push($resultset, $resultset_temp[$index]);
            }
        }

        // 3. Fecha Activas
        $fecha = new \DateTime('first day of this month');

        $statement = $connection->prepare("
          SELECT t.nombre as tipoinmuebleNombre, o.nombre as operacionInmuebleNombre, 0 as totalActivo, 0 as totalInactivo, COUNT(*) as fechaActivo, 0 as fechaInactivo,
          t.id as idTipoInmueble, o.id as idOperacionInmueble
          FROM inmueble i
          INNER JOIN tipoinmueble t ON t.id = i.id_tipo_inmueble
          INNER JOIN operacioninmueble o ON o.id = i.id_operacion_inmueble
          WHERE i.id_usuario = :idUsuario AND i.activo = true AND i.fecha_creacion >= :fecha
          GROUP BY t.nombre, o.nombre, i.activo"
        );
        $statement->bindValue('idUsuario', $idUsuario);
        $statement->bindValue('fecha', $fecha->format('Y-m-d H:i:s'));
        $statement->execute();

        $resultset_temp = $statement->fetchAll();

        // 2.1 Buscar coincidencia
        for ($index=0; $index<count($resultset_temp); $index++)
        {
            $encontrado = false;
            for ($index2=0; $index2<count($resultset); $index2++)
            {
                if ($resultset_temp[$index]["idTipoInmueble"] == $resultset[$index2]["idTipoInmueble"] &&
                    $resultset_temp[$index]["idOperacionInmueble"] == $resultset[$index2]["idOperacionInmueble"])
                {
                    $resultset[$index2]["fechaActivo"] = $resultset_temp[$index]["fechaActivo"];
                    $encontrado=true;
                    break;
                }
            }

            if (!$encontrado)
            {
                array_push($resultset, $resultset_temp[$index]);
            }
        }

        // 4. Fecha Inactivas
        $statement = $connection->prepare("
          SELECT t.nombre as tipoinmuebleNombre, o.nombre as operacionInmuebleNombre, 0 as totalActivo, 0 as totalInactivo, 0 as fechaActivo, COUNT(*) as fechaInactivo,
          t.id as idTipoInmueble, o.id as idOperacionInmueble
          FROM inmueble i
          INNER JOIN tipoinmueble t ON t.id = i.id_tipo_inmueble
          INNER JOIN operacioninmueble o ON o.id = i.id_operacion_inmueble
          WHERE i.id_usuario = :idUsuario AND i.activo = false AND i.fecha_creacion >= :fecha
          GROUP BY t.nombre, o.nombre, i.activo"
        );
        $statement->bindValue('idUsuario', $idUsuario);
        $statement->bindValue('fecha', $fecha->format('Y-m-d H:i:s'));
        $statement->execute();

        $resultset_temp = $statement->fetchAll();

        // 2.1 Buscar coincidencia
        for ($index=0; $index<count($resultset_temp); $index++)
        {
            $encontrado = false;
            for ($index2=0; $index2<count($resultset); $index2++)
            {
                if ($resultset_temp[$index]["idTipoInmueble"] == $resultset[$index2]["idTipoInmueble"] &&
                    $resultset_temp[$index]["idOperacionInmueble"] == $resultset[$index2]["idOperacionInmueble"])
                {
                    $resultset[$index2]["fechaInactivo"] = $resultset_temp[$index]["fechaInactivo"];
                    $encontrado=true;
                    break;
                }
            }

            if (!$encontrado)
            {
                array_push($resultset, $resultset_temp[$index]);
            }
        }

        return $resultset;
    }

    public function obtenerSiguienteLegacyId()
    {
        $siguienteLegacyId = $this->getEntityManager()
            ->createQuery(
                'SELECT MAX(i.legacyid) FROM AppBundle:Inmueble i'
            )->getSingleScalarResult();

        return $siguienteLegacyId+1;
    }

    /**
     * @param $idTipoInmueble
     * @param $idOperacionInmueble
     * @param $idEstado
     * @param $idMunicipio
     * @param $idColonia
     * @param $precio
     * @param $preciomax
     * @param $metrosterreno
     * @param $metrosterrenomax
     * @param $recamaras
     * @param $plantas
     */
    public function findByParameters($idTipoInmueble, $idOperacionInmueble, $idEstado, $idMunicipio, $colonia, $precio,
                                     $preciomax, $metrosterreno, $metrosterrenomax, $recamaras, $plantas,
                                     $preciometroterrenomin, $preciometroterrenomax, $preciometroconstruccionmin, $preciometroconstruccionmax,
                                     $metrosconstruccion, $metrosconstruccionmax,
                                     $alberca, $amueblado, $mostrarinactivas,
                                     $idUsuario, $idMoneda, $idcaracteristicas)
    {
        $query = 'SELECT i FROM AppBundle:Inmueble i
                  INNER JOIN AppBundle:OperacionInmueble oi WITH i.id_operacion_inmueble = oi.idOperacionInmueble
                  INNER JOIN AppBundle:Estado e WITH i.id_estado = e.idEstado
                  INNER JOIN AppBundle:Municipio m WITH i.id_municipio = m.idMunicipio';

        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idEstado >= 0 || $idMunicipio >= 0 || $colonia != NULL || $precio != NULL ||
            $preciomax != NULL || $metrosterreno != NULL || $metrosterrenomax != NULL || $recamaras != NULL || $plantas != NULL
            || $mostrarinactivas != NULL ||
            $metrosconstruccion != NULL || $metrosconstruccionmax != NULL ||
            $preciometroterrenomin != NULL || $preciometroterrenomax != NULL || $preciometroconstruccionmin != NULL || $preciometroconstruccionmax != NULL ||
            $idUsuario >= 0 || $idMoneda != NULL)
        {
            $query = $query . ' WHERE ';
            $colocarAnd = false;

            if ($mostrarinactivas == true)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' true = true';
                $colocarAnd = true;
            }
            else{
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.activo = true';
                $colocarAnd = true;
            }

            if ($idTipoInmueble > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_tipo_inmueble = :idTipoInmueble';
                $colocarAnd = true;
            }

            if ($idOperacionInmueble > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_operacion_inmueble = :idOperacionInmueble';
                $colocarAnd = true;
            }

            if ($idEstado > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_estado = :idEstado';
                $colocarAnd = true;
            }


            if ($idMunicipio > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_municipio = :idMunicipio';
                $colocarAnd = true;
            }

            if ($colonia != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.colonia LIKE :colonia';
                $colocarAnd = true;
            }

            if ($idMoneda != NULL)
            {
                if ($colocarAnd) {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_moneda = :idMoneda';
                $colocarAnd = true;
            }

            if ($precio != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.precio >= :precio';
                $colocarAnd = true;
            }

            if ($preciomax != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.precio <= :preciomax';
                $colocarAnd = true;
            }

            if ($preciometroterrenomin != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' (i.precio/i.metrosterreno) >= :preciometroterrenomin';
                $colocarAnd = true;
            }

            if ($preciometroterrenomax != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' (i.precio/i.metrosterreno) <= :preciometroterrenomax';
                $colocarAnd = true;
            }

            if ($metrosconstruccion != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.metrosconstruccion >= :metrosconstruccion';
                $colocarAnd = true;
            }

            if ($metrosconstruccionmax != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.metrosconstruccion <= :metrosconstruccionmax';
                $colocarAnd = true;
            }

            if ($preciometroconstruccionmin != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' (i.precio/i.metrosconstruccion) >= :preciometroconstruccionmin';
                $colocarAnd = true;
            }

            if ($preciometroconstruccionmax != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' (i.precio/i.metrosconstruccion) <= :preciometroconstruccionmax';
                $colocarAnd = true;
            }

            if ($metrosterreno != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.metrosterreno >= :metrosterreno';
                $colocarAnd = true;
            }

            if ($metrosterrenomax != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.metrosterreno <= :metrosterrenomax';
                $colocarAnd = true;
            }

            if ($recamaras != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.recamaras >= :recamaras';
                $colocarAnd = true;
            }

            if ($plantas != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.plantas >= :plantas';
                $colocarAnd = true;
            }

            if ($idUsuario > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' i.id_usuario = :idUsuario';
                $colocarAnd = true;
            }
        }

        // ORDERS
        $query = $query . ' ORDER BY i.precio ASC';
        if ($metrosterreno != NULL || $metrosterrenomax != NULL)
        {
            $query = $query . ', i.metrosterreno ASC';
        }

        //echo $query;

        $queryobject = $this->getEntityManager()
            ->createQuery($query);

        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idEstado >= 0 || $idMunicipio >= 0 || $colonia != NULL || $precio != NULL ||
            $preciomax != NULL || $metrosterreno != NULL || $metrosterrenomax != NULL || $recamaras > 0 || $plantas > 0 ||
            $preciometroterrenomin != NULL || $preciometroterrenomax != NULL || $preciometroconstruccionmin != NULL || $preciometroconstruccionmax != NULL ||
            $idUsuario >= 0 || $idMoneda != NULL
            )
        {
            if ($idTipoInmueble > 0)
            {
                $queryobject->setParameter('idTipoInmueble', $idTipoInmueble);
            }

            if ($idOperacionInmueble > 0)
            {
                $queryobject->setParameter('idOperacionInmueble', $idOperacionInmueble);
            }

            if ($idEstado > 0)
            {
                $queryobject->setParameter('idEstado', $idEstado);
            }

            if ($idMunicipio > 0)
            {
                $queryobject->setParameter('idMunicipio', $idMunicipio);
            }

            if ($colonia != NULL)
            {
                $queryobject->setParameter('colonia', '%' . $colonia . '%');
            }

            if ($idMoneda != NULL)
            {
                $queryobject->setParameter('idMoneda', $idMoneda);
            }

            if ($precio != NULL)
            {
                $queryobject->setParameter('precio', $precio);
            }
            if ($preciomax != NULL)
            {
                $queryobject->setParameter('preciomax', $preciomax);
            }
            if ($metrosterreno != NULL)
            {
                $queryobject->setParameter('metrosterreno', $metrosterreno);
            }
            if ($metrosterrenomax != NULL)
            {
                $queryobject->setParameter('metrosterrenomax', $metrosterrenomax);
            }
            if ($metrosconstruccion != NULL)
            {
                $queryobject->setParameter('metrosconstruccion', $metrosconstruccion);
            }
            if ($metrosconstruccionmax != NULL)
            {
                $queryobject->setParameter('metrosconstruccionmax', $metrosconstruccionmax);
            }
            if ($recamaras != NULL)
            {
                $queryobject->setParameter('recamaras', $recamaras);
            }
            if ($plantas != NULL)
            {
                $queryobject->setParameter('plantas', $plantas);
            }

            if ($preciometroterrenomin != NULL)
            {
                $queryobject->setParameter('preciometroterrenomin', $precio);
            }

            if ($preciometroterrenomax != NULL)
            {
                $queryobject->setParameter('preciometroterrenomax', $preciometroterrenomax);
            }

            if ($preciometroconstruccionmin != NULL)
            {
                $queryobject->setParameter('preciometroconstruccionmin', $preciometroconstruccionmin);
            }

            if ($preciometroconstruccionmax != NULL)
            {
                $queryobject->setParameter('preciometroconstruccionmax', $preciometroconstruccionmax);
            }

            if ($idUsuario > 0)
            {
                $queryobject->setParameter('idUsuario', $idUsuario);
            }
        }


        $resulset = $queryobject->getResult();

        // Buscar caracteristicas: AMUEBLADO, ALBERCA
        $resulsetfiltrado = array();
        if ($amueblado == true || $alberca == true)
        {
            // ACEPTAR
            foreach ($resulset as $inmueble)
            {
                $esamueblado=false;
                $esalberca=false;
                $aceptadoamueblado=true;
                $aceptadoalberca=true;

                foreach ($inmueble->getCaracteristicas() as $caracteristica)
                {
                    if ($caracteristica->getIdCaracteristica() == 17) // Amueblado
                    {
                        $esamueblado=true; break;
                    }
                }

                foreach ($inmueble->getCaracteristicas() as $caracteristica)
                {
                    if ($caracteristica->getIdCaracteristica() == 1) // Alberca
                    {
                        $esalberca=true; break;
                    }
                }

                if ($amueblado==true && !$esamueblado)
                {
                    $aceptadoamueblado = false;
                }

                if ($alberca==true && !$esalberca)
                {
                    $aceptadoalberca = false;
                }

                if ($aceptadoalberca==true && $aceptadoamueblado==true)
                {
                    array_push($resulsetfiltrado, $inmueble);
                }
            }

            $resulset = $resulsetfiltrado;
        }

        // BUSCAR CARACTERISTICAS
        $resulsetfiltrado = array();
        if ($idcaracteristicas)
        {

            foreach ($resulset as $inmueble) {

                $aceptado=false;

                // ACEPTAR
                foreach ($idcaracteristicas as $idcaracteristica) {
                    foreach ($inmueble->getCaracteristicas() as $caracteristica) {
                        if ($idcaracteristica->getIdCaracteristica() == $caracteristica->getIdCaracteristica())
                        {
                            //echo 'caract->'.$caracteristica->getIdCaracteristica().' idinmueble->'.$inmueble->getIdInmueble();

                            $aceptado=true; break;
                        }
                    }
                }

                if ($aceptado==true)
                {
                    array_push($resulsetfiltrado, $inmueble);
                }
            }

            $resulset = $resulsetfiltrado;
        }

        return $resulset;
    }
}