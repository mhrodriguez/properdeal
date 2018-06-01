<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/27/16
 * Time: 12:11 a.m.
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
 * @Route("/estado")
 */
class EstadoController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/index.{_format}", name="estado_index", defaults= {"_format"="html"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $em = $this->getDoctrine()->getManager();

        $estados = $this->getDoctrine()
                ->getRepository('AppBundle:Estado')
                ->findBy(array('activo' => 1, 'idEstado'=>array(19,22,23)));

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($estados, 'json', array('groups' => array('list')));

        return new Response($jsonContent);
    }
}