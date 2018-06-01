<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/14/16
 * Time: 4:37 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\AsesorPermiso;

class PanelPrincipalController extends Controller
{
    /**
     * @Route("/panel_principal", name="panel_principal")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $authuser= $this->get('security.context')->getToken()->getUser();
        // 1. Verificar Permisos de  asesor, sino crearlos
        $asesorPermiso = $em->getRepository('AppBundle:AsesorPermiso')->findOneByUsuario($authuser);
        if ($asesorPermiso == null)
        {
            $asesorPermiso = new AsesorPermiso();
            $asesorPermiso->setActivo(true);
            $asesorPermiso->setAltapropiedad(true);
            $asesorPermiso->setDuplicarprospectos(true);
            $asesorPermiso->setEditarpropiedad(true);
            $asesorPermiso->setEliminarpropiedad(true);
            $asesorPermiso->setInactivarpropiedad(true);
            $asesorPermiso->setNotificaraltapropiedad(true);
            $asesorPermiso->setPublicarsolocondatospropietario(true);
            $asesorPermiso->setDestacarpropiedad(true);
            $asesorPermiso->setUsuario($authuser);
            $em->persist($asesorPermiso);
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('panel_principal/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}