<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Solicitud;
use AppBundle\Entity\TipoInmueble;
use AppBundle\Entity\CategoriaInmueble;
use AppBundle\Form\SolicitudType;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Validator\Constraints\DateTime;


/**
 * Solicitud controller.
 *
 * @Route("/solicitud")
 */
class SolicitudController extends Controller
{
    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarinmuebles", name="solicitud_buscarinmuebles")
     * @Method({"GET"})
     */
    public function buscarinmueblesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // 0. Prospecto
        $idProspecto = $request->query->get('idProspecto');

        // 0. Parámetros de búsqueda
        $indexInmuebleTipo = $request->query->get('indexInmuebleTipo');
        $indexOperacionInmueble = $request->query->get('indexOperacionInmueble');
        $indexEstado = $request->query->get('indexEstado');
        $municipio = $request->query->get('municipio');
        $colonia = $request->query->get('colonia');
        $indexCaracteristicas = $request->query->get('indexCaracteristicas');
        $indexMoneda = $request->query->get('indexMoneda');
        $precio = $request->query->get('precio');
        $preciomax = $request->query->get('preciomax');
        $metrosterreno = $request->query->get('metrosterreno');
        $metrosterrenomax = $request->query->get('metrosterrenomax');
        $metroscontruccion = $request->query->get('metroscontruccion');
        $metroscontruccionmax = $request->query->get('metroscontruccionmax');

        // 1. Cargar catálogos
        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findAll();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

        $caracteristicas = $this->getDoctrine()
            ->getRepository('AppBundle:Caracteristica')
            ->findAll();

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findAll();

        $idcaracteristicas=null;
        if ($indexCaracteristicas != NULL) {
            $indexCaracteristicas = explode(',', $indexCaracteristicas);
            $idcaracteristicas = array();
            foreach ($indexCaracteristicas as $indexCaracteristica) {
                array_push($idcaracteristicas, $caracteristicas[$indexCaracteristica]);
            }
        }


        if ($municipio != NULL)
        {
            $municipios = $em->getRepository('AppBundle:Municipio')->buscarPorNombre($municipio);

            // 2. Buscar inmuebles que se adapten a esta solicitud
            $inmueblesresultado = array();

            foreach ($municipios as $municipio) {

                $inmuebles = $this->getDoctrine()
                    ->getRepository('AppBundle:Inmueble')
                    ->findByParameters($tiposInmueble[$indexInmuebleTipo]->getIdTipoInmueble(),
                        $operacionesInmueble[$indexOperacionInmueble]->getIdOperacionInmueble(),
                        $estados[$indexEstado]->getIdEstado(),
                        $municipio->getIdMunicipio(),
                        $colonia,
                        $precio,
                        $preciomax,
                        $metrosterreno,
                        $metrosterrenomax, NULL, NULL,
                        NULL, NULL, NULL, NULL,
                        $metroscontruccion, $metroscontruccionmax,
                        false, false, NULL, -1, $monedas[$indexMoneda]->getIdMoneda(), $idcaracteristicas);

                $inmueblesresultado = array_merge($inmueblesresultado, $inmuebles);
            }
        }
        else
        {
            $inmueblesresultado = $this->getDoctrine()
                ->getRepository('AppBundle:Inmueble')
                ->findByParameters($tiposInmueble[$indexInmuebleTipo]->getIdTipoInmueble(),
                    $operacionesInmueble[$indexOperacionInmueble]->getIdOperacionInmueble(),
                    $estados[$indexEstado]->getIdEstado(),
                    NULL,
                    $colonia,
                    $precio,
                    $preciomax,
                    $metrosterreno,
                    $metrosterrenomax, NULL, NULL,
                    NULL, NULL, NULL, NULL,
                    $metroscontruccion, $metroscontruccionmax,
                    false, false, NULL, -1, $monedas[$indexMoneda]->getIdMoneda(), $idcaracteristicas);
        }


