<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/8/16
 * Time: 10:12 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelSolicitudController extends Controller
{
    /**
     * @Route("/panel_solicitud", name="panel_solicitud")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_solicitud/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/panel_solicitud2", name="panel_solicitud2")
     */
    public function index2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_solicitud/index2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}