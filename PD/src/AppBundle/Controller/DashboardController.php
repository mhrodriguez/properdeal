<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/23/16
 * Time: 10:13 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Contacto controller.
 *
 * @Route("/dashboard")
 */
class DashboardController extends Controller
{
    /**
     * Lists all Contacto entities.
     *
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $countInmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerCount($authuser->getId());

        // replace this example code with whatever you need
        return $this->render('dashboard/index.html.twig',
            array(
                'countInmuebles' => $countInmuebles) );
    }
}