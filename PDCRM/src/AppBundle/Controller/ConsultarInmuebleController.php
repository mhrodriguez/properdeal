<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/27/16
 * Time: 5:33 p.m.
 */

namespace AppBundle\Controller;

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

/**
 * Buscar controller.
 *
 * @Route("/consultarinmueble")
 */
class ConsultarInmuebleController extends Controller
{

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/consultarformvertical", name="consultarinmueble_buscarformvertical")
     * @Method({"GET", "POST"})
     */
    public function consultarformverticalAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $error=false;

        // 1. Cargar catálogos
        /*$authuser= $this->get('security.context')->getToken()->getUser();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );*/
        //array_unshift($usuarios, $authuser);
        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();

        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findByActivo(true);

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
                'municipios' => array(),
                'operacionesInmueble' => $operacionesInmueble,
                'asesores' => $usuarios
            )
        );

        return $this->render('consultarinmueble/buscarformvertical.html.twig', array(
            'inmueble' => $inmueble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/resultados", name="consultarinmueble_resultados")
     * @Method({"GET"})
     */
    public function resultadosAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

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

        // 1.2 Transaccion
        $idOperacionInmueble = $buscar_inmueble['id_operacion_inmueble'];
        if ($idOperacionInmueble >= 0) {
            $operacionesInmueble = $this->getDoctrine()
                ->getRepository('AppBundle:OperacionInmueble')
                ->findAll();
            $idOperacionInmueble = $operacionesInmueble[$idOperacionInmueble]->getIdOperacionInmueble();
        }

        // 1.3 Estado
        $idEstado = $buscar_inmueble['id_estado'];
        if ($idEstado >= 0) {
            $estados = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')
                ->findByActivo(true);
            $estadoSeleccionado = $estados[$idEstado];
            $idEstado = $estados[$idEstado]->getIdEstado();
        }

        // 1.4 Municipio
        $idMunicipio = $buscar_inmueble['id_municipio'];
        if ($idMunicipio >= 0) {

            $municipios = $this->getDoctrine()
                ->getRepository('AppBundle:Municipio')
                ->findBy(array('estado'=>$estadoSeleccionado, 'activo'=>true));

            $idMunicipio = $municipios[$idMunicipio]->getIdMunicipio();
        }

        // 1.5 Colonia
        $colonia = $buscar_inmueble['colonia'];

        // 1.6 Asesors
        $idUsuario = $buscar_inmueble['id_usuario'];
        if ($idUsuario >= 0) {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();

            $idUsuario = $usuarios[$idUsuario]->getId();
        }

        $precio = $buscar_inmueble['precio'];
        $preciomax = $buscar_inmueble['preciomax'];
        $metrosterreno = $buscar_inmueble['metrosterreno'];
        $metrosterrenomax = $buscar_inmueble['metrosterrenomax'];
        $metrosconstruccion = $buscar_inmueble['metrosconstruccion'];
        $metrosconstruccionmax = $buscar_inmueble['metrosconstruccionmax'];
        $recamaras = $buscar_inmueble['recamaras'];
        $plantas = $buscar_inmueble['plantas'];

        $preciometroterrenomin = $buscar_inmueble['preciometroterrenomin'];
        $preciometroterrenomax = $buscar_inmueble['preciometroterrenomax'];
        $preciometroconstruccionmin = $buscar_inmueble['preciometroconstruccionmin'];
        $preciometroconstruccionmax = $buscar_inmueble['preciometroconstruccionmax'];
        $alberca = $buscar_inmueble['alberca'];
        $amueblado = ($buscar_inmueble['amueblado']);
        $mostrarinactivas = ($buscar_inmueble['mostrarinactivas']);

        $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByParameters($idTipoInmueble, $idOperacionInmueble, $idEstado, $idMunicipio, $colonia, $precio,
                $preciomax, $metrosterreno, $metrosterrenomax, $recamaras, $plantas,
                $preciometroterrenomin, $preciometroterrenomax, $preciometroconstruccionmin, $preciometroconstruccionmax,
                $metrosconstruccion, $metrosconstruccionmax,
                $alberca, $amueblado, $mostrarinactivas, $idUsuario, NULL, NULL);

        if ($authuser->getRol()->getIdRol() != 4) {
            $inmuebles = InmuebleController::filtrarInmueblesPrivados($inmuebles, $authuser->getId());
        }

        return $this->render('consultarinmueble/resultados.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/destacados", name="consultarinmueble_destacados")
     * @Method({"GET"})
     */
    public function destacadosAction(Request $request)
    {
        $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByDestacado(true);

        return $this->render('consultarinmueble/resultados.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }

    /**
     * Lists all Inmueble entities.
     *
     * @Route("/consultarpanel", name="consultarinmueble_buscarpanel")
     * @Method("GET")
     */
    public function consultarPanelAction(Request $request)
    {
        $consultar_inmueble = $request->query->get('consultar_inmueble');

        return $this->render('consultarinmueble/buscarpanel.html.twig', array(
            'parametros' => $consultar_inmueble
        ));
    }

}