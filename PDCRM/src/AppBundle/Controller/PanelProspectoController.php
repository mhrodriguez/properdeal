<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/18/16
 * Time: 5:42 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelProspectoController extends Controller
{
    /**
     * @Route("/panel_prospecto", name="panel_prospecto")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_prospecto/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}