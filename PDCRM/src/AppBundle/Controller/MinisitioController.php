<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/27/16
 * Time: 5:13 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Contacto controller.
 *
 * @Route("/minisitio")
 */
class MinisitioController extends Controller
{
    /**
     * @Route("/{uid}", name="minisitio_index", defaults={"uid": "0"})
     */
    public function indexAction(Request $request, $uid)
    {
        $em = $this->getDoctrine()->getManager();

        // 1. Obtener información del Asesor
        $usuario = $em->getRepository('AppBundle:Usuario')->findByWebsitekey($uid)[0];

        return $this->render('minisitio/index.html.twig', array(
            'asesor' => $usuario,
            'webPathLogo' => $usuario->getWebPathLogo()
        ));

    }

    public function headershowAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('minisitio/header/show.html.twig');
    }
}