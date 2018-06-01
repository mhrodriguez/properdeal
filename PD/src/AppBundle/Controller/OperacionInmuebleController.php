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
 * @Route("/operacionInmueble")
 */
class OperacionInmuebleController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/index.{_format}", name="operacionInmueble_index", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $operacionInmuebles = array();

        $em = $this->getDoctrine()->getManager();

        $operacionInmuebles = $em->getRepository('AppBundle:OperacionInmueble')->findAll();

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($operacionInmuebles, 'json', array('groups' => array('list')));

        return new Response($jsonContent);
    }
}