<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Formato;
use AppBundle\Form\FormatoType;

/**
 * Formato controller.
 *
 * @Route("/formato")
 */
class FormatoController extends Controller
{
    /**
     * Lists all Formato entities.
     *
     * @Route("/", name="formato_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formatos = $em->getRepository('AppBundle:Formato')->findAll();

        return $this->render('formato/index.html.twig', array(
            'formatos' => $formatos,
        ));
    }

    /**
     * Creates a new Formato entity.
     *
     * @Route("/new", name="formato_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formato = new Formato();
        $form = $this->createForm('AppBundle\Form\FormatoType', $formato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formato);
            $em->flush();

            return $this->redirectToRoute('formato_show', array('id' => $formato->getId()));
        }

        return $this->render('formato/new.html.twig', array(
            'formato' => $formato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formato entity.
     *
     * @Route("/{id}", name="formato_show")
     * @Method("GET")
     */
    public function showAction(Formato $formato)
    {
        $deleteForm = $this->createDeleteForm($formato);

        return $this->render('formato/show.html.twig', array(
            'formato' => $formato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formato entity.
     *
     * @Route("/{id}/edit", name="formato_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formato $formato)
    {
        $deleteForm = $this->createDeleteForm($formato);
        $editForm = $this->createForm('AppBundle\Form\FormatoType', $formato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formato);
            $em->flush();

            return $this->redirectToRoute('formato_edit', array('id' => $formato->getId()));
        }

        return $this->render('formato/edit.html.twig', array(
            'formato' => $formato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formato entity.
     *
     * @Route("/{id}", name="formato_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formato $formato)
    {
        $form = $this->createDeleteForm($formato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formato);
            $em->flush();
        }

        return $this->redirectToRoute('formato_index');
    }

    /**
     * Creates a form to delete a Formato entity.
     *
     * @param Formato $formato The Formato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formato $formato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formato_delete', array('id' => $formato->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
