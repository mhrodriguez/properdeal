<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Seo;
use AppBundle\Form\SeoType;

/**
 * Seo controller.
 *
 * @Route("/seo")
 */
class SeoController extends Controller
{
    /**
     * Lists all Seo entities.
     *
     * @Route("/", name="seo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $seos = $em->getRepository('AppBundle:Seo')->findAll();

        return $this->render('seo/index.html.twig', array(
            'seos' => $seos,
        ));
    }

    /**
     * Creates a new Seo entity.
     *
     * @Route("/new", name="seo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $seo = new Seo();
        $form = $this->createForm('AppBundle\Form\SeoType', $seo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($seo);
            $em->flush();

            return $this->redirectToRoute('seo_show', array('id' => $seo->getId()));
        }

        return $this->render('seo/new.html.twig', array(
            'seo' => $seo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Seo entity.
     *
     * @Route("/{id}", name="seo_show")
     * @Method("GET")
     */
    public function showAction(Seo $seo)
    {
        $deleteForm = $this->createDeleteForm($seo);

        return $this->render('seo/show.html.twig', array(
            'seo' => $seo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Seo entity.
     *
     * @Route("/{id}/edit", name="seo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Seo $seo)
    {
        $editForm = $this->createForm('AppBundle\Form\SeoType', $seo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($seo);
            $em->flush();

            return $this->redirectToRoute('usuario_edit', array());
        }

        return $this->render('seo/edit.html.twig', array(
            'seo' => $seo,
            'form' => $editForm->createView()
        ));
    }

    /**
     * Deletes a Seo entity.
     *
     * @Route("/{id}", name="seo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Seo $seo)
    {
        $form = $this->createDeleteForm($seo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($seo);
            $em->flush();
        }

        return $this->redirectToRoute('seo_index');
    }

    /**
     * Creates a form to delete a Seo entity.
     *
     * @param Seo $seo The Seo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Seo $seo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('seo_delete', array('id' => $seo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
