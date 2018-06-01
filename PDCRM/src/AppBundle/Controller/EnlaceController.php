<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/4/16
 * Time: 3:41 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Enlace;
use AppBundle\Form\EnlaceType;

/**
 * Enlace controller.
 *
 * @Route("/enlace")
 */
class EnlaceController extends Controller
{
    /**
     * Lists all Enlace entities.
     *
     * @Route("/", name="enlace_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enlaces = $em->getRepository('AppBundle:Enlace')->findAll();

        return $this->render('enlace/index.html.twig', array(
            'enlaces' => $enlaces,
        ));
    }

    /**
     * Creates a new Enlace entity.
     *
     * @Route("/new", name="enlace_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $enlace = new Enlace();
        $form = $this->createForm('AppBundle\Form\EnlaceType', $enlace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enlace);
            $em->flush();

            return $this->redirectToRoute('enlace_show', array('id' => $enlace->getId()));
        }

        return $this->render('enlace/new.html.twig', array(
            'enlace' => $enlace,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Enlace entity.
     *
     * @Route("/{id}", name="enlace_show")
     * @Method("GET")
     */
    public function showAction(Enlace $enlace)
    {
        $deleteForm = $this->createDeleteForm($enlace);

        return $this->render('enlace/show.html.twig', array(
            'enlace' => $enlace,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Enlace entity.
     *
     * @Route("/{id}/edit", name="enlace_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Enlace $enlace)
    {
        $deleteForm = $this->createDeleteForm($enlace);
        $editForm = $this->createForm('AppBundle\Form\EnlaceType', $enlace);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enlace);
            $em->flush();

            return $this->redirectToRoute('enlace_edit', array('id' => $enlace->getId()));
        }

        return $this->render('enlace/edit.html.twig', array(
            'enlace' => $enlace,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Enlace entity.
     *
     * @Route("/{id}", name="enlace_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Enlace $enlace)
    {
        $form = $this->createDeleteForm($enlace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enlace);
            $em->flush();
        }

        return $this->redirectToRoute('enlace_index');
    }

    /**
     * Creates a form to delete a Enlace entity.
     *
     * @param Enlace $enlace The Enlace entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enlace $enlace)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enlace_delete', array('id' => $enlace->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
