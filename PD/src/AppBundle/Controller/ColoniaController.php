<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/1/16
 * Time: 5:45 p.m.
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
 * @Route("/colonia")
 */
class ColoniaController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/index.{_format}", name="colonia_index", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $colonias = array();
        $intindexMunicipio = intVal($request->query->get('indexMunicipio'));
        $intindexEstado = intVal($request->query->get('indexEstado'));

        $em = $this->getDoctrine()->getManager();

        if ($intindexEstado!=-1 && $intindexMunicipio!=-1) {
            $estados = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')
                ->findAll();

            if ($intindexEstado < count($estados))
            {
                $idEstado = $estados[$intindexEstado];
                $municipios = $em->getRepository('AppBundle:Municipio')->findByEstado($idEstado);

                if ($intindexMunicipio < count($municipios))
                {
                    $idMunicipio = $municipios[$intindexMunicipio];
                    $colonias = $em->getRepository('AppBundle:Colonia')->findByMunicipio($idMunicipio);
                }
            }
        }

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($colonias, 'json', array('groups' => array('list')));

        return new Response($jsonContent);
    }
}