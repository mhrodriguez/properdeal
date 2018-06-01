<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/9/16
 * Time: 2:09 p.m.
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SolicitudRepository extends EntityRepository
{
    public function findByOwner($idUsuario)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s
                 WHERE s.id_usuario = :idUsuario AND s.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return $resultset;
    }

    public function findByOwnerCount($idUsuario)
    {
        $count = $this->getEntityManager()
            ->createQuery(
                'SELECT count(s) FROM AppBundle:Solicitud s
                 WHERE s.id_usuario = :idUsuario AND s.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getSingleScalarResult();

        return $count;
    }

    public function findByCount()
    {
        $count = $this->getEntityManager()
            ->createQuery(
                'SELECT count(s) FROM AppBundle:Solicitud s
                 WHERE  s.activo=1'
            )->getSingleScalarResult();

        return $count;
    }

    public function findAllButOwner($idUsuario)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s WHERE s.id_usuario <> :idUsuario AND s.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return $resultset;
    }

    public function findAllDateMayor($fecha)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s
                 WHERE s.fechaCreacion >= :fecha'
            )->setParameter('fecha', $fecha)->getResult();

        return $resultset;
    }

    public function findAllDateMenor($fecha)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s
                 WHERE s.fechaCreacion <= :fecha'
            )->setParameter('fecha', $fecha)->getResult();

        return $resultset;
    }

    public function findBySearchString($buscar)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s
                 WHERE s.descripcion LIKE :buscar'
            )->setParameter('buscar', '%' . $buscar . '%')->getResult();

        return $resultset;
    }

    public function findByOwnerParent($idUsuario)
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM AppBundle:Solicitud s WHERE s.id_usuario = :idUsuarioPadre AND s.activo=1'
            )->setParameter('idUsuarioPadre', $idUsuario->getIdUsuarioPadre())->getResult();

        return $resultset;
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
    public function findByParameters($idTipoInmueble, $idOperacionInmueble, $idEstado, $ciudad, $colonia, $precio,
                                     $preciomax, $metrosterreno, $metrosterrenomax, $caracteristicas, $fecha, $idMoneda)
    {
        $query = 'SELECT s FROM AppBundle:Solicitud s
                  INNER JOIN AppBundle:OperacionInmueble oi WITH s.id_operacion_inmueble = oi.idOperacionInmueble
                  INNER JOIN AppBundle:Estado e WITH s.id_estado = e.idEstado';

        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idEstado >= 0 || $ciudad != NULL || $colonia != NULL || $precio != NULL ||
            $preciomax != NULL || $metrosterreno != NULL || $metrosterrenomax != NULL || $fecha != NULL || $idMoneda >= 0)
        {
            $query = $query . ' WHERE ';
            $colocarAnd = false;

            if ($idTipoInmueble > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.id_tipo_inmueble = :idTipoInmueble';
                $colocarAnd = true;
            }

            if ($idOperacionInmueble > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.id_operacion_inmueble = :idOperacionInmueble';
                $colocarAnd = true;
            }

            if ($idEstado > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.id_estado = :idEstado';
                $colocarAnd = true;
            }

            if ($ciudad != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.ciudad LIKE :ciudad';
                $colocarAnd = true;
            }

            if ($colonia != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.colonia LIKE :colonia';
                $colocarAnd = true;
            }

            if ($precio != NULL && $preciomax != NULL)
            {
                if ($colocarAnd) {
                    $query = $query . ' AND ';
                }

                $query = $query . ' ( (:precio >= s.precio AND :precio <= s.preciomax) OR (:preciomax >= s.precio AND :preciomax <= s.preciomax) )';
                $colocarAnd = true;
            }
            else {
                if ($precio != NULL) {
                    if ($colocarAnd) {
                        $query = $query . ' AND ';
                    }
                    $query = $query . ' ( (:precio >= s.precio AND :precio <= s.preciomax) )';
                    $colocarAnd = true;
                }
                if ($preciomax != NULL) {
                    if ($colocarAnd) {
                        $query = $query . ' AND ';
                    }
                    $query = $query . ' ( (:preciomax >= s.precio AND :preciomax <= s.preciomax) )';
                    $colocarAnd = true;
                }
            }

            if ($metrosterreno != NULL && $metrosterrenomax != NULL) {
                if ($colocarAnd) {
                    $query = $query . ' AND ';
                }

                $query = $query . ' ( (:metrosterreno >= s.metrosterreno AND :metrosterreno <= s.metrosterrenomax) OR (:metrosterrenomax >= s.metrosterreno AND :metrosterrenomax <= s.metrosterrenomax) )';
                $colocarAnd = true;
            }
            else
            {
                if ($metrosterreno != NULL) {
                    if ($colocarAnd) {
                        $query = $query . ' AND ';
                    }
                    $query = $query . ' s.metrosterreno >= :metrosterreno';
                    $colocarAnd = true;
                }

                if ($metrosterrenomax != NULL) {
                    if ($colocarAnd) {
                        $query = $query . ' AND ';
                    }
                    $query = $query . ' s.metrosterrenomax <= :metrosterrenomax';
                    $colocarAnd = true;
                }
            }

            if ($fecha != NULL)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.fechaCreacion >= :fecha';
                $colocarAnd = true;
            }

            if ($idMoneda > 0)
            {
                if ($colocarAnd)
                {
                    $query = $query . ' AND ';
                }
                $query = $query . ' s.id_moneda = :idMoneda';
                $colocarAnd = true;
            }
        }

        $queryobject = $this->getEntityManager()
            ->createQuery($query);

        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idEstado >= 0 || $ciudad != NULL || $colonia != NULL || $precio != NULL ||
            $preciomax != NULL || $metrosterreno != NULL || $metrosterrenomax != NULL || $idMoneda >= 0)
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
            if ($ciudad != NULL)
            {
                $queryobject->setParameter('ciudad', '%' . $ciudad . '%');
            }
            if ($colonia != NULL)
            {
                $queryobject->setParameter('colonia', '%' . $colonia . '%');
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
            if ($fecha != NULL)
            {
                $queryobject->setParameter('fecha', $fecha);
            }
            if ($idMoneda > 0)
            {
                $queryobject->setParameter('idMoneda', $idMoneda);
            }
        }

        $resulset = $queryobject->getResult();
        $resulsetfinal = array();

        if (count($caracteristicas)>0)
        {
            for($i = 0; $i < count($resulset); ++$i) {
                $solicitud = $resulset[$i];
                $encontrado = false;

                $solicitudCaracteristicas = $solicitud->getCaracteristicas();
                for($j = 0; $j < count($solicitudCaracteristicas); ++$j) {
                    $caracteristica = $solicitudCaracteristicas[$j];

                    for($k = 0; $k < count($caracteristicas); ++$k)
                    {
                        $caracteristicaBuscada = $caracteristicas[$k];
                        if ($caracteristicaBuscada->getIdCaracteristica() == $caracteristica->getIdCaracteristica())
                        {
                            $encontrado=true;
                            break;
                        }
                    }
                    if ($encontrado) break;
                }

                if ($encontrado)
                {
                    array_push($resulsetfinal, $solicitud);
                }
            }
        }
        else{
            $resulsetfinal=$resulset;
        }

        return $resulsetfinal;
    }

}