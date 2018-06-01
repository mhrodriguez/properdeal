<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Rotulo;
use AppBundle\Form\RotuloType;

/**
 * Rotulo controller.
 *
 * @Route("/rotulo")
 */
class RotuloController extends Controller
{
    /**
     * Lists all Rotulo entities.
     *
     * @Route("/", name="rotulo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rotulos = $em->getRepository('AppBundle:Rotulo')->findAll();

        return $this->render('rotulo/index.html.twig', array(
            'rotulos' => $rotulos,
        ));
    }

    /**
     * Creates a new Rotulo entity.
     *
     * @Route("/new", name="rotulo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $authuser= $this->get('security.context')->getToken()->getUser();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $asesores = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($asesores, $authuser);

        $elementos = $em->getRepository('AppBundle:RotuloElemento')->findAll();

        $tamanos = $em->getRepository('AppBundle:RotuloTamano')->findAll();

        $acciones = $em->getRepository('AppBundle:RotuloAccion')->findAll();

        $rotulo = new Rotulo();
        $form = $this->createForm('AppBundle\Form\RotuloType', $rotulo, array(
            'inmuebles' => $inmuebles,
            'asesores' => $asesores,
            'tamanos' => $tamanos,
            'acciones' => $acciones,
            'elementos' => $elementos));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $rotulo->setFecha(new \DateTime());
            $rotulo->setActivo(true);
            $rotulo->setUsuario($authuser);

            $em->persist($rotulo);
            $em->flush();

            return $this->redirectToRoute('rotulo_index', array());
        }

        return $this->render('rotulo/new.html.twig', array(
            'rotulo' => $rotulo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rotulo entity.
     *
     * @Route("/{id}", name="rotulo_show")
     * @Method("GET")
     */
    public function showAction(Rotulo $rotulo)
    {
        $deleteForm = $this->createDeleteForm($rotulo);

        return $this->render('rotulo/show.html.twig', array(
            'rotulo' => $rotulo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rotulo entity.
     *
     * @Route("/{id}/edit", name="rotulo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Rotulo $rotulo)
    {
        $em = $this->getDoctrine()->getManager();
        $authuser= $this->get('security.context')->getToken()->getUser();

        $inmuebles = $em->getRepository('AppBundle:Inmueble')->findByOwner($authuser->getId());

        $asesores = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($asesores, $authuser);

        $elementos = $em->getRepository('AppBundle:RotuloElemento')->findAll();

        $tamanos = $em->getRepository('AppBundle:RotuloTamano')->findAll();

        $acciones = $em->getRepository('AppBundle:RotuloAccion')->findAll();

       // $deleteForm = $this->createDeleteForm($rotulo);
        $editForm = $this->createForm('AppBundle\Form\RotuloType', $rotulo,  array(
            'inmuebles' => $inmuebles,
            'asesores' => $asesores,
            'tamanos' => $tamanos,
            'acciones' => $acciones,
            'elementos' => $elementos));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($rotulo);
            $em->flush();

            return $this->redirectToRoute('rotulo_index', array());
        }

        return $this->render('rotulo/edit.html.twig', array(
            'rotulo' => $rotulo,
            'form' => $editForm->createView(),
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rotulo entity.
     *
     * @Route("/{id}", name="rotulo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Rotulo $rotulo)
    {
        $form = $this->createDeleteForm($rotulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rotulo);
            $em->flush();
        }

        return $this->redirectToRoute('rotulo_index');
    }

    /**
     * Creates a form to delete a Rotulo entity.
     *
     * @param Rotulo $rotulo The Rotulo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rotulo $rotulo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rotulo_delete', array('id' => $rotulo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
