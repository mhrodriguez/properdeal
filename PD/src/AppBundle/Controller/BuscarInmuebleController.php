<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/27/16
 * Time: 5:33 p.m.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\InmuebleActividad;
use Proxies\__CG__\AppBundle\Entity\CategoriaInmueble;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Inmueble;
use AppBundle\Entity\TipoInmueble;
use AppBundle\Entity\Estado;
use AppBundle\Form\InmuebleType;
use Symfony\Component\Form\FormError;
use AppBundle\Entity\Moneda;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\HttpFoundation\Response;

/**
 * Buscar controller.
 *
 * @Route("/buscarinmueble")
 */
class BuscarInmuebleController extends Controller
{
    /**
     *
     * @Route("/compartirinmueble", name="buscarinmueble_compartirinmueble")
     * @Method({"GET"})
     */
    public function compartirinmuebleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // 0. Determinar nombre
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            $authuser= $this->get('security.context')->getToken()->getUser();
            $txtNombre = $authuser->getNombre();
        }
        else {
            $txtNombre = $request->query->get('txtNombre');
        }

        $txtMail = $request->query->get('txtMail');
        $idInmueble = $request->query->get('idInmueble');
        $backUrl = $request->query->get('backUrl');

        // 1. Obtener inmueble
        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

        // 1. Enviar mail
        $message = \Swift_Message::newInstance()
            ->setSubject($txtNombre . " te ha compartido una propiedad.")
            ->setFrom(array($inmueble->getIdUsuario()->getEmail() => $inmueble->getIdUsuario()->getNombre()))
            ->setReplyTo(array($inmueble->getIdUsuario()->getEmail() => $inmueble->getIdUsuario()->getNombre()))
            ->setTo($txtMail)
            ->setBody(
                $this->renderView(
                    'buscarinmueble/mail_enviarinmueble.html.twig',
                    array('titulo' => "",
                        'mensaje' => "",
                        'inmuebles' => array(0=>$inmueble),
                        'asesor' => $inmueble->getIdUsuario(),
                        'ida' => $inmueble->getIdUsuario()->getId())
                ),
                'text/html'
            );
        $this->get('mailer')->send($message);

        // 2. Enviar mail al asesor que activo el inmueble
        $em = $this->getDoctrine()->getManager();
        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

        $message = \Swift_Message::newInstance()
            ->setSubject("Se ha compartido una propiedad que usted dió de alta")
            ->setFrom("properdealmx@gmail.com")
            ->setTo($inmueble->getIdUsuario()->getEmail())
            ->setBody(
                $this->renderView(
                    'buscarinmueble/mail_inmueblecompartido.html.twig',
                    array('nombre' => $txtNombre,
                        'idInmueble' => $idInmueble)
                ),
                'text/html'
            );
        $this->get('mailer')->send($message);

        $this->addFlash(
            'notice',
            '¡Propiedad enviada exitosamente!'
        );

        return $this->redirect($backUrl);
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarform", name="buscarinmueble_buscarform")
     * @Method({"GET", "POST"})
     */
    public function buscarformAction(Request $request)
    {
        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findBy(array('activo' => true));

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findBy(array('activo' => true));
        $monedaTodas = new Moneda(-1, 'Todas');
        array_unshift($monedas, $monedaTodas);

        $municipios = array();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findAll();
        $tiposInmuebleTodos = new TipoInmueble(-1, 'Todos');
        $categoriaInmueble = new CategoriaInmueble(); $categoriaInmueble->setIdCategoriaInmueble(-1); $categoriaInmueble->setNombre('todos');
        $tiposInmuebleTodos->setIdCategoriaInmueble($categoriaInmueble);
        array_unshift($tiposInmueble, $tiposInmuebleTodos);

        $inmueble = new Inmueble();
        $inmueble->setActivo(true);
        $form = $this->createForm('AppBundle\Form\BuscarInmuebleType', $inmueble,
            array('estados' => $estados,
                'municipios' => $municipios,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
                'monedas' => $monedas
            )
        );

        return $this->render('buscarinmueble/buscarform.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarformvertical", name="buscarinmueble_buscarformvertical")
     * @Method({"GET", "POST"})
     */
    public function buscarformverticalAction(Request $request)
    {
        $error=false;

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findBy(array('activo' => true));

        $monedas = $this->getDoctrine()
            ->getRepository('AppBundle:Moneda')
            ->findBy(array('activo' => true));
        $monedaTodas = new Moneda(-1, 'Todas');
        array_unshift($monedas, $monedaTodas);

        $municipios = array();

        $operacionesInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:OperacionInmueble')
            ->findAll();

        $tiposInmueble = $this->getDoctrine()
            ->getRepository('AppBundle:TipoInmueble')
            ->findAll();
        $tiposInmuebleTodos = new TipoInmueble(-1, 'Todos');
        $categoriaInmueble = new CategoriaInmueble(); $categoriaInmueble->setIdCategoriaInmueble(-1); $categoriaInmueble->setNombre('todos');
        $tiposInmuebleTodos->setIdCategoriaInmueble($categoriaInmueble);
        array_unshift($tiposInmueble, $tiposInmuebleTodos);

        $inmueble = new Inmueble();
        $inmueble->setActivo(true);
        $form = $this->createForm('AppBundle\Form\BuscarInmuebleType', $inmueble,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'municipios' => $municipios,
                'operacionesInmueble' => $operacionesInmueble,
                'monedas' => $monedas
            )
        );

        return $this->render('buscarinmueble/buscarformvertical.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/resultados", name="buscarinmueble_resultados")
     * @Method({"GET"})
     */
    public function resultadosAction(Request $request)
    {
        // 1. Obtener parametros de busqueda
        $buscar_inmueble = $request->query->get('buscar_inmueble');

        // 1.1 Tipo de Inmueble
        $idTipoInmueble = $buscar_inmueble['id_tipo_inmueble'];
        if ($idTipoInmueble > 0) {
            $tiposInmueble = $this->getDoctrine()
                ->getRepository('AppBundle:TipoInmueble')
                ->findAll();
            $tiposInmuebleTodos = new TipoInmueble(-1, 'Todos');
            $categoriaInmueble = new CategoriaInmueble();
            $categoriaInmueble->setIdCategoriaInmueble(-1);
            $categoriaInmueble->setNombre('todos');
            $tiposInmuebleTodos->setIdCategoriaInmueble($categoriaInmueble);
            array_unshift($tiposInmueble, $tiposInmuebleTodos);

            $idTipoInmueble = $tiposInmueble[$idTipoInmueble]->getIdTipoInmueble();
        }

        // 1.1 Categoria de Inmueble
        $idCategoriaInmueble = $buscar_inmueble['id_categoria_inmueble'];
        if ($idCategoriaInmueble >= 0) {
            $categoriasInmueble = $this->getDoctrine()
                ->getRepository('AppBundle:CategoriaInmueble')
                ->findAll();
            $idCategoriaInmueble = $categoriasInmueble[$idCategoriaInmueble]->getIdCategoriaInmueble();
        }

        // 1.2 Transaccion
        $idOperacionInmueble = $buscar_inmueble['id_operacion_inmueble'];
        if ($idOperacionInmueble >= 0) {
            $operacionesInmueble = $this->getDoctrine()
                ->getRepository('AppBundle:OperacionInmueble')
                ->findAll();
            $idOperacionInmueble = $operacionesInmueble[$idOperacionInmueble]->getIdOperacionInmueble();
        }

        // 1.3 Estado
        $estadoSeleccionado=null;
        $idEstado = $buscar_inmueble['id_estado'];
        if ($idEstado >= 0) {
            $estados = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')
                ->findBy(array('activo' => true));

            $estadoSeleccionado = $estados[$idEstado];
            $idEstado = $estados[$idEstado]->getIdEstado();
        }

        // 1.4 Municipio
        $idMunicipio = $buscar_inmueble['id_municipio'];
        if ($idMunicipio >= 0) {
            $municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado'=>$estadoSeleccionado, 'activo' => true), array('nombre'=>'ASC'));
            $idMunicipio = $municipios[$idMunicipio]->getIdMunicipio();
        }

        // 1.5 Moneda
        $idMoneda = $buscar_inmueble['id_moneda'];
        if ($idMoneda >= 0 && $idMoneda!=NULL) {
            $monedas = $this->getDoctrine()
                ->getRepository('AppBundle:Moneda')
                ->findBy(array('activo' => true));
            $monedaTodas = new Moneda(-1, 'Todas');
            array_unshift($monedas, $monedaTodas);

            $idMoneda = $monedas[$idMoneda]->getIdMoneda();
        }
        else
        {
            $idMoneda=-1;
        }

        // 1.5 Colonia
        $colonia = $buscar_inmueble['colonia'];

        $precio = $buscar_inmueble['precio'];
        $preciomax = $buscar_inmueble['preciomax'];
        $metrosterreno = $buscar_inmueble['metrosterreno'];
        $metrosterrenomax = $buscar_inmueble['metrosterrenomax'];

        $metrosconstruccion = $buscar_inmueble['metrosconstruccion'];
        $metrosconstruccionmax = $buscar_inmueble['metrosconstruccionmax'];

        $recamaras = $buscar_inmueble['recamaras'];
        $plantas = $buscar_inmueble['plantas'];

        $amueblado = $buscar_inmueble['amueblado'];
        $alberca = $buscar_inmueble['alberca'];

        $legacyid = $buscar_inmueble['legacyid'];

        if ($legacyid == null) {
            $inmuebles = $this->getDoctrine()
                ->getRepository('AppBundle:Inmueble')
                ->findByParameters($idTipoInmueble, $idOperacionInmueble, $idCategoriaInmueble, $idEstado, $idMunicipio, $colonia, $precio,
                    $preciomax, $metrosterreno, $metrosterrenomax, $metrosconstruccion, $metrosconstruccionmax, $recamaras, $plantas, -1,
                    $amueblado, $alberca, $legacyid, $idMoneda);
        }
        else
        {
            $inmuebles = $this->getDoctrine()->getRepository('AppBundle:Inmueble')->findBy(array('legacyid'=>intval($legacyid), 'activo'=>1));
        }

        return $this->render('buscarinmueble/resultados.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     * @Route("/resultados2.{_format}", name="buscarinmueble_resultados2", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method({"GET"})
     */
    public function resultados2Action(Request $request, $_format)
    {
        // 1. Obtener parametros de busqueda
        $idTipoInmueble = $request->query->get('id_tipo_inmueble');
        $idCategoriaInmueble = $request->query->get('id_categoria_inmueble');
        $ciudad = $request->query->get('ciudad');
        $idZona = intval($request->query->get('id_zona'));
        $idEstado = intval($request->query->get('id_estado'));
        $precio = $request->query->get('preciomin');
        $preciomax = $request->query->get('preciomax');
        $legacyid = $request->query->get('legacyid');

        if ($request->query->get('id_operacion_inmueble') != NULL)
        {
            $idOperacionInmueble = $request->query->get('id_operacion_inmueble');
        }
        else
        {
            $idOperacionInmueble=-1;
        }

        if ($request->query->get('id_moneda') != NULL) {
            $idMoneda = intval($request->query->get('id_moneda'));
        }
        else{
            $idMoneda=-1;
        }

        // 2. Buscar Ciudad
        if ($idEstado != NULL) {
            $estado = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')->findOneByIdEstado($idEstado);
            $municipio = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')->findOneBy(array('nombre' => $ciudad, 'estado' => $estado));
            if ($municipio != null) {
                $idMunicipio = $municipio->getIdMunicipio();
            } else {
                $idMunicipio = -1;
            }
        }
        else
        {
            $idEstado=-1; $idMunicipio=-1;
        }

        $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByParameters($idTipoInmueble, $idOperacionInmueble, $idCategoriaInmueble, $idEstado, $idMunicipio, NULL, $precio,
                $preciomax, NULL, NULL, NULL, NULL, NULL, NULL, $idZona, false, false, $legacyid, $idMoneda);

        /* $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByParameters(1, 1, 1, -1, 'Monterrey', NULL, '1000000.0',
                '5000000.0', NULL, NULL, NULL, NULL, 1);
        */
        if ($_format == "html")
        {
            return $this->render('buscarinmueble/resultados.html.twig', array(
                'inmuebles' => $inmuebles
            ));
        }
        else
        {
            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($inmuebles, 'json', array('groups' => array('list')));

            return new Response($jsonContent);
        }
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     * @Route("/existenrangoprecio.{_format}", name="buscarinmueble_existenrangoprecio", defaults= {"_format"="json"}, requirements = {"_format"="json"})
     * @Method({"GET"})
     */
    public function existenrangoprecioAction(Request $request, $_format)
    {
        // 1. Obtener parametros de busqueda
        $idCategoriaInmueble = $request->query->get('idCategoriaInmueble');
        $idTipoInmueble = $request->query->get('idTipoInmueble');
        $idOperacionInmueble = $request->query->get('idOperacionInmueble');
        $preciomin = $request->query->get('preciomin');
        $preciomax = $request->query->get('preciomax');
        $idMoneda = $request->query->get('idMoneda');
        $idTransaccion = $request->query->get('idTransaccion');
        $idMunicipio = $request->query->get('idMunicipio');

        $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByPrecioRango($idCategoriaInmueble, $idTipoInmueble, $idOperacionInmueble, $idMunicipio, $preciomin, $preciomax, $idMoneda);

        if (count($inmuebles)>0)
        {
            return new Response('{"resultado": true, "idTransaccion": ' . $idTransaccion . '}');
        }
        else
        {
            return new Response('{"resultado": false, "idTransaccion": ' . $idTransaccion . '}');
        }
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/buscarpanel", name="buscarinmueble_buscarpanel")
     * @Method("GET")
     */
    public function buscarPanelAction(Request $request)
    {
        $buscar_inmueble = $request->query->get('buscar_inmueble');

        return $this->render('buscarinmueble/buscarpanel.html.twig', array(
            'parametros' => $buscar_inmueble
        ));
    }

    /**
     * Finds and displays a Inmueble entity.
     * @Route("/{id}", name="buscarinmueble_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Inmueble $inmueble)
    {
        $currentUrl = $request->getUri();

        // Registrar evento
        $inmuebleActividad = new InmuebleActividad();
        $inmuebleActividad->setIdInmueble($inmueble);
        $inmuebleActividad->setActividadcodigo(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inmuebleActividad);
        $em->flush();

        return $this->render('buscarinmueble/show.html.twig', array(
        'backUrl' => $currentUrl,
        'inmueble' => $inmueble));
        //  'delete_form' => $deleteForm->createView(),
    }

    /**
     * Finds and displays a Inmueble entity.
     * @Route("/{id}/pdf", name="buscarinmueblepdf_show")
     * @Method("GET")
     */
    public function showpdfAction(Request $request, Inmueble $inmueble)
    {
        $currentUrl = $request->getUri();

        // Registrar evento
        $inmuebleActividad = new InmuebleActividad();
        $inmuebleActividad->setIdInmueble($inmueble);
        $inmuebleActividad->setActividadcodigo(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inmuebleActividad);
        $em->flush();

        return $this->render('buscarinmueble/showpdf.html.twig', array(
            'backUrl' => $currentUrl,
            'inmueble' => $inmueble));
        //  'delete_form' => $deleteForm->createView(),
    }

    /**
     * Finds and displays a Inmueble entity.
     * @Route("/showjs/{id}", name="buscarinmueble_showjs")
     * @Method("GET")
     */
    public function showjsAction(Request $request, Inmueble $inmueble)
    {
        $currentUrl = $request->getUri();

            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($inmueble, 'json', array('groups' => array('list')));

            return new Response($jsonContent);
    }

    /**
     * Finds and displays a Inmueble entity.
     *
     * @Route("/showfs/{id}", name="buscarinmueble_showfs")
     * @Method("GET")
     */
    public function showfsAction(Request $request, Inmueble $inmueble)
    {
        $idAsesor = $request->query->get('ida');

        $currentUrl = $request->getUri();

        if ($idAsesor != null) {
            $asesor = $this->getDoctrine()
                ->getRepository('AppBundle:Usuario')
                ->findOneById($idAsesor);
        }
        else
        {
            $asesor = $inmueble->getIdUsuario();
        }

        // Registrar evento
        $inmuebleActividad = new InmuebleActividad();
        $inmuebleActividad->setIdInmueble($inmueble);
        $inmuebleActividad->setActividadcodigo(1);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inmuebleActividad);
        $em->flush();


        return $this->render('buscarinmueble/showfs.html.twig', array(
            'inmueble' => $inmueble,
            'backUrl' => $currentUrl,
            'asesor' => $asesor
        ));
    }


}