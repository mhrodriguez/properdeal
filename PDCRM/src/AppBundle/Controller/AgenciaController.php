<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Archivo;
use AppBundle\Form\ArchivoType;

/**
 * Archivo controller.
 *
 * @Route("/agencia")
 */
class AgenciaController extends Controller
{
    /**
     * Lists all Archivo entities.
     *
     * @Route("/", name="agencia_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('agencia/index.html.twig', array(
        ));
    }
}