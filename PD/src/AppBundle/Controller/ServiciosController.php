<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/9/16
 * Time: 5:07 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * ContactoWebController controller.
 *
 * @Route("/servicios")
 */
class ServiciosController extends Controller
{
    /**
     *
     *
     * @Route("/", name="servicios_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('servicios/index.html.twig',
            array()
        );
    }


}