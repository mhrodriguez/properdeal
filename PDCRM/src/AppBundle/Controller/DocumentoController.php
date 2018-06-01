<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/26/16
 * Time: 6:38 p.m.
 */
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormError;

/**
 * Documento controller.
 *
 * @Route("/documento")
 */
class DocumentoController extends Controller
{
    /**
     * Lists all Documento entities.
     *
     * @Route("/", name="documento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $documentos = null; //$em->getRepository('AppBundle:Documento')->findByDestinoemail($authuser->getEmail());

        return $this->render('documento/index.html.twig', array(
            'documentos' => $documentos,
        ));
    }
}