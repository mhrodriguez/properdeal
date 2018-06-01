<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Inmueble;
use AppBundle\Entity\InmuebleAccesorio;
use AppBundle\Entity\Zona;
use AppBundle\Entity\Moneda;
use AppBundle\Form\InmuebleType;
use AppBundle\Form\InmuebleAccesorioType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Inmueble controller.
 *
 * @Route("/inmueble")
 */
class InmuebleController extends Controller
{
    private $paginaTamano = 10;

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/index.{_format}", name="inmueble_index", defaults= {"_format"="html"}, requirements = {"_format"="html|xls"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $numPaginas=-1; $hayFiltros=false; $paginaActual=1;
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        if ($_format == "xls")
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array(), array('fechaCreacion' => 'DESC'));
            } else {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
            }

            return $this->crearExcel($inmuebles, 'propiedades_' . $authuser->getNombre() . '_' . date('YmdHi') . '.xlsx');
        }
        else
        {
            $modificadas = $request->query->get('modificadas');

            $rootname = $this->container->getParameter('domain_root_name');

            if ($modificadas == NULL) {

                // 0. Verificar si hay que filtrar informacion
                $idAsesor = intVal($request->query->get('idAsesor'));
                $idZona = intVal($request->query->get('idZona'));
                $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
                $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
                $id = $request->query->get('id');

                if ($request->query->get('pagina') != null) {
                    $paginaActual = intval($request->query->get('pagina'));
                }

                if ($idAsesor != null || $idZona != null || $idTipoInmueble != null || $idOperacionInmueble != null || $id != null) {
                    $hayFiltros = true;
                }

                if ($idAsesor != NULL && $idAsesor > 0) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($idAsesor);
                } else if ($id != NULL && $id != "") {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
                } else {
                    // Si es SUPER ADMIN
                    if ($authuser->getRol()->getIdRol() == 4) {

                        //if (!$hayFiltros) {
                            // Todos - Por pagina
                        //    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findAllPaged(
                        //        ($paginaActual - 1) * $paginaTamano, $paginaTamano);
                        //} else {
                            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo'=>1), array('fechaCreacion' => 'DESC'));
                        //}

                    } else {

                        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                        /*
                        if ($hayFiltros) {
                            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                        } else {
                            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($authuser->getId(), true);
                        }*/
                    }
                }

                if ($hayFiltros) {
                    $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);
                }

                if ($authuser->getRol()->getIdRol() != 4) {
                    $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
                }

                // 1. INFO PARA FILTRO
                $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
                $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();
                $tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findAll();
                $zonas = $em->getRepository('AppBundle:Zona')->findAll();

                $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

                // Paginacion
                $countInmuebles = count($inmuebles);
                $numPaginas = ceil($countInmuebles / $this->paginaTamano);

                // Ordenar
                $inmuebles = $this->ordenarInmuebles($inmuebles, $paginaActual);

                // Visitas
                foreach ($inmuebles as $inmueble)
                {
                    $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
                    array_push($visitas, $count);
                }

                return $this->render('inmueble/index.html.twig', array(
                    'inmuebles' => $inmuebles,
                    'ida' => $authuser->getId(),

                    'visitas' => $visitas,

                    'zonas' => $zonas,
                    'asesores' => $usuarios,
                    'operacionesInmueble' => $operacionesInmueble,
                    'tiposInmueble' => $tiposInmueble,
                    'url' => 'inmueble_index',
                    'url_imprimir' => 'inmueble_indeximprimir',
                    'rootname' => $rootname,

                    'idTipoInmueble' => $idTipoInmueble,
                    'idOperacionInmueble' => $idOperacionInmueble,
                    'idAsesor' => $idAsesor,
                    'idZona' => $idZona,

                    'id' => $id,

                    'asesorpermisos' => $asesorPermisos,

                    'numpaginas' => $numPaginas,
                    'paginaactual' => $paginaActual,

                    'titulo' => 'Activas'
                ));
            }
            else{
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerAndModified($authuser->getId());

                foreach ($inmuebles as $inmueble)
                {
                    $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
                    array_push($visitas, $count);
                }

                // Ordenar
                $inmuebles = $this->ordenarInmuebles($inmuebles);

                return $this->render('inmueble/index.html.twig', array(
                    'inmuebles' => $inmuebles,
                    'ida' => $authuser->getId(),
                    'visitas' => $visitas,
                    'asesores' => NULL,
                    'url_imprimir' => 'inmueble_indeximprimir',
                    'rootname' => $rootname,
                ));
            }
        }
   }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indeximprimir", name="inmueble_indeximprimir")
     * @Method("GET")
     */
    public function indeximprimirAction(Request $request)
    {
        $hayFiltros=false;
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != null || $idZona != null || $idTipoInmueble != null || $idOperacionInmueble != null || $id != null)
        {
            $hayFiltros=true;
        }

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($idAsesor);
        }
        else if ($id!=NULL && $id!="")
        {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                /*if (!$hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo'=>1), array('fechaCreacion' => 'DESC'));
                }
                else
                {*/
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo'=>1), array('fechaCreacion' => 'DESC'));
                //}
            } else {

                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                /*
                if ($hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                }
                else
                {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($authuser->getId(), true);
                }*/
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles);

        return $this->render('inmueble/indeximprimir.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),
            'visitas' => $visitas
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indexinactivos", name="inmueble_indexinactivos")
     * @Method("GET")
     */
    public function indexinactivosAction(Request $request)
    {
        $hayFiltros=false; $numPaginas=-1; $paginaActual=1;
        $comisiones = array();
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $rootname = $this->container->getParameter('domain_root_name');

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($request->query->get('pagina') != null) {
            $paginaActual = intval($request->query->get('pagina'));
        }

        if ($idAsesor != null || $idZona != null || $idTipoInmueble != null || $idOperacionInmueble != null || $id != null)
        {
            $hayFiltros=true;
        }

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($idAsesor, false);
        }
        else if ($id!=NULL && $id!="")
        {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                /*if ($hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array(), array('fechaCreacion' => 'DESC'));
                }
                else
                {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo' => false), array('fechaCreacion' => 'DESC'));
                }*/
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo' => false), array('fechaCreacion' => 'DESC'));
            } else {
                /*if ($hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                }
                else
                {*/
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($authuser->getId(), false);
                //}
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        // 1. INFO PARA FILTRO
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();
        $tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findAll();
        $zonas = $em->getRepository('AppBundle:Zona')->findAll();

        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

        // Paginacion
        $countInmuebles = count($inmuebles);
        $numPaginas = ceil($countInmuebles / $this->paginaTamano);

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles, $paginaActual);

        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        return $this->render('inmueble/index.html.twig', array(
                'inmuebles' => $inmuebles,
                'ida' => $authuser->getId(),

                'visitas' => $visitas,

            'zonas' => $zonas,
            'asesores' => $usuarios,
            'operacionesInmueble' => $operacionesInmueble,
            'tiposInmueble' => $tiposInmueble,
            'url' => 'inmueble_indexinactivos',
            'url_imprimir' => 'inmueble_indeximprimirinactivos',
            'rootname' => $rootname,

            'idTipoInmueble' => $idTipoInmueble,
            'idOperacionInmueble' => $idOperacionInmueble,
            'idAsesor' => $idAsesor,
            'idZona' => $idZona,
            'id' => $id,

            'numpaginas' => $numPaginas,
            'paginaactual' => $paginaActual,

            'asesorpermisos' => $asesorPermisos,

            'titulo' => 'Inactivas'
            ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indeximprimirinactivos", name="inmueble_indeximprimirinactivos")
     * @Method("GET")
     */
    public function indeximprimirinactivosAction(Request $request)
    {
        $hayFiltros=false;
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != null || $idZona != null || $idTipoInmueble != null || $idOperacionInmueble != null || $id != null)
        {
            $hayFiltros=true;
        }

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($idAsesor, false);
        }
        else if ($id!=NULL && $id!="")
        {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                /*if ($hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array(), array('fechaCreacion' => 'DESC'));
                }
                else
                {*/
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('activo' => false), array('fechaCreacion' => 'DESC'));
                //}
            } else {
                /*if ($hayFiltros) {
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());
                }
                else
                {*/
                    $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($authuser->getId(), false);
                //}
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles);

        return $this->render('inmueble/indeximprimir.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),
            'visitas' => $visitas
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indexenrentaAction", name="inmueble_indexenrenta")
     * @Method("GET")
     */
    public function indexenrentaAction(Request $request)
    {
        $numPaginas=-1; $paginaActual=1;

        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $rootname = $this->container->getParameter('domain_root_name');

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacion($idAsesor, 2); // 2. Renta
        }
        else if ($id!=NULL && $id!="")
        {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOperacion(2); // 2. Renta
            } else {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacion($authuser->getId(), 2); // 2. Renta
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        // 1. INFO PARA FILTRO
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();
        $tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findAll();
        $zonas = $em->getRepository('AppBundle:Zona')->findAll();

        if ($request->query->get('pagina') != null) {
            $paginaActual = intval($request->query->get('pagina'));
        }

        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

        // Paginacion
        $countInmuebles = count($inmuebles);
        $numPaginas = ceil($countInmuebles / $this->paginaTamano);

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles, $paginaActual);

        // Visitas
        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        return $this->render('inmueble/index.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),

            'visitas' => $visitas,

            'zonas' => $zonas,
            'asesores' => $usuarios,
            'operacionesInmueble' => $operacionesInmueble,
            'tiposInmueble' => $tiposInmueble,
            'url' => 'inmueble_indexenrenta',
            'url_imprimir' => 'inmueble_indeximprimirenrenta',
            'rootname' => $rootname,

            'idTipoInmueble' => $idTipoInmueble,
            'idOperacionInmueble' => $idOperacionInmueble,
            'idAsesor' => $idAsesor,
            'idZona' => $idZona,
            'id' => $id,

            'numpaginas' => $numPaginas,
            'paginaactual' => $paginaActual,

            'asesorpermisos' => $asesorPermisos,

            'titulo' => 'En contrato de renta'
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indeximprimirenrenta", name="inmueble_indeximprimirenrenta")
     * @Method("GET")
     */
    public function indeximprimirenrentaAction(Request $request)
    {
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        //$inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacion($authuser->getId(), 2); // 2. Renta

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacion($idAsesor, 2); // 2. Renta
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOperacion(2); // 2. Renta
            } else {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerOperacion($authuser->getId(), 2); // 2. Renta
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles);

        return $this->render('inmueble/indeximprimir.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),
            'visitas' => $visitas
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indexenrentavencimientoAction", name="inmueble_indexenrentavencimiento")
     * @Method("GET")
     */
    public function indexenrentavencimientoAction(Request $request)
    {
        $numPaginas=-1; $paginaActual=1;

        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $rootname = $this->container->getParameter('domain_root_name');

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerRentaFechaVencimiento($idAsesor, new \DateTime()); // 2. Renta
        }
        else if ($id!=NULL && $id!="")
        {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByIDNombreID($id);
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByRentaFechaVencimiento(new \DateTime()); // 2. Renta
            } else {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerRentaFechaVencimiento($authuser->getId(), new \DateTime()); // 2. Renta
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        // 1. INFO PARA FILTRO
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();
        $tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findAll();
        $zonas = $em->getRepository('AppBundle:Zona')->findAll();

        if ($request->query->get('pagina') != null) {
            $paginaActual = intval($request->query->get('pagina'));
        }

        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

        // Paginacion
        $countInmuebles = count($inmuebles);
        $numPaginas = ceil($countInmuebles / $this->paginaTamano);

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles, $paginaActual);

        // Visitas
        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        return $this->render('inmueble/index.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),

            'visitas' => $visitas,

            'zonas' => $zonas,
            'asesores' => $usuarios,
            'operacionesInmueble' => $operacionesInmueble,
            'tiposInmueble' => $tiposInmueble,
            'url' => 'inmueble_indexenrentavencimiento',
            'url_imprimir' => 'inmueble_indeximprimirenrentavencimiento',
            'rootname' => $rootname,

            'idTipoInmueble' => $idTipoInmueble,
            'idOperacionInmueble' => $idOperacionInmueble,
            'idAsesor' => $idAsesor,
            'idZona' => $idZona,
            'id' => $id,

            'numpaginas' => $numPaginas,
            'paginaactual' => $paginaActual,

            'asesorpermisos' => $asesorPermisos,

            'titulo' => 'Por vencer en 45 días'
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/indeximprimirenrentavencimiento", name="inmueble_indeximprimirenrentavencimiento")
     * @Method("GET")
     */
    public function indeximprimirenrentavencimientoAction(Request $request)
    {
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        // 0. Verificar si hay que filtrar informacion
        $idAsesor = intVal($request->query->get('idAsesor'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $idZona = intVal($request->query->get('idZona'));
        $id = $request->query->get('id');

        if ($idAsesor != NULL && $idAsesor > 0) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerRentaFechaVencimiento($idAsesor, new \DateTime()); // 2. Renta
        }
        else
        {
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByRentaFechaVencimiento(new \DateTime()); // 2. Renta
            } else {
                $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerRentaFechaVencimiento($authuser->getId(), new \DateTime()); // 2. Renta
            }
        }

        $inmuebles = $this->filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = $this->filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        foreach ($inmuebles as $inmueble)
        {
            $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
            array_push($visitas, $count);
        }

        // Ordenar
        $inmuebles = $this->ordenarInmuebles($inmuebles);

        return $this->render('inmueble/indeximprimir.html.twig', array(
            'inmuebles' => $inmuebles,
            'ida' => $authuser->getId(),
            'visitas' => $visitas
        ));
    }


    /**
     * Lists all Inmueble entities.
     *
     * @Route("/captaciones", name="inmueble_captaciones")
     * @Method("GET")
     */
    public function captacionesAction(Request $request)
    {
        $visitas = array();
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $fechaHoy = new \DateTime();
        date_sub($fechaHoy, date_interval_create_from_date_string('5 days'));

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerAndDate($authuser->getId(), $fechaHoy);

        foreach ($inmuebles as $inmueble)
        {
                $count = count($em->getRepository('AppBundle:InmuebleActividad')->findBy(array('id_inmueble'=>$inmueble, 'actividadcodigo' => 1)));
                array_push($visitas, $count);
        }

        return $this->render('inmueble/captaciones.html.twig', array(
                    'inmuebles' => $inmuebles,
                    'visitas' => $visitas
                ));
    }

    /**
     * Creates a new Inmueble entity.
     *
     * @Route("/new", name="inmueble_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error = false;

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

        if ($request->isMethod('GET')) {
            $municipios = array();
        }
        else
        {
            $inmueble = $this->get('request')->request->get('inmueble');

            $estado = $estados[$inmueble["id_estado"]];

            $municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado'=>$estado, 'activo'=>true));
        }

        $zonas = $this->getDoctrine()
            ->getRepository('AppBundle:Zona')
            ->findAll();

        $caracteristicas = $this->getDoctrine()
            ->getRepository('AppBundle:Caracteristica')
            ->findAll();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findBy(array(), array('nombre' => 'ASC'));

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findAll();

        $tiposTerreno = $this->getDoctrine()
            ->getRepository('AppBundle:TipoTerreno')
            ->findAll();

        $instalacionesElectricas = $this->getDoctrine()
            ->getRepository('AppBundle:InstalacionElectrica')
            ->findAll();

        $cuartosServicio = $this->getDoctrine()
            ->getRepository('AppBundle:CuartoServicio')
            ->findAll();

        $tiposClima = $this->getDoctrine()
            ->getRepository('AppBundle:TipoClima')
            ->findAll();

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        // Si es SUPER ADMIN
        if ($authuser->getRol()->getIdRol() == 4) {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
        } else {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
                array('idUsuarioPadre' => $authuser->getId())
            );
            array_unshift($usuarios, $authuser);
        }

        $inmueble = new Inmueble();
        $inmueble->setActivo(true);
        $inmueble->setModificado(false);
        $inmueble->setOficina("Proper Deal");
        $form = $this->createForm('AppBundle\Form\InmuebleType', $inmueble,
            array('estados' => $estados,
                'usuarios' => $usuarios,
                'municipios' => $municipios,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                'zonas' => $zonas,
                'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'tiposterreno' => $tiposTerreno,
                'instalacioneselectrica' => $instalacionesElectricas,
                'cuartosservicio' => $cuartosServicio,
                'tiposclima' => $tiposClima
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fechaalta = $request->request->get('inmueble_fechaalta', '');

            // Verificar si el LegacyID ya existe
            $inmueblebusqueda = $em->getRepository('AppBundle:Inmueble')->findOneByLegacyid($inmueble->getLegacyid());

            if ($inmueblebusqueda == NULL) {

                $inmueble->setActivo(true);
                $inmueble->setFechaAlta(new \DateTime($fechaalta));
                $inmueble->setModificado(false);

                // Obtener Siguiente LegacyID
                $siguienteLegacyId = $em->getRepository('AppBundle:Inmueble')->obtenerSiguienteLegacyId();
                $inmueble->setLegacyid($siguienteLegacyId);

                if ($inmueble->getPreciohasta() == NULL)
                {
                    $inmueble->setPreciohasta(0);
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($inmueble);
                $em->flush();

                return $this->redirectToRoute('inmueble_index', array());
            }
            else
            {
                $form->get("legacyid")->addError(new FormError("Este ID ya está siendo utilizado."));
            }
        }

        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

        return $this->render('inmueble/new.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
            'default_idestado' => 18,
            'permisodestacado' => $asesorPermisos->getDestacarpropiedad()
        ));
    }

    /**
     * Finds and displays a Inmueble entity.
     *
     * @Route("/{id}", name="inmueble_show")
     * @Method("GET")
     */
    public function showAction(Inmueble $inmueble)
    {
        $caracteristicasDesc = array();
        foreach ($inmueble->getCaracteristicas() as $caracteristica)
        {
            array_push($caracteristicasDesc, $caracteristica->getNombre());
        }
        $inmueble->setCaracteristicas(array());

        return $this->render('inmueble/show.html.twig', array(
            'inmueble' => $inmueble,
            'caracteristicasDesc' => $caracteristicasDesc
        ));
    }

    /**
     * Finds and displays a Inmueble entity.
     *
     * @Route("/{id}/detalle", name="inmueble_detalle")
     * @Method("GET")
     */
    public function detalleAction(Inmueble $inmueble)
    {
        $error=false;

        $caracteristicasDesc = array();
        foreach ($inmueble->getCaracteristicas() as $caracteristica)
        {
            array_push($caracteristicasDesc, $caracteristica->getNombre());
        }
        $inmueble->setCaracteristicas(array());

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

        $municipios = $this->getDoctrine()
            ->getRepository('AppBundle:Municipio')
            ->findBy(array('estado'=>$inmueble->getIdEstado(), 'activo'=>true));

        $zonas = $this->getDoctrine()
            ->getRepository('AppBundle:Zona')
            ->findAll();

        $caracteristicas = $this->getDoctrine()
            ->getRepository('AppBundle:Caracteristica')
            ->findAll();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findAll();

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findAll();

        $tiposTerreno = $this->getDoctrine()
            ->getRepository('AppBundle:TipoTerreno')
            ->findAll();

        $instalacionesElectricas = $this->getDoctrine()
            ->getRepository('AppBundle:InstalacionElectrica')
            ->findAll();

        $cuartosServicio = $this->getDoctrine()
            ->getRepository('AppBundle:CuartoServicio')
            ->findAll();

        $tiposClima = $this->getDoctrine()
            ->getRepository('AppBundle:TipoClima')
            ->findAll();

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        $form = $this->createForm('AppBundle\Form\InmuebleType', $inmueble,
            array('estados' => $estados,
                'usuarios' => $usuarios,
                'tiposInmueble' => $tiposInmueble,
                'municipios' => $municipios,
                'operacionesInmueble' => $operacionesInmueble,
                'zonas' => $zonas,
                'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'tiposterreno' => $tiposTerreno,
                'instalacioneselectrica' => $instalacionesElectricas,
                'cuartosservicio' => $cuartosServicio,
                'tiposclima' => $tiposClima
            )
        );

        // Buscar estado seleccionado
        $indexEstado = 0;
        foreach ($estados as $estado)
        {
            if ($estado->getIdEstado() ==  $inmueble->getIdEstado()->getIdEstado())
            {
                break;
            }
            $indexEstado = $indexEstado +1;
        }

        $fechaalta = $inmueble->getFechaAlta()->format('Y-m-d');

        return $this->render('inmueble/show.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
            'default_idestado' => $indexEstado,
            'caracteristicasDesc' => $caracteristicasDesc,
            'fechaAlta' => $fechaalta
        ));
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     * @Route("/{id}/keywords", name="inmueble_keywords")
     * @Method({"GET", "POST"})
     */
    public function keywordsAction(Request $request, Inmueble $inmueble)
    {
        $editForm = $this->createForm('AppBundle\Form\InmuebleKeywordsType', $inmueble);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inmueble);
            $em->flush();

            return $this->redirectToRoute('inmueble_index', array());
        }

        return $this->render('inmueble/keywords.html.twig', array(
            'inmueble' => $inmueble,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     * @Route("/{id}/edit", name="inmueble_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inmueble $inmueble)
    {
        $em = $this->getDoctrine()->getManager();

        $authuser = $this->get('security.context')->getToken()->getUser();

        if ($request->isMethod('GET'));
        {
            $caracteristicasDesc = array();
            foreach ($inmueble->getCaracteristicas() as $caracteristica)
            {
                array_push($caracteristicasDesc, $caracteristica->getNombre());
            }
            $inmueble->setCaracteristicas(array());
        }

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

        if ($request->isMethod('GET'))
        {
            $municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado' => $inmueble->getIdEstado(), 'activo' => true));
        }
        else
        {
            $inmueblepost = $this->get('request')->request->get('inmueble');

            $municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado'=>$estados[$inmueblepost["id_estado"]], 'activo'=>true));
        }

        $zonas = $this->getDoctrine()
            ->getRepository('AppBundle:Zona')
            ->findAll();

        $caracteristicas = $this->getDoctrine()
            ->getRepository('AppBundle:Caracteristica')
            ->findAll();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findBy(array(), array('nombre' => 'ASC'));

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findAll();

        $tiposTerreno = $this->getDoctrine()
            ->getRepository('AppBundle:TipoTerreno')
            ->findAll();

        $instalacionesElectricas = $this->getDoctrine()
            ->getRepository('AppBundle:InstalacionElectrica')
            ->findAll();

        $cuartosServicio = $this->getDoctrine()
            ->getRepository('AppBundle:CuartoServicio')
            ->findAll();

        $tiposClima = $this->getDoctrine()
            ->getRepository('AppBundle:TipoClima')
            ->findAll();
        /*$usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);
        */

        // Si es SUPER ADMIN
        if ($authuser->getRol()->getIdRol() == 4) {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();
        } else {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
                array('idUsuarioPadre' => $authuser->getId())
            );
        }
        array_unshift($usuarios, $authuser);

        $form = $this->createForm('AppBundle\Form\InmuebleType', $inmueble,
            array('estados' => $estados,
                'usuarios' => $usuarios,
                'municipios' => $municipios,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                'zonas' => $zonas,
                'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'tiposterreno' => $tiposTerreno,
                'instalacioneselectrica' => $instalacionesElectricas,
                'cuartosservicio' => $cuartosServicio,
                'tiposclima' => $tiposClima
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /* OBTENER EL MUNICIPIO */
            /*$municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado'=>$inmueble->getIdEstado(), 'activo'=>true));

            $inmueblepost = $this->get('request')->request->get('inmueble');

            $inmueble->setIdMunicipio($municipios[$inmueblepost["id_municipio"]]);*/
            /* -------------------- */

            // Verificar si el LegayID ya existe
            $inmueblebusqueda = $em->getRepository('AppBundle:Inmueble')->findOneByLegacyid($inmueble->getLegacyid());

            if ($inmueblebusqueda == NULL || $inmueblebusqueda->getIdInmueble() == $inmueble->getIdInmueble()) {
                $fechaalta = $request->request->get('inmueble_fechaalta', '');

                $inmueble->setModificado(true);
                $inmueble->setFechaAlta(new \DateTime($fechaalta));

                $inmueble->setFechaModificacion(new \DateTime());
                $inmueble->setIdUsuariomodifico($authuser);

                if ($inmueble->getPreciohasta() == NULL)
                {
                    $inmueble->setPreciohasta(0);
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($inmueble);
                $em->flush();

                return $this->redirectToRoute('inmueble_index', array());
            }
            else
            {
                $form->get("legacyid")->addError(new FormError("Este ID ya está siendo utilizado."));
            }
        }

        $fechaalta = $inmueble->getFechaAlta()->format('Y-m-d');
        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);

        return $this->render('inmueble/edit.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
            'caracteristicasDesc' => $caracteristicasDesc,
            'fechaAlta' => $fechaalta,
            'permisodestacado' => $asesorPermisos->getDestacarpropiedad()
        ));

    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/switchactivo", name="inmueble_switchactivo")
     * @Method("GET")
     */
    public function switchActivoAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($id);

        if ($inmueble->getActivo())
        {
            $inmueble->setActivo(false);
        }
        else
        {
            $inmueble->setActivo(true);
        }

        $em->persist($inmueble);
        $em->flush();

        if ($inmueble->getActivo())
        {
            return $this->redirectToRoute('inmueble_indexinactivos');
        }
        else
        {
            return $this->redirectToRoute('inmueble_index');
        }

    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/clonar", name="inmueble_clonar")
     * @Method("GET")
     */
    public function clonarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($id);

        // 1. Conservar legacy id de la propiedad
        $legacyId = $inmueble->getLegacyid();

        // 2. Clonar propiedad
        $nuevoInmueble = clone $inmueble;

        // 3. Buscar Legacy Id Nuevo
        $nuevoLegacyid = $legacyId;
        do
        {
            $nuevoLegacyid = $nuevoLegacyid + 1;

            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByLegacyid($nuevoLegacyid);

            if ($inmueble == NULL)
            {
                $nuevoInmueble->setLegacyid($nuevoLegacyid);
                $nuevoInmueble->setNombreid("Copia de " . $legacyId . " - " .  $nuevoInmueble->getNombreid());

                break;
            }
        }
        while (true);

        $em->persist($nuevoInmueble);
        $em->flush();

        $this->addFlash(
            'notice',
            'Propiedad clonada'
        );

        return $this->redirectToRoute('inmueble_index');
    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/delete", name="inmueble_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        $arrayImagenes = array();

        $em = $this->getDoctrine()->getManager();

        // Obtener inmueble a borrar
        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($id);
        // Conservar id de imagenes
        $imagenes = $inmueble->getImagenes();
        foreach ($imagenes as $imagen) {
            array_push($arrayImagenes, $imagen->getIdImagen());
        }

        // Borrar inmueble de mensaje
        $connection = $em->getConnection();
        $statement = $connection->prepare('DELETE FROM mensaje_inmueble  WHERE id_inmueble = ' . strval($inmueble->getIdInmueble()));
        $statement->execute();

        // Borrar actividad
        $statement = $connection->prepare('DELETE FROM inmuebleactividad WHERE id_inmueble = ' . strval($inmueble->getIdInmueble()));
        $statement->execute();

        // Borrar comision
        $statement = $connection->prepare('DELETE FROM comision WHERE id_inmueble = ' . strval($inmueble->getIdInmueble()));
        $statement->execute();

        // Borrar destacado
        $statement = $connection->prepare('DELETE FROM destacado WHERE id_inmueble = ' . strval($inmueble->getIdInmueble()));
        $statement->execute();

        // Borrar rotulo
        $rotulos = $em->getRepository('AppBundle:Rotulo')->findByInmueble($inmueble);
        foreach ($rotulos as $rotulo) {
            $em->remove($rotulo);
        }

        // Borrar archivos
        $archivos = $em->getRepository('AppBundle:Archivo')->findByInmueble($inmueble);
        foreach ($archivos as $archivo)
        {
            // Si la imagen existe en otro registro, no borrar el archivo de imagen
            try {
                $em = $this->getDoctrine()->getManager();
                $em->remove($archivo);
                $em->flush();

                $file_path = $archivo->getAbsolutePath();
                // Borrar imagen
                if(file_exists($file_path)) unlink($file_path);
            }
            catch (\Exception $e)
            {
                // La imagen no pudo ser borrada por dos razones:
                // a. Todavía hay un registro inmueble_imagen con la imagen asociada (por clonacion)
                // b. No se encontró la imagen fisica
            }
        }

        $propietario = $inmueble->getIdPropietario();
        // Borrar inmueble
        $em = $this->getDoctrine()->getManager();
        $em->remove($inmueble);
        $em->flush();

        try {
            if ($propietario != null) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($propietario);
                $em->flush();
            }
        }
        catch (\Exception $e)
        {

        }

        // Borrar imagenes
        foreach ($arrayImagenes as $idImagen)
        {
            // Si la imagen existe en otro registro, no borrar el archivo de imagen
            try {

                $imagen = $em->getRepository('AppBundle:Imagen')->findOneByIdImagen($idImagen);

                $em = $this->getDoctrine()->getManager();
                $em->remove($imagen);
                $em->flush();

                $file_path = $imagen->getAbsolutePath();
                // Borrar imagen
                if(file_exists($file_path)) unlink($file_path);
            }
            catch (\Exception $e)
            {
                // La imagen no pudo ser borrada por dos razones:
                // a. Todavía hay un registro inmueble_imagen con la imagen asociada (por clonacion)
                // b. No se encontró la imagen fisica
            }
        }

        $this->addFlash(
            'notice',
            'Propiedad eliminada'
        );

        return $this->redirectToRoute('inmueble_index');
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     * @Route("/accesorios", name="inmueble_accesorios")
     * @Method({"GET", "POST"})
     */
    public function accesoriosAction(Request $request)
    {
        $idInmueble = $request->query->get('idInmueble');


       /* $inmueble = $this->getDoctrine()
            ->createQuery(
                'SELECT i FROM AppBundle:Inmueble i  WHERE i.idInmueble = :idInmueble'
            )
            ->setParameter('idInmueble', $idInmueble)->getResult()[0];
*/
  //       $inmueble = $this->getDoctrine()->getRepository('AppBundle:Inmueble')->findByIdInmueble(21)[0];
        //$accesorios = $this->getDoctrine()->getRepository('AppBundle:Accesorio')->findAll();
/*
        if ($request->isMethod('GET'))
        {
            $ia = array();
            foreach ($inmueble->getAccesorios() as $accesorio)
            {
                array_push($ia, $accesorio);
            }
        //    $inmueble->setAccesorios($ia);


       /*        if (count($inmueble->getAccesorios()) == 0)
                {
                    $inmueble->setAccesorios(array());
                }
                else
                {
                    $ia = array();
                    foreach ($inmueble->getAccesorios() as $accesorio)
                    {
                        array_push($ia, $accesorio);
                    }
                    $inmueble->setAccesorios($ia);
                }
        }
        else
        {
            // Sync object
            $ia = array();
            foreach ($inmueble->getAccesorios() as $accesorio)
            {
                array_push($ia, $accesorio);
            }
            $inmueble->setAccesorios($ia);*/
        //}
/*
        $authuser= $this->get('security.context')->getToken()->getUser();

        // 1. Cargar catálogos
        $accesorios = $this->getDoctrine()
            ->getRepository('AppBundle:Accesorio')
            ->findAll();

        $form = $this->createForm('AppBundle\Form\InmuebleAccesorioType', $ia,
            array(
                'accesorios' => $accesorios
            )
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $inmueble->setModificado(true);
            $inmueble->setFechaModificacion(new \DateTime());
            $inmueble->setIdUsuariomodifico($authuser);

            $em = $this->getDoctrine()->getManager();
            $em->persist($inmueble);
            $em->flush();

            return $this->redirectToRoute('inmueble_index', array());
        }

        return $this->render('inmueble/accesorios.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
        ));*/
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     * @Route("/{idasesor}/portafolioasesor", name="inmueble_portafolioasesor")
     * @Method({"GET"})
     */
    public function portafolioasesorAction(Request $request, $idasesor)
    {
        $em = $this->getDoctrine()->getManager();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($idasesor);

        return $this->render('inmueble/portafolio.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }

    /**
     * Displays a form to edit an existing Inmueble entity.
     *
     * @Route("/{idprospecto}/portafolioprospecto", name="inmueble_portafolioprospecto")
     * @Method({"GET"})
     */
    public function portafolioprospectoAction(Request $request, $idprospecto)
    {
        $inmuebleenviado = array();

        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idprospecto);

        $pr = $em->getRepository('AppBundle:Prospecto');
        $pr->setDoctrineManager($em);

        $inmuebles = $pr->findByProspectoInmuebles($idprospecto);

        // Verificar si se mando un mensaje a este prospecto
        $mensajes = $em->getRepository('AppBundle:Mensaje')->findByDestinoemail($prospecto->getEmail());
        foreach ($inmuebles as $inmueble)
        {
            $enviado=false;
            foreach ($mensajes as $mensajeenviado) {
                foreach ($mensajeenviado->getInmuebles() as $inmueblemensaje) {
                    if ($inmueblemensaje->getIdInmueble() == $inmueble->getIdInmueble()) {
                        // Ya se envío
                        $enviado = true;
                        break;
                    }
                }
            }

            if ($enviado)
            {
                array_push($inmuebleenviado, true);
            }
            else
            {
                array_push($inmuebleenviado, false);
            }
        }

        return $this->render('inmueble/portafolio.html.twig', array(
            'inmuebles' => $inmuebles,
            'prospecto' => $prospecto,
            'ida' => $authuser->getId(),
            'inmuebleenviado' => $inmuebleenviado
        ));
    }

    private function crearExcel($inmuebles, $nombrereporte=null)
    {
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');

        $htmlHelper = $this->get('phpexcel')->createHelperHTML();

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', $htmlHelper->toRichTextObject('<b>No.</b>'))
            ->setCellValue('B1', $htmlHelper->toRichTextObject('<b>ID</b>'))
            ->setCellValue('C1', $htmlHelper->toRichTextObject('<b>Nombre ID</b>'))
            ->setCellValue('D1', $htmlHelper->toRichTextObject('<b>Tipo de Inmueble</b>'))
            ->setCellValue('E1', $htmlHelper->toRichTextObject('<b>Operaci&oacute;n</b>'))
            ->setCellValue('F1', $htmlHelper->toRichTextObject('<b>Zona</b>'))
            ->setCellValue('G1', $htmlHelper->toRichTextObject('<b>Calle</b>'))
            ->setCellValue('H1', $htmlHelper->toRichTextObject('<b>Num.</b>'))
            ->setCellValue('I1', $htmlHelper->toRichTextObject('<b>Int.</b>'))
            ->setCellValue('J1', $htmlHelper->toRichTextObject('<b>Estado</b>'))
            ->setCellValue('K1', $htmlHelper->toRichTextObject('<b>Ciudad</b>'))
            ->setCellValue('L1', $htmlHelper->toRichTextObject('<b>Colonia</b>'))
            ->setCellValue('M1', $htmlHelper->toRichTextObject('<b>CP</b>'))
            ->setCellValue('N1', $htmlHelper->toRichTextObject('<b>m2 de terreno</b>'))
            ->setCellValue('O1', $htmlHelper->toRichTextObject('<b>m2 de costrucci&oacute;n</b>'))
            ->setCellValue('P1', $htmlHelper->toRichTextObject('<b>m2 de frente</b>'))
            ->setCellValue('Q1', $htmlHelper->toRichTextObject('<b>m2 de fondo</b>'))
            ->setCellValue('R1', $htmlHelper->toRichTextObject('<b>Rec&aacute;maras</b>'))
            ->setCellValue('S1', $htmlHelper->toRichTextObject('<b>Ba&ntilde;os</b>'))
            ->setCellValue('T1', $htmlHelper->toRichTextObject('<b>Medios Ba&ntilde;os</b>'))
            ->setCellValue('U1', $htmlHelper->toRichTextObject('<b>Cajones de estacionamiento</b>'))
            ->setCellValue('V1', $htmlHelper->toRichTextObject('<b>Plantas</b>'))
            ->setCellValue('W1', $htmlHelper->toRichTextObject('<b>Descripcion</b>'))
            ->setCellValue('X1', $htmlHelper->toRichTextObject('<b>Precio</b>'))
            ->setCellValue('Y1', $htmlHelper->toRichTextObject('<b>Moneda</b>'))
            ->setCellValue('Z1', $htmlHelper->toRichTextObject('<b>Amueblado</b>'))
            ->setCellValue('AA1', $htmlHelper->toRichTextObject('<b>Antig&uuml;edad</b>'))
            ->setCellValue('AB1', $htmlHelper->toRichTextObject('<b>Tipo de Terreno</b>'))

            ->setCellValue('AC1', $htmlHelper->toRichTextObject('<b>Nombre del Asesor</b>'))
            ->setCellValue('AD1', $htmlHelper->toRichTextObject('<b>E-mail</b>'))
            ->setCellValue('AE1', $htmlHelper->toRichTextObject('<b>Tel&eacute;fono</b>'))
            ->setCellValue('AF1', $htmlHelper->toRichTextObject('<b>Tel&eacute;fono 2</b>'))
            ->setCellValue('AG1', $htmlHelper->toRichTextObject('<b>Celular</b>'))

            ->setCellValue('AH1', $htmlHelper->toRichTextObject('<b>Fecha de creaci&oacute;n</b>'))
            ->setCellValue('AI1', $htmlHelper->toRichTextObject('<b>Activo</b>'))

            ->setCellValue('AJ1', $htmlHelper->toRichTextObject('<b>Nombre propietario</b>'))
            ->setCellValue('AK1', $htmlHelper->toRichTextObject('<b>E-mail propietario</b>'))
            ->setCellValue('AL1', $htmlHelper->toRichTextObject('<b>Tel&eacute;fono propietario</b>'))
            ->setCellValue('AM1', $htmlHelper->toRichTextObject('<b>Celular propietario</b>'))

            ->setCellValue('AN1', $htmlHelper->toRichTextObject('<b>Comisi&oacute;n</b>'))
            ->setCellValue('AO1', $htmlHelper->toRichTextObject('<b>Restricciones</b>'))
            ->setCellValue('AP1', $htmlHelper->toRichTextObject('<b>Privado</b>'));
        for ($index=0; $index<count($inmuebles); $index++)
        {
            $amueblado=false;

            $inmueble = $inmuebles[$index];

            // Amueblado
            foreach ($inmueble->getCaracteristicas() as $caracteristica)
            {
                if ($caracteristica->getIdCaracteristica() == 17) // Amueblado
                {
                    $amueblado=true; break;
                }
            }

            $fila = $index+2;
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$fila, $index+1)
                ->setCellValue('B'.$fila, $inmueble->getLegacyid())
                ->setCellValue('C'.$fila, $inmueble->getNombreid())
                ->setCellValue('D'.$fila, $inmueble->getIdTipoInmueble()->getNombre())
                ->setCellValue('E'.$fila, $inmueble->getIdOperacionInmueble()->getNombre())
                ->setCellValue('F'.$fila, $inmueble->getIdZona()->getNombre())
                ->setCellValue('G'.$fila, $inmueble->getCalle())
                ->setCellValue('H'.$fila, $inmueble->getNumero())
                ->setCellValue('I'.$fila, $inmueble->getNumeroint())
                ->setCellValue('J'.$fila, $inmueble->getIdEstado()->getNombre())
                ->setCellValue('K'.$fila, $inmueble->getIdMunicipio()->getNombre())
                ->setCellValue('L'.$fila, $inmueble->getColonia())
                ->setCellValue('M'.$fila, $inmueble->getCP())
                ->setCellValue('N'.$fila, $inmueble->getMetrosterreno())
                ->setCellValue('O'.$fila, $inmueble->getMetrosconstruccion())
                ->setCellValue('P'.$fila, $inmueble->getMetrosfrente())
                ->setCellValue('Q'.$fila, $inmueble->getMetrosfondo())
                ->setCellValue('R'.$fila, $inmueble->getRecamaras())
                ->setCellValue('S'.$fila, $inmueble->getBanos())
                ->setCellValue('T'.$fila, $inmueble->getMediobanos())
                ->setCellValue('U'.$fila, $inmueble->getEspacioautos())
                ->setCellValue('V'.$fila, $inmueble->getPlantas())
                ->setCellValue('W'.$fila, $inmueble->getDescripcion())
                ->setCellValue('X'.$fila, $inmueble->getPrecio())
                ->setCellValue('Y'.$fila, $inmueble->getIdMoneda()->getNombre());

                if ($amueblado)
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('Z'.$fila, "Si");
                }
                else
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('Z'.$fila, "No");
                }

                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AA'.$fila, $inmueble->getAntiguedad())
                ->setCellValue('AB'.$fila, $inmueble->getIdTipoTerreno()->getNombre())

                ->setCellValue('AC'.$fila, $inmueble->getIdUsuario()->getNombre())
                ->setCellValue('AD'.$fila, $inmueble->getIdUsuario()->getEmail())
                ->setCellValue('AE'.$fila, $inmueble->getIdUsuario()->getTelefono())
                ->setCellValue('AF'.$fila, $inmueble->getIdUsuario()->getTelefono2())
                ->setCellValue('AG'.$fila, $inmueble->getIdUsuario()->getCelular())

                ->setCellValue('AH'.$fila, $inmueble->getFechacreacion());


                if ($inmueble->getActivo() == true)
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AI'.$fila, "Si");
                }
                else
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AI'.$fila, "No");
                }

                if ($inmueble->getIdPropietario() != null) {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AJ' . $fila, $inmueble->getIdPropietario()->getNombre())
                        ->setCellValue('AK' . $fila, $inmueble->getIdPropietario()->getEmail())
                        ->setCellValue('AL' . $fila, $inmueble->getIdPropietario()->getTelefono())
                        ->setCellValue('AM' . $fila, $inmueble->getIdPropietario()->getCelular());
                }

                // Comisión
                $comision = "";
                if ($inmueble->getComision() != null)
                {
                    $comision = strval($inmueble->getComision());

                    if ($inmueble->getIdOperacionInmueble()->getIdOperacionInmueble() == 2) {
                        $comision  = $comision . " Mensualidad(es)";
                    }
                    else
                    {
                        $comision  = $comision . " %";
                    }
                }

                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AN'.$fila, $comision);
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AO'.$fila, $inmueble->getRestricciones());

                if ($inmueble->getPrivado())
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AP'.$fila, "Si");
                }
                else
                {
                    $phpExcelObject->setActiveSheetIndex(0)->setCellValue('AP'.$fila, "No");
                }

             }

        $response = $this->get('phpexcel')->createStreamedResponse($writer);

        if ($nombrereporte == null)
        {
            $nombrereporte = 'inmuebles.xlsx';
        }

        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $nombrereporte
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    private function filtrarInmuebles($inmuebles, $idAsesor, $idTipoInmueble, $idOperacionInmueble, $idZona, $id)
    {
        $inmueblesFiltro = array();

        foreach ($inmuebles as $inmueble)
        {
            $permanece = true;

            if ($idAsesor!=NULL && $idAsesor>0 && $inmueble->getIdUsuario()->getId() != $idAsesor)
            {
                $permanece=false;
            }

            if ($idTipoInmueble!=NULL && $idTipoInmueble>0 && $inmueble->getIdTipoInmueble()->getIdTipoInmueble() != $idTipoInmueble)
            {
                $permanece=false;
            }

            if ($idOperacionInmueble!=NULL && $idOperacionInmueble>0 && $inmueble->getIdOperacionInmueble()->getIdOperacionInmueble() != $idOperacionInmueble)
            {
                $permanece=false;
            }

            if ($idZona!=NULL && $idZona>0 && $inmueble->getIdZona()->getIdZona() != $idZona)
            {
                $permanece=false;
            }

            if ($id!=NULL && $id!="" && !(strpos(strval($inmueble->getLegacyid()), $id) !== false))
            {
                if ($id!=NULL && $id!="" && !(strpos(strtolower($inmueble->getNombreid()), strtolower($id)) !== false))
                {
                    if ($id!=NULL && $id!="" && !(strpos(strtolower($inmueble->getColonia()), strtolower($id)) !== false)) {
                        $permanece = false;
                    }
                }
            }

            if ($permanece)
            {
                array_push($inmueblesFiltro, $inmueble);
            }
            else
            {
            }
        }

        return $inmueblesFiltro;
    }

    static public function filtrarInmueblesPrivados($inmuebles, $idUsuario)
    {
        $inmueblesFiltro = array();

        foreach ($inmuebles as $inmueble) {
            if ($inmueble->getPrivado())
            {
                if ($inmueble->getIdUsuario()->getId() == $idUsuario)
                {
                    array_push($inmueblesFiltro, $inmueble);
                }
            }
            else
            {
                array_push($inmueblesFiltro, $inmueble);
            }

        }

        return $inmueblesFiltro;
    }

    public function ordenarInmuebles($inmuebles, $paginaActual)
    {
        $inmueblesLegados = array();
        $inmueblesNuevos = array();

        // Fecha
        $fechaCorte = new \DateTime();
        $fechaCorte->setDate(2016, 10, 19);
        $fechaCorte->setTime(23, 59, 59);

        foreach ($inmuebles as $inmueble) {
            if ($inmueble->getFechaCreacion() > $fechaCorte)
            {
                array_push($inmueblesNuevos, $inmueble);
            }
            else
            {
                array_push($inmueblesLegados, $inmueble);
            }
        }

        usort($inmueblesLegados, function($inmuebleA, $inmuebleB) {
            if ($inmuebleA->getLegacyid() == $inmuebleB->getLegacyid()) {
                return 0;
            }
            return ($inmuebleA->getLegacyid() < $inmuebleB->getLegacyid()) ? 1 : -1;
        });

        $inmueblesOrdenados = array_merge($inmueblesNuevos, $inmueblesLegados);

        $inmueblesOrdenados = array_slice($inmueblesOrdenados, ($paginaActual-1)*$this->paginaTamano, $this->paginaTamano);

        return $inmueblesOrdenados;
    }

}


