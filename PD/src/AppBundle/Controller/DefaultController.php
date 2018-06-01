<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findBy(array('destacado' => true, 'privado' => false));

        $asesores = $em->getRepository('AppBundle:Usuario')->findByAsesores();

        $inmuebles2 = $em->getRepository('AppBundle:Inmueble')->findByTop5();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'inmuebles' => $inmuebles,
            'inmuebles2' => $inmuebles2,
            'asesores' => $asesores
        ));
    }
}
