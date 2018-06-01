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
    public function findByTop5()
    {
        $resultset = $this->getEntityManager()
            ->createQuery(
                "SELECT i FROM AppBundle:Inmueble i WHERE i.activo = 1 AND i.privado = 0 ORDER BY i.fechaCreacion DESC"
            )->setMaxResults(5)->getResult();


        return $resultset;
    }

    public function findByOwner($idUsuario)
    {
        $resultset1 = $this->findBy(array('id_usuario' => $idUsuario));

        $resultset2 = $this->getEntityManager()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.privado = 0 AND i.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getResult();

        return array_merge($resultset2, $resultset1);
    }

    public function findByOwnerCount($idUsuario)
    {
        $count1 = count($this->findBy(array('id_usuario' => $idUsuario)));

        $count2 = $this->getEntityManager()
            ->createQuery(
                'SELECT count(i.idInmueble) FROM AppBundle:Inmueble i JOIN i.id_usuario u WHERE u.idUsuarioPadre = :idUsuario AND i.privado=0 AND i.activo=1'
            )->setParameter('idUsuario', $idUsuario)->getSingleScalarResult();

        return $count1 + $count2;
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
    public function findByParameters($idTipoInmueble, $idOperacionInmueble, $idCategoriaInmueble, $idEstado, $idMunicipio, $colonia, $precio,
                                     $preciomax, $metrosterreno, $metrosterrenomax, $metrosconstruccion, $metrosconstruccionmax, $recamaras, $plantas, $idZona,
                                     $alberca, $amueblado, $legacyid, $idMoneda)
    {

        $query = 'SELECT i FROM AppBundle:Inmueble i
                  INNER JOIN AppBundle:OperacionInmueble oi WITH i.id_operacion_inmueble = oi.idOperacionInmueble
                  INNER JOIN AppBundle:TipoInmueble ti WITH i.id_tipo_inmueble = ti.idTipoInmueble
                  INNER JOIN AppBundle:Estado e WITH i.id_estado = e.idEstado';
//INNER JOIN AppBundle:Zona z WITH i.id_zona = z.idZona

        $query = $query . ' WHERE (i.activo = 1 AND i.privado=0';

        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idCategoriaInmueble >= 0 || $idEstado >= 0 || ($idMunicipio >= 0) || ($colonia != NULL && $colonia != '') || $precio != NULL ||
            ($preciomax != NULL && $preciomax != -1) || $metrosterreno != NULL || $metrosterrenomax != NULL ||
            $metrosconstruccion != NULL || $metrosconstruccionmax != NULL ||
            $recamaras != NULL || $plantas != NULL || $idZona > 0 || $idMoneda != NULL)
        {
            if ($idTipoInmueble > 0)
            {
                $query = $query . ' AND i.id_tipo_inmueble = :idTipoInmueble';
            }

            if ($idCategoriaInmueble >= 0)
            {
                $query = $query . ' AND ti.id_categoria_inmueble = :idCategoriaInmueble';
            }

            if ($idOperacionInmueble >= 0)
            {
                $query = $query . ' AND i.id_operacion_inmueble = :idOperacionInmueble';
            }

            if ($idEstado >= 0)
            {
                $query = $query . ' AND i.id_estado = :idEstado';
            }

            if ($idMoneda >= 0)
            {
                $query = $query . ' AND i.id_moneda = :idMoneda';
            }

            if ($idZona > 0)
            {
                $query = $query . ' AND i.id_zona = :idZona';
            }

            if ($idMunicipio >= 0)
            {
                $query = $query . ' AND i.id_municipio = :idMunicipio';
            }

            if ($colonia != NULL && $colonia != '')
            {
                $query = $query . ' AND i.colonia LIKE :colonia';
            }

            if ($precio != NULL)
            {
                $query = $query . ' AND i.precio >= :precio';
            }

            if ($preciomax != NULL && $preciomax != -1)
            {
                $query = $query . ' AND i.precio <= :preciomax';
            }

            if ($metrosterreno != NULL)
            {
                $query = $query . ' AND i.metrosterreno >= :metrosterreno';
            }

            if ($metrosterrenomax != NULL)
            {
                $query = $query . ' AND i.metrosterreno <= :metrosterrenomax';
            }

            if ($metrosconstruccion != NULL)
            {
                $query = $query . ' AND i.metrosconstruccion >= :metrosconstruccion';
            }

            if ($metrosconstruccionmax != NULL)
            {
                $query = $query . ' AND i.metrosconstruccion <= :metrosconstruccionmax';
            }

            if ($recamaras != NULL)
            {
                $query = $query . ' AND i.recamaras = :recamaras';
            }

            if ($plantas != NULL)
            {
                $query = $query . ' AND i.plantas = :plantas';
            }
        }

        $query = $query . ')';

        if ($legacyid != NULL)
        {
            $query = $query . ' OR (i.legacyid LIKE :legacyid AND i.activo = 1 AND i.privado=0)';
        }

        $query = $query . ' ORDER BY i.precio ASC';
        if ($metrosterreno != NULL || $metrosterrenomax != NULL)
        {
            $query = $query . ', i.metrosterreno ASC';
        }

        $queryobject = $this->getEntityManager()
            ->createQuery($query);


        if ($idTipoInmueble > 0 || $idOperacionInmueble >= 0 || $idCategoriaInmueble >= 0 || $idEstado >= 0 || ($idMunicipio >= 0)  || ($colonia != NULL && $colonia != '') || $precio != NULL ||
            $preciomax != NULL || $metrosterreno != NULL || $metrosterrenomax != NULL ||
            $metrosconstruccion != NULL || $metrosconstruccionmax != NULL ||
            $recamaras > 0 || $plantas > 0 || $idZona > 0 || $legacyid != NULL || $idMoneda != NULL)
        {
            if ($idTipoInmueble > 0)
            {
                $queryobject->setParameter('idTipoInmueble', $idTipoInmueble);
            }

            if ($idOperacionInmueble >= 0)
            {
                $queryobject->setParameter('idOperacionInmueble', $idOperacionInmueble);
            }

            if ($idCategoriaInmueble >= 0)
            {
                $queryobject->setParameter('idCategoriaInmueble', $idCategoriaInmueble);
            }

            if ($idEstado >= 0)
            {
                $queryobject->setParameter('idEstado', $idEstado);
            }

            if ($idMoneda >= 0)
            {
                $queryobject->setParameter('idMoneda', $idMoneda);
            }

            if ($idZona > 0)
            {
                $queryobject->setParameter('idZona', $idZona);
            }

            if ($idMunicipio >= 0)
            {
                $queryobject->setParameter('idMunicipio', $idMunicipio);
            }

            if ($colonia != NULL && $colonia != '')
            {
                $queryobject->setParameter('colonia', '%' . $colonia . '%');
            }

            if ($precio != NULL)
            {
                $queryobject->setParameter('precio', $precio);
            }
            if ($preciomax != NULL && $preciomax != -1)
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

            if ($legacyid != NULL)
            {
                $queryobject->setParameter('legacyid', '%' . $legacyid . '%');
            }
        }


       //o echo $query;

        $resulset = $queryobject->getResult();

        // Buscar caracteristicas
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

        return $resulset;
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
    public function findByPrecioRango($idCategoriaInmueble, $idTipoInmueble, $idOperacionInmueble, $idMunicipio, $preciomin, $preciomax, $idMoneda)
    {
        $query = 'SELECT i FROM AppBundle:Inmueble i
                  INNER JOIN AppBundle:OperacionInmueble oi WITH i.id_operacion_inmueble = oi.idOperacionInmueble
                  INNER JOIN AppBundle:TipoInmueble ti WITH i.id_tipo_inmueble = ti.idTipoInmueble
                  INNER JOIN AppBundle:CategoriaInmueble ci WITH ti.id_categoria_inmueble = ci.idCategoriaInmueble
                  ';

        $query = $query . ' WHERE (i.activo = 1 AND i.privado=0';
        $query = $query . ' AND i.id_tipo_inmueble = :idTipoInmueble';
        $query = $query . ' AND i.id_operacion_inmueble = :idOperacionInmueble';
        $query = $query . ' AND i.id_moneda = :idMoneda';
        $query = $query . ' AND i.id_municipio = :idMunicipio';
        $query = $query . ' AND i.precio >= :preciomin';

        if ($preciomax != -1) {
            $query = $query . ' AND i.precio <= :preciomax';
        }

        $query = $query . ')';

        $queryobject = $this->getEntityManager()
            ->createQuery($query);

        $queryobject->setParameter('idTipoInmueble', $idTipoInmueble);
        $queryobject->setParameter('idOperacionInmueble', $idOperacionInmueble);
        $queryobject->setParameter('idMoneda', $idMoneda);
        $queryobject->setParameter('idMunicipio', $idMunicipio);
        $queryobject->setParameter('preciomin', $preciomin);

        if ($preciomax != -1) {
            $queryobject->setParameter('preciomax', $preciomax);
        }
        // echo $query;

        $resulset = $queryobject->getResult();

        return $resulset;
    }

}