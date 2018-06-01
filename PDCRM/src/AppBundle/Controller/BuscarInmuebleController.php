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
 * @Route("/buscarinmueble")
 */
class BuscarInmuebleController extends Controller
{
    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/buscarform", name="buscarinmueble_buscarform")
     * @Method({"GET", "POST"})
     */
    public function buscarformAction(Request $request)
    {
        $error=false;

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findAll();

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

        $em = $this->getDoctrine()->getManager();

        $inmueble = new Inmueble();
        $inmueble->setActivo(true);
        $form = $this->createForm('AppBundle\Form\BuscarInmuebleType', $inmueble,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble
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
            ->findAll();

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

        $em = $this->getDoctrine()->getManager();

        $inmueble = new Inmueble();
        $inmueble->setActivo(true);
        $form = $this->createForm('AppBundle\Form\BuscarInmuebleType', $inmueble,
            array('estados' => $estados,
                'tiposInmueble' => $tiposInmueble,
                'operacionesInmueble' => $operacionesInmueble,
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
                ->findAll();
            $idEstado = $estados[$idEstado]->getIdEstado();
        }

        // 1.4 Municipio
        $ciudad = $buscar_inmueble['ciudad'];

        // 1.5 Colonia
        $colonia = $buscar_inmueble['colonia'];

        $precio = $buscar_inmueble['precio'];
        $preciomax = $buscar_inmueble['preciomax'];
        $metrosterreno = $buscar_inmueble['metrosterreno'];
        $metrosterrenomax = $buscar_inmueble['metrosterrenomax'];
        $recamaras = $buscar_inmueble['recamaras'];
        $plantas = $buscar_inmueble['plantas'];

        $inmuebles = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->findByParameters($idTipoInmueble, $idOperacionInmueble, $idEstado, $ciudad, $colonia, $precio,
                $preciomax, $metrosterreno, $metrosterrenomax, $recamaras, $plantas, NULL, NULL);

        return $this->render('buscarinmueble/resultados.html.twig', array(
            'inmuebles' => $inmuebles
        ));
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
     * Lists all Inmueble entities.
     *
     * @Route("/buscarpanelnh", name="buscarinmueble_buscarpanelnh")
     * @Method("GET")
     */
    public function buscarPanelNHAction(Request $request)
    {
        $buscar_inmueble = $request->query->get('buscar_inmueble');

        return $this->render('buscarinmueble/buscarpanelnh.html.twig', array(
            'parametros' => $buscar_inmueble
        ));
    }

    /**
     * Finds and displays a Inmueble entity.
     *
     * @Route("/{id}", name="buscarinmueble_show")
     * @Method("GET")
     */
    public function showAction(Inmueble $inmueble)
    {
        //$deleteForm = $this->createDeleteForm($inmueble);

        return $this->render('buscarinmueble/show.html.twig', array(
            'inmueble' => $inmueble,
            //  'delete_form' => $deleteForm->createView(),
        ));
    }

}