<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/24/16
 * Time: 4:43 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelResumenController extends Controller
{
    /**
     * @Route("/panel_resumen", name="panel_resumen")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_resumen/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}