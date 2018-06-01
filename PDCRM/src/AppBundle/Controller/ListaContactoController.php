<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ListaContacto;
use AppBundle\Form\ListaContactoType;

/**
 * ListaContacto controller.
 *
 * @Route("/listacontacto")
 */
class ListaContactoController extends Controller
{
    /**
     * Lists all ListaContacto entities.
     *
     * @Route("/", name="listacontacto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $listaContactos = $em->getRepository('AppBundle:ListaContacto')->findByOwner($authuser->getId());

        return $this->render('listacontacto/index.html.twig', array(
            'listaContactos' => $listaContactos,
        ));
    }

    /**
     * Creates a new ListaContacto entity.
     *
     * @Route("/new", name="listacontacto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $listaContacto = new ListaContacto();
        $listaContacto->setActivo(true);
        $listaContacto->setIdUsuario($authuser);

        $form = $this->createForm('AppBundle\Form\ListaContactoType', $listaContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listaContacto);
            $em->flush();

            return $this->redirectToRoute('listacontacto_index', array());
        }

        return $this->render('listacontacto/new.html.twig', array(
            'listaContacto' => $listaContacto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ListaContacto entity.
     *
     * @Route("/{id}", name="listacontacto_show")
     * @Method("GET")
     */
    /*public function showAction(ListaContacto $listaContacto)
    {
        $deleteForm = $this->createDeleteForm($listaContacto);

        return $this->render('listacontacto/enviar.html.twig', array(
            'listaContacto' => $listaContacto,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing ListaContacto entity.
     *
     * @Route("/{id}/edit", name="listacontacto_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, ListaContacto $listaContacto)
    {
        $deleteForm = $this->createDeleteForm($listaContacto);
        $editForm = $this->createForm('AppBundle\Form\ListaContactoType', $listaContacto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listaContacto);
            $em->flush();

            return $this->redirectToRoute('listacontacto_edit', array('id' => $listaContacto->getId()));
        }

        return $this->render('listacontacto/edit.html.twig', array(
            'listaContacto' => $listaContacto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a ListaContacto entity.
     *
     * @Route("/{id}", name="listacontacto_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, ListaContacto $listaContacto)
    {
        $form = $this->createDeleteForm($listaContacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listaContacto);
            $em->flush();
        }

        return $this->redirectToRoute('listacontacto_index');
    }*/

    /**
     * Creates a form to delete a ListaContacto entity.
     *
     * @param ListaContacto $listaContacto The ListaContacto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(ListaContacto $listaContacto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listacontacto_delete', array('id' => $listaContacto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
