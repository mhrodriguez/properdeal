<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/24/16
 * Time: 4:56 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\resumen;
use AppBundle\Form\resumenType;

/**
 * resumen controller.
 *
 * @Route("/resumen")
 */
class ResumenController extends Controller
{
    /**
     * Lists all resumen entities.
     *
     * @Route("/", name="resumen_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $resumen = null;

        $fechaInicio = new \DateTime();
        date_sub($fechaInicio, date_interval_create_from_date_string('180 days'));

        $fechaFin = new \DateTime();
        date_add($fechaFin, date_interval_create_from_date_string('180 days'));

        $tareas = $em->getRepository('AppBundle:Tarea')->findByOwnerRangeDate($authuser->getId(), $fechaInicio, $fechaFin);

        return $this->render('resumen/index.html.twig', array(
            'resumen' => $resumen,
            'tareas' => $tareas
        ));
    }


}
