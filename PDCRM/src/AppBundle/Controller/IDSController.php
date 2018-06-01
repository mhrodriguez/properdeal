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
use AppBundle\Entity\Usuario;
use SaadTazi\GChartBundle\DataTable;

/**
 * Contacto controller.
 *
 * @Route("/ids")
 */
class IDSController extends Controller
{
    /**
     * Lists all Contacto entities.
     *
     * @Route("/", name="ids_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $mostrarprospectos=true;
        $enviosimplificado=false;
        $authuser= $this->get('security.context')->getToken()->getUser();

        if ($authuser->getPwdemail() == null)
        {
            $this->addFlash(
                'notice',
                'Para compartir propiedades se requiere ingrese la contraseña de su correo electrónico.'
            );

            return $this->redirectToRoute("usuario_edit");
        }

        $em = $this->getDoctrine()->getManager();

        $idInmueble = $request->query->get('idInmueble');

        $url = $request->query->get('url');

        if ($request->query->get('prospectos') != null)
        {
            $mostrarprospectos = $request->query->get('prospectos');
        }

        if ($idInmueble == null) {
            $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwnerActivo($authuser->getId(), true);
        }
        else
        {
            // 1. Verificar si viene mas de una propiedad
            $arrayInmuebles = explode(',', $idInmueble);
            $inmuebles = array();

            foreach ($arrayInmuebles as $id)
            {
                $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($id);

                array_push($inmuebles, $inmueble);
            }

            $enviosimplificado=true;
        }

        $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId());


        return $this->render('ids/index.html.twig',
            array('inmuebles' => $inmuebles,
                'prospectos' => $prospectos,
                'ida' => $authuser->getId(),
                'mostrarprospectos' => $mostrarprospectos,
                'enviosimplificado' => $enviosimplificado,
                'url' => $url
            )
        );
    }
}