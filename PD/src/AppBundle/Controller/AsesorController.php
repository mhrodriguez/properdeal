<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/17/16
 * Time: 6:37 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Doctrine\Common\Annotations\AnnotationReader;

use Symfony\Component\HttpFoundation\Response;

/**
 * Usuario controller.
 *
 * @Route("/asesor")
 */
class AsesorController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/index.{_format}", name="asesor_index", defaults= {"_format"="html"}, requirements = {"_format"="html|json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $em = $this->getDoctrine()->getManager();

        $asesoresPrincipales = $em->getRepository('AppBundle:Usuario')->findBy(
            array('activo' => true, 'rol' => 1)
        );
        $asesoresSecundarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('activo' => true, 'rol' => 2)
        );

        $asesores = array_merge($asesoresPrincipales, $asesoresSecundarios);

        if ($_format == "html")
        {
            return $this->render('asesor/index.html.twig', array(
                'asesores' => $asesores,
            ));
        } else
        {
            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($asesores, 'json', array('groups' => array('list')));

            return new Response($jsonContent);
        }
    }
}