<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Comision;
use AppBundle\Form\ComisionType;

/**
 * Comision controller.
 *
 * @Route("/comision")
 */
class ComisionController extends Controller
{
    /**
     * Lists all Comision entities.
     *
     * @Route("/", name="comision_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();

        $comisiones = $em->getRepository('AppBundle:Comision')->findAll();

        return $this->render('comision/index.html.twig', array(
            'comisiones' => $comisiones
        ));
    }

    /**
     * Creates a new Comision entity.
     *
     * @Route("/new", name="comision_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $authuser= $this->get('security.context')->getToken()->getUser();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();

        $asesores = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($asesores, $authuser);

        $comision = new Comision();
        $form = $this->createForm('AppBundle\Form\ComisionType', $comision, array(
            'inmuebles' => $inmuebles,
            'asesores' => $asesores,
            'operacionesinmueble' => $operacionesInmueble));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Verificar si ya hay una comisión para esta propiedad
            $comision = $em->getRepository('AppBundle:Comision')->findOneByInmueble($comision->getInmueble());
            if ($comision == null)
            {
                $fecha = $request->request->get('comision_fecha', '');

                $comision->setFechaCreacion(new \DateTime());
                $comision->setUsuario($authuser);
                $comision->setFecha(new \DateTime($fecha));
                $comision->setActivo(true);

                $em->persist($comision);
                $em->flush();

                return $this->redirectToRoute('comision_index', array());
            }
            else
            {
                $form->get("inmueble")->addError(new FormError("Esta propiedad ya tiene una comisión establecida."));
            }
        }

        return $this->render('comision/new.html.twig', array(
            'comision' => $comision,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comision entity.
     *
     * @Route("/{id}", name="comision_show")
     * @Method("GET")
     */
    public function showAction(Comision $comision)
    {
        $deleteForm = $this->createDeleteForm($comision);

        return $this->render('comision/show.html.twig', array(
            'comision' => $comision,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comision entity.
     *
     * @Route("/{id}/edit", name="comision_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Comision $comision)
    {
        $em = $this->getDoctrine()->getManager();
        $authuser= $this->get('security.context')->getToken()->getUser();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $operacionesInmueble = $em->getRepository('AppBundle:OperacionInmueble')->findAll();

        $asesores = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($asesores, $authuser);

        //$deleteForm = $this->createDeleteForm($comision);
        $editForm = $this->createForm('AppBundle\Form\ComisionType', $comision, array(
            'inmuebles' => $inmuebles,
            'asesores' => $asesores,
            'operacionesinmueble' => $operacionesInmueble));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $fecha = $request->request->get('comision_fecha', '');
            $comision->setFecha(new \DateTime($fecha));

            $em->persist($comision);
            $em->flush();

            return $this->redirectToRoute('comision_index', array());
        }

        return $this->render('comision/edit.html.twig', array(
            'comision' => $comision,
            'form' => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Comision entity.
     *
     * @Route("/{id}", name="comision_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Comision $comision)
    {
        $form = $this->createDeleteForm($comision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comision);
            $em->flush();
        }

        return $this->redirectToRoute('comision_index');
    }

    /**
     * Creates a form to delete a Comision entity.
     *
     * @param Comision $comision The Comision entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comision $comision)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comision_delete', array('id' => $comision->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
