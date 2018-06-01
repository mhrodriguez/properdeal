<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/28/16
 * Time: 10:01 a.m.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\HttpFoundation\Response;

/**
 * Usuario controller.
 *
 * @Route("/municipio")
 */
class MunicipioController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/index.{_format}", name="municipio_index", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $em = $this->getDoctrine()->getManager();

        $idEstado = intVal($request->query->get('idEstado'));
        $idCategoria = intVal($request->query->get('idCategoria'));
        $idTipoInmueble = intVal($request->query->get('idTipoInmueble'));
        $idOperacionInmueble = intVal($request->query->get('idOperacionInmueble'));
        $estado = $em->getRepository('AppBundle:Estado')->findOneByIdEstado($idEstado);

        $municipios = $em->getRepository('AppBundle:Municipio')->findBy(array('estado'=>$estado, 'activo'=>1), array('nombre' => 'ASC'));

        //$categoriaInmueble = $em->getRepository('AppBundle:CategoriaInmueble')->findByIdCategoriaInmueble($idCategoria);

        $tipoInmueble = $em->getRepository('AppBundle:TipoInmueble')->findByIdTipoInmueble($idTipoInmueble);
        $operacionInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findByIdOperacionInmueble($idOperacionInmueble);
        //$tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findBy(array('id_categoria_inmueble'=>$categoriaInmueble));

        // Verificar si se utiliza esta municipio
        foreach ($municipios as $municipio)
        {
            $municipio->setUsado(false);

            //foreach ($tiposInmueble as $tipoInmueble)
            //{
                $inmuebles = $em->getRepository('AppBundle:Inmueble')
                    ->findBy(array('id_municipio'=>$municipio, 'id_tipo_inmueble'=>$tipoInmueble, 'id_operacion_inmueble'=>$operacionInmueble, 'activo'=>1, 'privado'=>0), array(), 1, 0);

                if (count($inmuebles)>0)
                {
                    $municipio->setUsado(true);
                    //break;
                }
            //}
        }

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($municipios, 'json', array('groups' => array('list')));

        return new Response($jsonContent);
    }

    /**
     * Lists all Usuario entities.
     *
     * @Route("/index2.{_format}", name="municipio_index2", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function index2Action(Request $request, $_format)
    {
        $municipios = array();

        $em = $this->getDoctrine()->getManager();

        $indexEstado = intVal($request->query->get('indexEstado'));

        if ($indexEstado!=-1) {

            $estados = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')
                ->findBy(array('activo' => true));

            $estado = $estados[$indexEstado];

            $municipios = $em->getRepository('AppBundle:Municipio')->findBy(array('estado'=>$estado, 'activo'=>1), array('nombre' => 'ASC'));

        }

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($municipios, 'json', array('groups' => array('list')));

        return new Response($jsonContent);
    }
}