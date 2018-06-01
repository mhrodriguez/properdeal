<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/26/16
 * Time: 6:29 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelDocumentoController extends Controller
{
    /**
     * @Route("/panel_documento", name="panel_documento")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_documento/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}