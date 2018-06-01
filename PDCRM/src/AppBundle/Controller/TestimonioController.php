<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/22/16
 * Time: 5:21 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * TestimonioController controller.
 *
 * @Route("/testimonio")
 */
class TestimonioController extends Controller
{
    /**
     * Lists all Tarea entities.
     *
     * @Route("/", name="testimonio_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('testimonio/index.html.twig', array());
    }
}