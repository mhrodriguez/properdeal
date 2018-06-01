<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Noticia;
use AppBundle\Form\NoticiaType;

/**
 * Noticia controller.
 *
 * @Route("/noticia")
 */
class NoticiaController extends Controller
{
    /**
     * Lists all Noticia entities.
     *
     * @Route("/", name="noticia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $noticias = $em->getRepository('AppBundle:Noticia')->findAll();

        return $this->render('noticia/index.html.twig', array(
            'noticias' => $noticias,
        ));
    }

    /**
     * Creates a new Noticia entity.
     *
     * @Route("/new", name="noticia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $noticia = new Noticia();
        $form = $this->createForm('AppBundle\Form\NoticiaType', $noticia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $noticia->setActivo(true);
            $noticia->setIdUsuario($authuser);

            $em = $this->getDoctrine()->getManager();
            $em->persist($noticia);
            $em->flush();

            return $this->redirectToRoute('noticia_index', array());
        }

        return $this->render('noticia/new.html.twig', array(
            'noticia' => $noticia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Noticia entity.
     *
     * @Route("/{id}", name="noticia_show")
     * @Method("GET")
     */
    /*public function showAction(Noticia $noticium)
    {
        $deleteForm = $this->createDeleteForm($noticium);

        return $this->render('noticia/enviar.html.twig', array(
            'noticium' => $noticium,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Noticia entity.
     *
     * @Route("/{id}/edit", name="noticia_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Noticia $noticium)
    {
        $deleteForm = $this->createDeleteForm($noticium);
        $editForm = $this->createForm('AppBundle\Form\NoticiaType', $noticium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($noticium);
            $em->flush();

            return $this->redirectToRoute('noticia_edit', array('id' => $noticium->getId()));
        }

        return $this->render('noticia/edit.html.twig', array(
            'noticium' => $noticium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a Noticia entity.
     *
     * @Route("/{id}", name="noticia_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Noticia $noticium)
    {
        $form = $this->createDeleteForm($noticium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticium);
            $em->flush();
        }

        return $this->redirectToRoute('noticia_index');
    }*/

    /**
     * Creates a form to delete a Noticia entity.
     *
     * @param Noticia $noticium The Noticia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Noticia $noticium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('noticia_delete', array('id' => $noticium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
