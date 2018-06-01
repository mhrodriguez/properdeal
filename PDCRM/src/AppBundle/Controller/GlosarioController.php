<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Glosario;
use AppBundle\Form\GlosarioType;

/**
 * Glosario controller.
 *
 * @Route("/glosario")
 */
class GlosarioController extends Controller
{
    /**
     * Lists all Glosario entities.
     *
     * @Route("/", name="glosario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $glosarios = $em->getRepository('AppBundle:Glosario')->findAll();

        return $this->render('glosario/index.html.twig', array(
            'glosarios' => $glosarios,
        ));
    }

    /**
     * Creates a new Glosario entity.
     *
     * @Route("/new", name="glosario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $glosario = new Glosario();
        $form = $this->createForm('AppBundle\Form\GlosarioType', $glosario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($glosario);
            $em->flush();

            return $this->redirectToRoute('glosario_show', array('id' => $glosario->getId()));
        }

        return $this->render('glosario/new.html.twig', array(
            'glosario' => $glosario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Glosario entity.
     *
     * @Route("/{id}", name="glosario_show")
     * @Method("GET")
     */
    public function showAction(Glosario $glosario)
    {
        $deleteForm = $this->createDeleteForm($glosario);

        return $this->render('glosario/show.html.twig', array(
            'glosario' => $glosario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Glosario entity.
     *
     * @Route("/{id}/edit", name="glosario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Glosario $glosario)
    {
        $deleteForm = $this->createDeleteForm($glosario);
        $editForm = $this->createForm('AppBundle\Form\GlosarioType', $glosario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($glosario);
            $em->flush();

            return $this->redirectToRoute('glosario_edit', array('id' => $glosario->getId()));
        }

        return $this->render('glosario/edit.html.twig', array(
            'glosario' => $glosario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Glosario entity.
     *
     * @Route("/{id}", name="glosario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Glosario $glosario)
    {
        $form = $this->createDeleteForm($glosario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($glosario);
            $em->flush();
        }

        return $this->redirectToRoute('glosario_index');
    }

    /**
     * Creates a form to delete a Glosario entity.
     *
     * @param Glosario $glosario The Glosario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Glosario $glosario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('glosario_delete', array('id' => $glosario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
