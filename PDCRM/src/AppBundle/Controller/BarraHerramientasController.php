<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/14/16
 * Time: 11:40 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BarraHerramientasController extends Controller
{
    public function showAction($indexSeleccionado, $numProspectos)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();


        // Si es SUPER ADMIN
        if ($authuser->getRol()->getIdRol() == 4) {
            $countInmuebles = $em->getRepository('AppBundle:Inmueble')->findByActivoCount(1);
            $countInmueblesInactivos = $em->getRepository('AppBundle:Inmueble')->findByActivoCount(0);
            $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByCount();
            $countSolicitudes = $em->getRepository('AppBundle:Solicitud')->findByCount();
        } else {
            $countInmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerCount($authuser->getId());
            $countInmueblesInactivos = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivoCount($authuser->getId(), 0);
            $countProspectos = $em->getRepository('AppBundle:Prospecto')->findByOwnerCount($authuser->getId());
            $countSolicitudes = $em->getRepository('AppBundle:Solicitud')->findByOwnerCount($authuser->getId());
        }

        $countNoticias = $em->getRepository('AppBundle:Noticia')->findByOwnerCount($authuser->getId());

        $mensajeRepository = $em->getRepository('AppBundle:Mensaje');
        $mensajeRepository->setDoctrineManager($em);
        $countMensajes= $mensajeRepository->findByDestinoemailLeidoCount($authuser->getEmail(), false);


        // replace this example code with whatever you need
        return $this->render('barra_herramientas/show.html.twig',
            array('indexSeleccionado' => $indexSeleccionado,
                  'countInmuebles' => $countInmuebles,
                  'countInmueblesInactivos' => $countInmueblesInactivos,
                  'countProspectos' => $countProspectos,
                  'countSolicitudes' => $countSolicitudes,
                  'countNoticias' => $countNoticias,
                  'countMensajes' => $countMensajes
                ) );
    }
}