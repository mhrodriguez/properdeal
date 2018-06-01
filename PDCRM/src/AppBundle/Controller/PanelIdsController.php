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

/**
 * Inmueble controller.
 *
 * @Route("/")
 */
class PanelIdsController extends Controller
{
    /**
     * @Route("/panel_ids", name="panel_ids")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_ids/index.html.twig',
            array()
        );
    }
}