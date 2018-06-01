<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/5/16
 * Time: 5:39 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelMiPerfilController extends Controller
{
    /**
     * @Route("/panel_miperfil", name="panel_miperfil")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_miperfil/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}