        return $this->render('solicitud/buscarinmuebles.html.twig', array(
            'inmuebles' => $inmueblesresultado,
            'idProspecto' => $idProspecto
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarform", name="solicitud_buscarform")
     * @Method({"GET", "POST"})
     */
    public function buscarformAction(Request $request)
    {
        $error=false;

        $em = $this->getDoctrine()->getManager();

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findAll();

        /*$caracteristicas = $this->getDoctrine()
            ->getRepository('AppBundle:Caracteristica')
            ->findAll();
*/
        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findAll();

        $solicitud = new Solicitud();
        $form = $this->createForm('AppBundle\Form\BuscarSolicitudType', $solicitud,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                //'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'buscando' => true,
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $authuser= $this->get('security.context')->getToken()->getUser();

            /*$fecha = $request->request->get('solicitud_fecha', '');
            if ($fecha == '')
            {
                $fecha = NULL;
            }*/

            $fecha = $solicitud->getFechabusqueda();
            $fechaBusqueda = new \DateTime();
            switch ($fecha)
            {
                case 2:
                    date_sub($fechaBusqueda, date_interval_create_from_date_string('7 days'));
                    break;
                case 3:
                    date_sub($fechaBusqueda, date_interval_create_from_date_string('30 days'));
                    break;
                default:
                    $fechaBusqueda=null;
            }

            $solicitudes = $this->getDoctrine()
                ->getRepository('AppBundle:Solicitud')
                ->findByParameters($solicitud->getIdTipoInmueble()->getIdTipoInmueble(), $solicitud->getIdOperacionInmueble()->getIdOperacionInmueble(), $solicitud->getIdEstado()->getIdEstado(), $solicitud->getCiudad(), $solicitud->getColonia(), $solicitud->getPrecio(),
                    $solicitud->getPreciomax(), $solicitud->getMetrosterreno(), $solicitud->getMetrosterrenomax(), $solicitud->getCaracteristicas(), $fechaBusqueda, $solicitud->getIdMoneda()->getIdMoneda());

            $solicitudinmuebles = array();

            foreach($solicitudes as $solicitud)
            {
                // Buscar inmueble que se adapte a esta solicitud
                $inmuebles = $this->getDoctrine()
                    ->getRepository('AppBundle:Inmueble')
                    ->findByParameters($solicitud->getIdTipoInmueble()->getIdTipoInmueble(), $solicitud->getIdOperacionInmueble()->getIdOperacionInmueble(), $solicitud->getIdEstado()->getIdEstado(), $solicitud->getCiudad(), $solicitud->getColonia(), $solicitud->getPrecio(),
                        $solicitud->getPreciomax(), $solicitud->getMetrosterreno(), $solicitud->getMetrosterrenomax(), NULL, NULL,
                        NULL, NULL, NULL, NULL,
                        $solicitud->getMetrosconstruccion(), $solicitud->getMetrosconstruccionmax(),
                        false, false, NULL, -1);
                if (count($inmuebles)>0)
                {
                    array_push($solicitudinmuebles, $inmuebles[0]);
                }
                else
                {
                    array_push($solicitudinmuebles, null);
                }
            }

            return $this->render('solicitud/resultadosfiltro.html.twig', array(
                'solicitudes' => $solicitudes,
                'mostrarbotonatras' => false,
                'solicitudinmuebles' => $solicitudinmuebles,
                'columnas' => 6,
                'filtro' => 0,
                'ida' => $authuser->getId(),
            ));
        }

        return $this->render('solicitud/buscarform.html.twig', array(
            'solicitud' => $solicitud,
            'form' => $form->createView(),
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarform2", name="solicitud_buscarform2")
     * @Method({"GET", "POST"})
     */
    public function buscarform2Action(Request $request)
    {
        $tipoMensaje = intVal($request->query->get('tipoBusqueda'));
        $buscar = $request->query->get('buscar');

        $titulo = '15 días';
        $em = $this->getDoctrine()->getManager();

        $fecha = new \DateTime();

        if ($tipoMensaje == 2)
        {
            date_sub($fecha, date_interval_create_from_date_string('15 days'));

            $solicitudes = $this->getDoctrine()
                ->getRepository('AppBundle:Solicitud')
                ->findAllDateMenor($fecha);

            $titulo = 'Mayores a 15 días';
        }
        else if ($tipoMensaje == 3) {
            $solicitudes = $this->getDoctrine()
                ->getRepository('AppBundle:Solicitud')
                ->findBySearchString($buscar);

            $titulo = $buscar;
        }
        else {
            date_sub($fecha, date_interval_create_from_date_string('15 days'));

            $solicitudes = $this->getDoctrine()
                ->getRepository('AppBundle:Solicitud')
                ->findAllDateMayor($fecha);
        }

        return $this->render('solicitud/buscarform2.html.twig', array(
        'titulo' => $titulo,
        'solicitudes' => $solicitudes
        ));
    }

    /**
     * Lists all Solicitud entities.
     *
     * @Route("/index.{_format}", name="solicitud_index", defaults= {"_format"="html"}, requirements = {"_format"="html|xls"})
     *
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $em = $this->getDoctrine()->getManager();

        if ($_format == "xls")
        {
            $authuser = $this->get('security.context')->getToken()->getUser();
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwner($authuser);
            return $this->crearExcel($solicitudes);
        }
        else
        {
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findBy(array('activo' => 1));
            return $this->render('solicitud/index.html.twig', array(
                'solicituds' => $solicitudes,
            ));
        }
    }

    /**
     * Lists all Solicitud entities.
     *
     * @Route("/resultadosimprimirfiltro.{_format}", name="solicitud_resultadosimprimirfiltro", defaults= {"_format"="html"}, requirements = {"_format"="html"})
     * @Method("GET")
     */
    public function resultadosImprimirfiltroAction(Request $request, $_format)
    {
        $filtro = $request->query->get('filtro');

        $authuser = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $solicitudes = array();

        if ($filtro == 1)
        {
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwner($authuser);
        }
        else if ($filtro == 2) // MI OFICINA
        {

            if ($authuser->getRol()->getIdRol() == 4) {
                $solicitudes = $em->getRepository('AppBundle:Solicitud')->findBy(array('activo'=>true));
            } else {
                $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwnerParent($authuser);
            }


        }
        else if ($filtro == 3)
        {
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findAllButOwner($authuser);
        }

            return $this->render('solicitud/imprimir.html.twig', array(
                'solicitudes' => $solicitudes,
                'filtro' => $filtro
            ));
    }

    /**
     * Lists all Solicitud entities.
     *
     * @Route("/resultadosfiltro.{_format}", name="solicitud_resultadosfiltro", defaults= {"_format"="html"}, requirements = {"_format"="html|xls"})
     * @Method("GET")
     */
    public function resultadosfiltroAction(Request $request, $_format)
    {
        $filtro = $request->query->get('filtro');

        $authuser = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $solicitudes = array();

        if ($filtro == 1)
        {
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwner($authuser);
        }
        else if ($filtro == 2)
        {
            if ($authuser->getRol()->getIdRol() == 4) {
                $solicitudes = $em->getRepository('AppBundle:Solicitud')->findBy(array('activo'=>true));
            } else {
                $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwnerParent($authuser);
            }

        }
        else if ($filtro == 3)
        {
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findAllButOwner($authuser);
        }

        if ($_format == "html")
        {
            return $this->render('solicitud/resultadosfiltro.html.twig', array(
                'solicitudes' => $solicitudes,
                'mostrarbotonatras' => false,
                'solicitudinmuebles' => null,
                'columnas' => 4,
                'filtro' => $filtro,
                'ida' => $authuser->getId()
            ));
        }
        else if ($_format == "xls")
        {
            $authuser = $this->get('security.context')->getToken()->getUser();
            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwner($authuser);
            return $this->crearExcel($solicitudes);
        }
    }

    /**
     * Creates a new Solicitud entity.
     *
     * @Route("/new", name="solicitud_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error=false;

        // Url de regreso
        $redurl = str_replace("SHARP", "#", $request->query->get('url'));
        $redurl = str_replace("AMP", "&", $redurl);

        // 0. Prospecto
        $idProspecto = $request->query->get('idProspecto');

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

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

        $solicitud = new Solicitud();
        $solicitud->setActivo(true);
        $form = $this->createForm('AppBundle\Form\SolicitudType', $solicitud,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'usuarios' => $usuarios
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $solicitud->setFecha(new \DateTime());

            $solicitud->setActivo(true);

            // Guardar Solicitud
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitud);

            // Asociar al prospecto
            if ($idProspecto != null)
            {
                $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);
                $prospecto->addSolicitud($solicitud);
                $em->persist($prospecto);
            }

            $em->flush();

            if ($redurl == null) {
                return $this->redirectToRoute('solicitud_index', array());
            }
            else
            {
                return $this->redirect($redurl);
            }
        }

        return $this->render('solicitud/new.html.twig', array(
            'solicitud' => $solicitud,
            'idProspecto' => $idProspecto,
            'form' => $form->createView(),
            'url' => $redurl
        ));
    }

    /**
     * Finds and displays a Solicitud entity.
     *
     * @Route("/{id}", name="solicitud_show")
     * @Method("GET")
     */
    public function showAction(Solicitud $solicitud)
    {
        //$deleteForm = $this->createDeleteForm($solicitud);

        return $this->render('solicitud/show.html.twig', array(
            'solicitud' => $solicitud,
          //  'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Solicitud entity.
     *
     * @Route("/{id}/edit", name="solicitud_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Solicitud $solicitud)
    {
        if ($request->isMethod('GET'));
        {
            $caracteristicasDesc = array();
            foreach ($solicitud->getCaracteristicas() as $caracteristica)
            {
                array_push($caracteristicasDesc, $caracteristica->getNombre());
            }
            $solicitud->setCaracteristicas(array());
        }

        // Url de regreso
        $redurl = str_replace("SHARP", "#", $request->query->get('url'));
        $redurl = str_replace("AMP", "&", $redurl);

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

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

        $editForm = $this->createForm('AppBundle\Form\SolicitudType', $solicitud,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                'caracteristicas' => $caracteristicas,
                'monedas' => $monedas,
                'usuarios' => $usuarios
            ));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitud);
            $em->flush();

            if ($redurl == null) {
                return $this->redirectToRoute('solicitud_index', array());
            }
            else
            {
                return $this->redirect($redurl);
            }
        }

        return $this->render('solicitud/edit.html.twig', array(
            'solicitud' => $solicitud,
            'form' => $editForm->createView(),
            'caracteristicasDesc' => $caracteristicasDesc,
            'url' => $redurl
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/borrar", name="solicitud_borrar")
     * @Method("GET")
     */
    public function borrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $solicitud = $em->getRepository('AppBundle:Solicitud')->findOneByIdSolicitud($id);

        $solicitud->setActivo(false);

        $em->persist($solicitud);
        $em->flush();

        $url = $this->generateUrl('solicitud_resultadosfiltro', array()) . '?filtro=1';

        return $this->redirect($url);
    }

    private function crearExcel($solicitudes)
    {
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');

        $htmlHelper = $this->get('phpexcel')->createHelperHTML();

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', $htmlHelper->toRichTextObject('<b>ID</b>'))
            ->setCellValue('B1', $htmlHelper->toRichTextObject('<b>Tipo de Inmueble</b>'))
            ->setCellValue('C1', $htmlHelper->toRichTextObject('<b>Operaci&oacute;n</b>'))
            ->setCellValue('D1', $htmlHelper->toRichTextObject('<b>Estado</b>'))
            ->setCellValue('E1', $htmlHelper->toRichTextObject('<b>Ciudad</b>'))
            ->setCellValue('F1', $htmlHelper->toRichTextObject('<b>Colonia</b>'))
            ->setCellValue('G1', $htmlHelper->toRichTextObject('<b>m2 de costrucci&oacute;n</b>'))
            ->setCellValue('H1', $htmlHelper->toRichTextObject('<b>m2 de costrucci&oacute;n (hasta)</b>'))
            ->setCellValue('I1', $htmlHelper->toRichTextObject('<b>m2 de terreno</b>'))
            ->setCellValue('J1', $htmlHelper->toRichTextObject('<b>m2 de terreno (hasta)</b>'))
            ->setCellValue('K1', $htmlHelper->toRichTextObject('<b>Precio</b>'))
            ->setCellValue('L1', $htmlHelper->toRichTextObject('<b>Precio (hasta)</b>'))
            ->setCellValue('M1', $htmlHelper->toRichTextObject('<b>Moneda</b>'));

        for ($index=0; $index<count($solicitudes); $index++)
        {
            $solicitud = $solicitudes[$index];

            $fila = $index+2;
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$fila, $solicitud->getIdSolicitud())
                ->setCellValue('B'.$fila, $solicitud->getIdTipoInmueble()->getNombre())
                ->setCellValue('C'.$fila, $solicitud->getIdOperacionInmueble()->getNombre())
                ->setCellValue('D'.$fila, $solicitud->getIdEstado()->getNombre())
                ->setCellValue('E'.$fila, $solicitud->getIdMunicipio()->getNombre())
                ->setCellValue('F'.$fila, $solicitud->getIdColonia()->getNombre())
                ->setCellValue('G'.$fila, $solicitud->getMetrosconstruccion())
                ->setCellValue('H'.$fila, $solicitud->getMetrosconstruccionmax())
                ->setCellValue('I'.$fila, $solicitud->getMetrosterreno())
                ->setCellValue('J'.$fila, $solicitud->getMetrosterrenomax())
                ->setCellValue('K'.$fila, $solicitud->getPrecio())
                ->setCellValue('L'.$fila, $solicitud->getPreciomax())
                ->setCellValue('M'.$fila, $solicitud->getIdMoneda()->getNombre());
        }

        $response = $this->get('phpexcel')->createStreamedResponse($writer);

        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'solicitudes.xlsx'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }



}
