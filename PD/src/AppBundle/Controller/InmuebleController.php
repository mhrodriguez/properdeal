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
 * @Route("/inmueble")
 */
class InmuebleController extends Controller
{
    /**
     * Lists all Inmueble entities.
     *
     * @Route("/index", name="inmueble_index")
     * @Method("GET")
     */
    public function buscarPanelAction(Request $request)
    {
        $idAsesor = $request->query->get('idAsesor');

        return $this->render('inmueble/index.html.twig', array(
            'idAsesor' => $idAsesor
        ));
    }

    /**
     * Recopila los datos para hacer una busqueda de inmuebles
     *
     * @Route("/resultados", name="inmueble_resultados")
     * @Method({"GET"})
     */
    public function resultadosAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // 1. Obtener parametros de busqueda
        $idAsesor = $request->query->get('idAsesor');

        $asesor = $em->getRepository('AppBundle:Usuario')->findOneById($idAsesor);

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('id_usuario' => $asesor, 'activo' => 1, 'privado' => 0));

        return $this->render('buscarinmueble/resultados.html.twig', array(
            'inmuebles' => $inmuebles
        ));
    }
}