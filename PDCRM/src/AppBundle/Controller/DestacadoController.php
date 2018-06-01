<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Destacado;
use AppBundle\Form\DestacadoType;

/**
 * Destacado controller.
 *
 * @Route("/destacado")
 */
class DestacadoController extends Controller
{
    /**
     * Lists all Destacado entities.
     *
     * @Route("/", name="destacado_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $destacados = $em->getRepository('AppBundle:Destacado')->findAll();

        return $this->render('destacado/index.html.twig', array(
            'destacados' => $destacados,
        ));
    }

    /**
     * Creates a new Destacado entity.
     *
     * @Route("/new", name="destacado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();
        // 1. Obtener propiedades
        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $destacado = new Destacado();
        $form = $this->createForm('AppBundle\Form\DestacadoType', $destacado,
            array('inmuebles' => $inmuebles));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $destacado->setActivo(true);

            $destacado->getInmueble()->setDestacado(true);

            $em->persist($destacado);
            $em->flush();

            return $this->redirectToRoute('destacado_index', array());
        }

        return $this->render('destacado/new.html.twig', array(
            'destacado' => $destacado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Destacado entity.
     *
     * @Route("/{id}", name="destacado_show")
     * @Method("GET")
     */
    public function showAction(Destacado $destacado)
    {
        $deleteForm = $this->createDeleteForm($destacado);

        return $this->render('destacado/show.html.twig', array(
            'destacado' => $destacado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Destacado entity.
     *
     * @Route("/{id}/edit", name="destacado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Destacado $destacado)
    {
        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();
        // 1. Obtener propiedades
        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $deleteForm = $this->createDeleteForm($destacado);
        $editForm = $this->createForm('AppBundle\Form\DestacadoType', $destacado,
            array('inmuebles' => $inmuebles));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($destacado);
            $em->flush();

            return $this->redirectToRoute('destacado_index', array('id' => $destacado->getId()));
        }

        return $this->render('destacado/edit.html.twig', array(
            'destacado' => $destacado,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Destacado entity.
     *
     * @Route("/{id}", name="destacado_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Destacado $destacado)
    {
        $form = $this->createDeleteForm($destacado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($destacado);
            $em->flush();
        }

        return $this->redirectToRoute('destacado_index');
    }*/

    /**
     * Creates a form to delete a Destacado entity.
     *
     * @param Destacado $destacado The Destacado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Destacado $destacado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('destacado_delete', array('id' => $destacado->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/borrar", name="destacado_borrar")
     * @Method("GET")
     */
    public function borrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $destacado = $em->getRepository('AppBundle:Destacado')->findOneById($id);

        $inmueble = $destacado->getInmueble();
        $inmueble->setDestacado(false);

        $em->persist($inmueble);
        $em->remove($destacado);
        $em->flush();

        return $this->redirectToRoute('destacado_index');
    }
}
