<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Gerencia;
use AppBundle\Form\GerenciaType;

/**
 * Gerencia controller.
 *
 * @Route("/gerencia")
 */
class GerenciaController extends Controller
{
    /**
     * Lists all Gerencia entities.
     *
     * @Route("/", name="gerencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gerencias = $em->getRepository('AppBundle:Gerencia')->findAll();

        return $this->render('gerencia/index.html.twig', array(
            'gerencias' => $gerencias,
        ));
    }

    /**
     * Creates a new Gerencia entity.
     *
     * @Route("/new", name="gerencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gerencium = new Gerencia();
        $form = $this->createForm('AppBundle\Form\GerenciaType', $gerencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $authuser= $this->get('security.context')->getToken()->getUser();

            $gerencium->setUsuario($authuser);
            $gerencium->setActivo(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($gerencium);
            $em->flush();

            return $this->redirectToRoute('gerencia_index', array());
        }

        return $this->render('gerencia/new.html.twig', array(
            'gerencia' => $gerencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gerencia entity.
     *
     * @Route("/{id}", name="gerencia_show")
     * @Method("GET")
     */
    public function showAction(Gerencia $gerencium)
    {
        $deleteForm = $this->createDeleteForm($gerencium);

        return $this->render('gerencia/show.html.twig', array(
            'gerencium' => $gerencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gerencia entity.
     *
     * @Route("/{id}/edit", name="gerencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Gerencia $gerencium)
    {
        $deleteForm = $this->createDeleteForm($gerencium);
        $editForm = $this->createForm('AppBundle\Form\GerenciaType', $gerencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gerencium);
            $em->flush();

            return $this->redirectToRoute('gerencia_edit', array('id' => $gerencium->getId()));
        }

        return $this->render('gerencia/edit.html.twig', array(
            'gerencium' => $gerencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Gerencia entity.
     *
     * @Route("/{id}", name="gerencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Gerencia $gerencium)
    {
        $form = $this->createDeleteForm($gerencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gerencium);
            $em->flush();
        }

        return $this->redirectToRoute('gerencia_index');
    }

    /**
     * Creates a form to delete a Gerencia entity.
     *
     * @param Gerencia $gerencium The Gerencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Gerencia $gerencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gerencia_delete', array('id' => $gerencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
