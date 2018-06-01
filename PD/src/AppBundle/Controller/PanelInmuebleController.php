<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/24/16
 * Time: 11:11 a.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelInmuebleController extends Controller
{
    /**
     * @Route("/panel_inmueble", name="panel_inmueble")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_inmueble/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}