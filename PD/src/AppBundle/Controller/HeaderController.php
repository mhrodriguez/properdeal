<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\CategorigaInmueble;
use AppBundle\Repository\CategoriaInmuebleRepository;

class HeaderController extends Controller
{
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findBy(
            array('activo' => true)
        );

        $tiposInmueble = $em->getRepository('AppBundle:TipoInmueble')->findBy(
            array('activo' => true)
        );

        $categoriasInmueble = $em->getRepository('AppBundle:CategoriaInmueble')->findBy(
            array('activo' => true)
        );

        // replace this example code with whatever you need
        return $this->render('header/show.html.twig',
            array("operacionesInmueble" => $operacionesInmueble,
            "tiposInmueble" => $tiposInmueble,
            "categoriasInmueble" => $categoriasInmueble)
            );
    }
}
