<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccesoDirectoController extends Controller
{
    public function showAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $fecha = new \DateTime();
        date_sub($fecha, date_interval_create_from_date_string('15 days'));
        $countSolicitudes = count($this->getDoctrine()
            ->getRepository('AppBundle:Solicitud')
            ->findAllDateMayor($fecha));

        // replace this example code with whatever you need
        return $this->render('barra_accesosdirectos/show.html.twig',
            array('minisitiokey' => $authuser->getWebsitekey(),
            'countSolicitudes' => $countSolicitudes)
    );
    }

    public function showvAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $fecha = new \DateTime();
        date_sub($fecha, date_interval_create_from_date_string('15 days'));
        $countSolicitudes = count($this->getDoctrine()
            ->getRepository('AppBundle:Solicitud')
            ->findAllDateMayor($fecha));

        // replace this example code with whatever you need
        return $this->render('barra_accesosdirectos/showv.html.twig',
            array('minisitiokey' => $authuser->getWebsitekey(),
                'countSolicitudes' => $countSolicitudes)
        );
    }
}