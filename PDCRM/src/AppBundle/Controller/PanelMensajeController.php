<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/24/16
 * Time: 7:15 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelMensajeController extends Controller
{
    /**
     * @Route("/panel_mensaje", name="panel_mensaje")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_mensaje/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}