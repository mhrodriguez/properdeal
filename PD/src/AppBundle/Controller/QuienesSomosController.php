<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/9/16
 * Time: 4:39 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * ContactoWebController controller.
 *
 * @Route("/quienessomos")
 */
class QuienesSomosController extends Controller
{
    /**
     *
     *
     * @Route("/", name="quienessomos_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('quienessomos/index.html.twig',
            array()
        );
    }


}