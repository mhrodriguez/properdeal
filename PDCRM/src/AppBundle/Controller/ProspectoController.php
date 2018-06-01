<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Prospecto;
use AppBundle\Entity\Estado;
use AppBundle\Entity\InmuebleProspecto;
use Symfony\Component\Form\FormError;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Doctrine\Common\Annotations\AnnotationReader;
use SaadTazi\GChartBundle\DataTable;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Prospecto controller.
 *
 * @Route("/prospecto")
 */
class ProspectoController extends Controller
{
    /**
     * Lists all Prospecto entities.
     *
     * @Route("/index.{_format}", name="prospecto_index", defaults= {"_format"="html"}, requirements = {"_format"="html|json|xlsx"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $paginaTamano=6; $numPaginas=-1; $paginaActual=1;

        $buscar = $request->query->get('buscar');

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $activo = $request->query->get('activo');
        if ($activo == null)
        {
            $activo=1;
        }

        if ($_format == "html")
        {
            if ($request->query->get('pagina') != null)
            {
                $paginaActual = intval($request->query->get('pagina'));
            }

            $cr = $em->getRepository('AppBundle:Prospecto');
            $cr->setDoctrineManager($em);

            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {

                if ($buscar != null && $buscar != "") {

                    $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByTodosBusquedaCount($buscar);
                    $numPaginas = ceil($countProspectos/$paginaTamano);

                    $prospectos = $cr->findByTodosPagedBusqueda(($paginaActual - 1) * $paginaTamano, $paginaTamano, $buscar);
                }
                else {
                    $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByTodosCount($activo);
                    $numPaginas = ceil($countProspectos/$paginaTamano);

                    $prospectos = $cr->findByTodosPaged(($paginaActual - 1) * $paginaTamano, $paginaTamano, $activo);
                }

            } else {

                if ($buscar != null && $buscar != "")
                {
                    $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByOwnerBusqueda2Count($authuser->getId(), $buscar);
                    $numPaginas = ceil($countProspectos/$paginaTamano);

                    $prospectos = $cr->findByOwnerBusqueda2Paged($authuser->getId(), $buscar, ($paginaActual - 1) * $paginaTamano, $paginaTamano);
                }
                else {
                    $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByOwner2Count($authuser->getId(), $activo);
                    $numPaginas = ceil($countProspectos/$paginaTamano);

                    $prospectos = $cr->findByOwner2Paged($authuser->getId(), $activo, ($paginaActual - 1) * $paginaTamano, $paginaTamano);
                }
            }

            $solicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwner($authuser);

            $promedioVentas = $em->getRepository('AppBundle:Inmueble')->obtenerPromedioDeVentas($authuser->getId());

            $promedioRentas = $em->getRepository('AppBundle:Inmueble')->obtenerPromedioDeRentas($authuser->getId());

            //$pr = $em->getRepository('AppBundle:Mensaje');
            //$pr->setDoctrineManager($em);
            //$mensajes = $pr->findByDestinoemailGrouped($authuser->getUsername());

            // GRAFICA  - Prospectos por Canal de Captación (Gráfica PIE)
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $prospectoscanalcaptacion = $cr->findByCanalCaptacion();
            } else {
                $prospectoscanalcaptacion = $cr->findByOwnerCanalCaptacion($authuser->getId());
            }

            $rows = array();
            for ($counter=0; $counter<count($prospectoscanalcaptacion); $counter++) {

                array_push($rows, array(
                        array(
                            'v' => $prospectoscanalcaptacion[$counter]['nombre'] . ' - ' . $prospectoscanalcaptacion[$counter]['total'] . ' prospecto(s).'
                        ),
                        array(
                            'v' => intval($prospectoscanalcaptacion[$counter]['total']),
                            'f' => $prospectoscanalcaptacion[$counter]['total'] . ' prospectos del canal ' . $prospectoscanalcaptacion[$counter]['nombre']
                        )
                    )
                );

            }

            $dataTable1 = new DataTable\DataTable(
                array(
                    'cols' =>
                        array(
                            array(
                                'id'    => 'id1',
                                'label' => 'label1',
                                'type'     => 'string'
                            ),
                            array(
                                'id'    => 'id2',
                                'label' => 'label2',
                                'type'  => 'number'
                            )
                        ),
                    'rows' =>
                        $rows
                )
            );

            // Cargar inmuebles de cada prospecto
            $pr = $em->getRepository('AppBundle:Prospecto');
            $pr->setDoctrineManager($em);

            $prospectoinmuebles = array();
            foreach ($prospectos as $prospecto)
            {
                $inmuebles = $pr->findByProspectoInmuebles(/*$prospecto->getIdProspecto()*/$prospecto["id"]);
                array_push($prospectoinmuebles, $inmuebles);
            }

            // Seguimiento
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $prospectoseguimiento = $pr->findByProspectoSeguimiento();
            } else {
                $prospectoseguimiento = $pr->findByOwnerProspectoSeguimiento($authuser->getId());
            }

            // NO Seguimiento
            // Si es SUPER ADMIN
            if ($authuser->getRol()->getIdRol() == 4) {
                $prospectonoseguimiento = $pr->findByProspectoNoSeguimiento();
            } else {
                $prospectonoseguimiento = $pr->findByOwnerProspectoNoSeguimiento($authuser->getId());
            }

            return $this->render('prospecto/index.html.twig', array(
            'prospectos' => $prospectos,
            'countSolicitudes' => count($solicitudes),
            'promedioVentas' => $promedioVentas,
            'promedioRentas' => $promedioRentas,

            'buscar' => $buscar,
            'activo' => $activo,

            'dataTable1' => $dataTable1->toArray(),
            'prospectoinmuebles' => $prospectoinmuebles,

            'prospectoseguimiento' => $prospectoseguimiento,
            'prospectonoseguimiento' => $prospectonoseguimiento,

            'numpaginas' => $numPaginas,
            'paginaactual' => $paginaActual,

            'activo' => $activo
            ));
        }
        else if ($_format == "json") {
            $prospectos = array();
            $intindexAsesor = intVal($request->query->get('indexAsesor'));

            if ($intindexAsesor!=-1 && !is_null($intindexAsesor)) {

                $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
                    array('idUsuarioPadre' => $authuser->getId())
                );
                array_unshift($usuarios, $authuser);

                if ($intindexAsesor < count($usuarios)) {
                    $usuario = $usuarios[$intindexAsesor];

                    $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($usuario->getId());
                  }
            }

            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($prospectos, 'json', array('groups' => array('list')));

            return new Response($jsonContent);
        }
        else if ($_format == "xlsx")
        {
            // Si es super admin
            if ($authuser->getRol()->getIdRol() == 4) {
                $prospectos = $em->getRepository('AppBundle:Prospecto')->findBy(array('activo'=>$activo));
            }
            else
            {
                $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId(), $activo);
            }

            return $this->crearExcel($prospectos);
        }
    }

    /**
     * Creates a new Prospecto entity.
     *
     * @Route("/new", name="prospecto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error=false;

        // Prellenar campos si es necesario
        $nombre = $request->query->get('nombre');
        $email = $request->query->get('email');
        $telefono = $request->query->get('telefono');

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findAll();
        $estadoinvalido = new Estado();
        $estadoinvalido->setIdEstado(0);
        $estadoinvalido->setNombre("No identificado");
        array_unshift($estados, $estadoinvalido);

        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findBy(array(), array('nombre' => 'ASC'));

        $estatusavance = $this->getDoctrine()
            ->getRepository('AppBundle:EstatusAvance')
            ->findAll();

        $tiposprospecto = $this->getDoctrine()
            ->getRepository('AppBundle:TipoProspecto')
            ->findAll();

        $documentos = $this->getDoctrine()
            ->getRepository('AppBundle:Documento')
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

        $prospecto = new Prospecto();
        $prospecto->setActivo(true);

        if ($nombre != null) $prospecto->setNombre($this->obtenerNombre($nombre));
        if ($nombre != null) $prospecto->setApellidos($this->obtenerApellidos($nombre));
        if ($email != null) {
            $prospecto->setEmail($email);
        }
        if ($telefono != null) $prospecto->setTelefono($telefono);

        $form = $this->createForm('AppBundle\Form\ProspectoType', $prospecto,
            array('estados' => $estados,
                  'canalescaptacion' => $canalescaptacion,
                  'estatusavance' => $estatusavance,
                  'tiposprospecto' => $tiposprospecto,
                  'documentos' => $documentos,
                  'usuarios' => $usuarios,
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 2. Validaciones
            // 2.1 Tipo prospecto
            /*if ($prospecto->getIdTipoProspecto() == null)
            {
                $error=true;
                $form->get('id_tipo_prospecto')->addError(new FormError('Seleccione una opción.'));
            }*/

            // 2.2 Verificar si el prospecto existe
            if (
                $em->getRepository('AppBundle:Prospecto')->findBy(
                array('email' => $prospecto->getEmail())
                ) != null
                ||
                (
                $em->getRepository('AppBundle:Prospecto')->findBy(
                    array('telefonoMovil' => $prospecto->getTelefonoMovil())
                ) != null
                && $prospecto->getTelefonoMovil() != null
                )
            )
            {
                $error=true;
                $form->get('email')->addError(new FormError('Ya existe un prospecto registrado con este e-mail y/o teléfono móvil.'));
            }

            if ($prospecto->getIdEstado()->getIdEstado() == 0)
            {
                $prospecto->setIdEstado(null);
            }

            if (!$error)
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($prospecto);
                $em->flush();

                $txtSegundoPaso = $request->request->get('txtSegundoPaso', '');

                if ($txtSegundoPaso == "true")
                {
                    $url = $this->generateUrl('solicitud_new', array());

                    return $this->redirect($url . "?idProspecto=" . $prospecto->getIdProspecto() . "&url=" . $this->generateUrl('prospecto_index', array()));
                }
                else
                {
                    return $this->redirectToRoute('prospecto_index', array());
                }
            }
        }

        return $this->render('prospecto/new.html.twig', array(
            'prospecto' => $prospecto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Prospecto entity.
     *
     * @Route("/{id}/detalle", name="prospecto_detalle")
     * @Method({"GET"})
     */
    public function detalleAction(Request $request, Prospecto $prospecto)
    {
            $documentosDesc = array();
            foreach ($prospecto->getDocumentos() as $documento)
            {
                array_push($documentosDesc, $documento->getNombre());
            }
            $prospecto->setDocumentos(array());

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findAll();
        $estadoinvalido = new Estado();
        $estadoinvalido->setIdEstado(0);
        $estadoinvalido->setNombre("No identificado");
        array_unshift($estados, $estadoinvalido);

        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findBy(array(), array('nombre' => 'ASC'));

        $estatusavance = $this->getDoctrine()
            ->getRepository('AppBundle:EstatusAvance')
            ->findAll();

        $tiposprospecto = $this->getDoctrine()
            ->getRepository('AppBundle:TipoProspecto')
            ->findAll();

        $documentos = $this->getDoctrine()
            ->getRepository('AppBundle:Documento')
            ->findAll();

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        if ($prospecto->getIdEstado() == null)
        {
            $prospecto->setIdEstado($estadoinvalido);
        }

        $editForm = $this->createForm('AppBundle\Form\ProspectoType', $prospecto,
            array('estados' => $estados,
                'canalescaptacion' => $canalescaptacion,
                'estatusavance' => $estatusavance,
                'tiposprospecto' => $tiposprospecto,
                'documentos' => $documentos,
                'usuarios' => $usuarios,
            ));

        return $this->render('prospecto/detalle.html.twig', array(
            'prospecto' => $prospecto,
            'form' => $editForm->createView(),
            'documentosDesc' => $documentosDesc
        ));
    }

    /**
     * Creates a new Prospecto entity.
     *
     * @Route("/asignarpropiedad", name="prospecto_asignarpropiedad")
     * @Method({"GET", "POST"})
     */
    public function asignarpropiedadAction(Request $request)
    {
        $idInmueble = intval($request->query->get('idInmueble'));
        $url = str_replace("SHARP", "#", $request->query->get('url'));
        $url = str_replace("AMP", "&", $url);

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId());

        $inmuebleProspecto = new InmuebleProspecto();

        $form = $this->createForm('AppBundle\Form\InmuebleProspectoType', $inmuebleProspecto,
            array('prospectos' => $prospectos,
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($inmuebleProspecto->getProspecto() != null) {
                // Obtener inmueble
                $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

                $existeProspecto = false;
                foreach ($inmueble->getProspectos() as $prospecto) {
                    if ($prospecto->getIdProspecto() == $inmuebleProspecto->getProspecto()->getIdProspecto()) {
                        $existeProspecto = true;
                        break;
                    }
                }

                if (!$existeProspecto) {
                    $inmueble->addProspecto($inmuebleProspecto->getProspecto());

                    $em->persist($inmueble);
                    $em->flush();

                    return $this->redirect($url); // $this->redirectToRoute('inmueble_index', array());
                } else {
                    $form->get("prospecto")->addError(new FormError("El prospecto ya está asociado a esta propiedad."));
                }
            }
        }

        return $this->render('prospecto/asignarpropiedad.html.twig', array(
            'prospecto' => $inmuebleProspecto,
            'url' => $url,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Prospecto entity.
     *
     * @Route("/asignarpropiedades", name="prospecto_asignarpropiedades")
     * @Method({"GET", "POST"})
     */
    public function asignarpropiedadesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // 1. Obtener inmuebles y Id de prospecto
        $idInmuebles = explode(',', $request->query->get('idInmuebles'));
        $idProspecto = intval($request->query->get('idProspecto'));

        //$url = str_replace("SHARP", "#", $request->query->get('url'));
        //$url = str_replace("AMP", "&", $url);

        // 2. Obtener prospectos
        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);

        // 3. Agregar prospecto al inmueble
        foreach ($idInmuebles as $idInmueble) {

            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

            $existeProspecto = false;
            foreach ($inmueble->getProspectos() as $prospecto2) {
                if ($prospecto2->getIdProspecto() == $prospecto->getIdProspecto()) {
                    $existeProspecto = true;
                    break;
                }
            }

            if (!$existeProspecto) {
                $inmueble->addProspecto($prospecto);

                $em->persist($inmueble);
                $em->flush();
            }
        }

        return $this->redirectToRoute("inmueble_portafolioprospecto", array('idprospecto'=>$idProspecto));
    }

    /**
     * Creates a new Prospecto entity.
     *
     * @Route("/desasignarpropiedad", name="prospecto_desasignarpropiedad")
     * @Method({"GET"})
     */
    public function desasignarpropiedadAction(Request $request)
    {
        $idInmueble = intval($request->query->get('idInmueble'));
        $idProspecto = intval($request->query->get('idProspecto'));

        $em = $this->getDoctrine()->getManager();

        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);
        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);

        $inmueble->removeProspecto($prospecto);

        $em->persist($inmueble);
        $em->flush();

        return $this->redirectToRoute('inmueble_portafolioprospecto', array('idprospecto' => $idProspecto));
    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/switchactivo", name="prospecto_switchactivo")
     * @Method("GET")
     */
    public function switchActivoAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($id);

        if ($prospecto->getActivo())
        {
            $prospecto->setActivo(false);
        }
        else
        {
            $prospecto->setActivo(true);
        }

        $em->persist($prospecto);
        $em->flush();

        if ($prospecto->getActivo())
        {
            return $this->redirectToRoute('prospecto_index', array('activo'=>0));
        }
        else
        {
            return $this->redirectToRoute('prospecto_index');
        }
    }

    private function crearExcel($prospectos)
    {

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');

        $htmlHelper = $this->get('phpexcel')->createHelperHTML();

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', $htmlHelper->toRichTextObject('<b>ID</b>'))
            ->setCellValue('B1', $htmlHelper->toRichTextObject('<b>Nombre</b>'))
            ->setCellValue('C1', $htmlHelper->toRichTextObject('<b>Apellidos</b>'))
            ->setCellValue('D1', $htmlHelper->toRichTextObject('<b>E-mail</b>'))
            ->setCellValue('E1', $htmlHelper->toRichTextObject('<b>Estado</b>'))
            ->setCellValue('F1', $htmlHelper->toRichTextObject('<b>Ciudad</b>'))
            ->setCellValue('G1', $htmlHelper->toRichTextObject('<b>Direcci&oacute;n</b>'))
            ->setCellValue('H1', $htmlHelper->toRichTextObject('<b>Tel&eacute;fono</b>'))
            ->setCellValue('I1', $htmlHelper->toRichTextObject('<b>Tel&eacute;fono m&oacute;vil</b>'))
            ->setCellValue('J1', $htmlHelper->toRichTextObject('<b>Estatus de avance</b>'))
            ->setCellValue('K1', $htmlHelper->toRichTextObject('<b>Tipo de Prospecto</b>'))
            ->setCellValue('L1', $htmlHelper->toRichTextObject('<b>Presupuesto</b>'))
            ->setCellValue('M1', $htmlHelper->toRichTextObject('<b>Observaciones</b>'))
            ->setCellValue('N1', $htmlHelper->toRichTextObject('<b>Asignado a</b>'));

        for ($index=0; $index<count($prospectos); $index++)
        {
            $prospecto = $prospectos[$index];

            $fila = $index+2;
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$fila, $prospecto->getIdProspecto())
                ->setCellValue('B'.$fila, $prospecto->getNombre())
                ->setCellValue('C'.$fila, $prospecto->getApellidos())
                ->setCellValue('D'.$fila, $prospecto->getEmail());

            if ($prospecto->getIdEstado() != null) {
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('E' . $fila, $prospecto->getIdEstado()->getNombre());
             }

            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('F'.$fila, $prospecto->getCiudad())
                ->setCellValue('G'.$fila, $prospecto->getDireccion())
                ->setCellValue('H'.$fila, $prospecto->getTelefono())
                ->setCellValue('I'.$fila, $prospecto->getTelefonoMovil())
                ->setCellValue('J'.$fila, $prospecto->getIdEstatusAvance()->getNombre());

            if ($prospecto->getIdTipoProspecto() != null) {
                $phpExcelObject->setActiveSheetIndex(0)->setCellValue('K'.$fila, $prospecto->getIdTipoProspecto()->getNombre());
            }

            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('L'.$fila, $prospecto->getPresupuesto())
                ->setCellValue('M'.$fila, $prospecto->getObservaciones())
                ->setCellValue('N'.$fila, $prospecto->getIdUsuario()->getNombre());
        }

        $response = $this->get('phpexcel')->createStreamedResponse($writer);

        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'prospectos.xlsx'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    public function obtenerNombre($full_name)
    {
        /* separar el nombre completo en espacios */
        $tokens = explode(' ', trim($full_name));
        /* arreglo donde se guardan las "palabras" del nombre */
        $names = array();
        /* palabras de apellidos (y nombres) compuetos */
        $special_tokens = array('da', 'de', 'del', 'la', 'las', 'los', 'mac', 'mc', 'van', 'von', 'y', 'i', 'san', 'santa');

        $prev = "";
        foreach($tokens as $token) {
            $_token = strtolower($token);
            if(in_array($_token, $special_tokens)) {
                $prev .= "$token ";
            } else {
                $names[] = $prev. $token;
                $prev = "";
            }
        }

        $num_nombres = count($names);
        $nombres = $apellidos = "";
        switch ($num_nombres) {
            case 0:
                $nombres = '';
                break;
            case 1:
                $nombres = $names[0];
                break;
            case 2:
                $nombres    = $names[0];
                $apellidos  = $names[1];
                break;
            case 3:
                $apellidos = $names[0] . ' ' . $names[1];
                $nombres   = $names[2];
            default:
                $apellidos = $names[0] . ' '. $names[1];
                unset($names[0]);
                unset($names[1]);

                $nombres = implode(' ', $names);
                break;
        }

        return mb_convert_case($nombres, MB_CASE_TITLE, 'UTF-8');
    }

    public function obtenerApellidos($full_name)
    {
        /* separar el nombre completo en espacios */
        $tokens = explode(' ', trim($full_name));
        /* arreglo donde se guardan las "palabras" del nombre */
        $names = array();
        /* palabras de apellidos (y nombres) compuetos */
        $special_tokens = array('da', 'de', 'del', 'la', 'las', 'los', 'mac', 'mc', 'van', 'von', 'y', 'i', 'san', 'santa');

        $prev = "";
        foreach($tokens as $token) {
            $_token = strtolower($token);
            if(in_array($_token, $special_tokens)) {
                $prev .= "$token ";
            } else {
                $names[] = $prev. $token;
                $prev = "";
            }
        }

        $num_nombres = count($names);
        $nombres = $apellidos = "";
        switch ($num_nombres) {
            case 0:
                $nombres = '';
                break;
            case 1:
                $nombres = $names[0];
                break;
            case 2:
                $nombres    = $names[0];
                $apellidos  = $names[1];
                break;
            case 3:
                $apellidos = $names[0] . ' ' . $names[1];
                $nombres   = $names[2];
            default:
                $apellidos = $names[0] . ' '. $names[1];
                unset($names[0]);
                unset($names[1]);

                $nombres = implode(' ', $names);
                break;
        }

        return mb_convert_case($apellidos, MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Finds and displays a Prospecto entity.
     *
     * @Route("/{id}", name="prospecto_show")
     * @Method("GET")
     */
    /*public function showAction(Prospecto $prospecto)
    {
        $deleteForm = $this->createDeleteForm($prospecto);

        return $this->render('prospecto/enviar.html.twig', array(
            'prospecto' => $prospecto,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Prospecto entity.
     *
     * @Route("/{id}/edit", name="prospecto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Prospecto $prospecto)
    {
        if ($request->isMethod('GET'));
        {
            $documentosDesc = array();
            foreach ($prospecto->getDocumentos() as $documento)
            {
                array_push($documentosDesc, $documento->getNombre());
            }
            $prospecto->setDocumentos(array());
        }

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findAll();
        $estadoinvalido = new Estado();
        $estadoinvalido->setIdEstado(0);
        $estadoinvalido->setNombre("No identificado");
        array_unshift($estados, $estadoinvalido);

        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findBy(array(), array('nombre' => 'ASC'));

        $estatusavance = $this->getDoctrine()
            ->getRepository('AppBundle:EstatusAvance')
            ->findAll();

        $tiposprospecto = $this->getDoctrine()
            ->getRepository('AppBundle:TipoProspecto')
            ->findAll();

        $documentos = $this->getDoctrine()
            ->getRepository('AppBundle:Documento')
            ->findAll();

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        if ($prospecto->getIdEstado() == null)
        {
            $prospecto->setIdEstado($estadoinvalido);
        }

        //$deleteForm = $this->createDeleteForm($prospecto);
        $editForm = $this->createForm('AppBundle\Form\ProspectoType', $prospecto,
            array('estados' => $estados,
                'canalescaptacion' => $canalescaptacion,
                'estatusavance' => $estatusavance,
                'tiposprospecto' => $tiposprospecto,
                'documentos' => $documentos,
                'usuarios' => $usuarios,
            ));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($prospecto->getIdEstado()->getIdEstado() == 0)
            {
                $prospecto->setIdEstado(null);
            }

            $em->persist($prospecto);
            $em->flush();

            return $this->redirectToRoute('prospecto_index', array());
        }

        return $this->render('prospecto/edit.html.twig', array(
            'prospecto' => $prospecto,
            'form' => $editForm->createView(),
            'documentosDesc' => $documentosDesc
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/borrar", name="prospecto_borrar")
     * @Method("GET")
     */
    public function borrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($id);

        // 1. Borrar de Propiedad
        $connection = $em->getConnection();
        $statement = $connection->prepare('DELETE FROM inmueble_prospecto  WHERE id_prospecto = ' . strval($id));
        $statement->execute();

        // 1. Borrar de Tarea
        $connection = $em->getConnection();
        $statement = $connection->prepare('DELETE FROM tarea  WHERE id_prospecto = ' . strval($id));
        $statement->execute();

        // 2. Borrar documentos
        $archivos = $em->getRepository('AppBundle:ArchivoP')->findByProspecto($prospecto);
        foreach ($archivos as $archivo)
        {
            // Borrar archivo
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

            }
        }

        $em->remove($prospecto);
        $em->flush();

        return $this->redirectToRoute('prospecto_index');
    }

    /**
     * Deletes a Prospecto entity.
     *
     * @Route("/{id}", name="prospecto_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Prospecto $prospecto)
    {
        $form = $this->createDeleteForm($prospecto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prospecto);
            $em->flush();
        }

        return $this->redirectToRoute('prospecto_index');
    }
*/
    /**
     * Creates a form to delete a Prospecto entity.
     *
     * @param Prospecto $prospecto The Prospecto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
   /* private function createDeleteForm(Prospecto $prospecto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prospecto_delete', array('id' => $prospecto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
