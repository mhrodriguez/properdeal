<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArchivoP;
use AppBundle\Form\ArchivoPType;

/**
 * Archivop controller.
 *
 * @Route("/archivop")
 */
class ArchivoPController extends Controller
{
    /**
     * Lists all Archivop entities.
     *
     * @Route("/", name="archivop_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idProspecto = $request->query->get('idProspecto');

        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);

        $archivops = $em->getRepository('AppBundle:ArchivoP')->findByProspecto($prospecto);

        return $this->render('archivop/index.html.twig', array(
            'archivos' => $archivops,
            'idProspecto' => $idProspecto
        ));
    }

    /**
     * Creates a new Archivop entity.
     *
     * @Route("/new", name="archivop_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idProspecto = $request->query->get('idProspecto');

        $archivop = new ArchivoP($this->container->getParameter('domain_root_name'));
        $form = $this->createForm('AppBundle\Form\ArchivoPType', $archivop,
            array('modoEdicion'=>false));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);

            $archivop->setProspecto($prospecto);
            $archivop->upload();
            $archivop->setActivo(1);

            $em->persist($archivop);
            $em->flush();

            return $this->redirectToRoute('prospecto_index', array());
        }

        return $this->render('archivop/new.html.twig', array(
            'archivo' => $archivop,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Archivop entity.
     *
     * @Route("/{id}", name="archivop_show")
     * @Method("GET")
     */
    public function showAction(Archivop $archivop)
    {
        $deleteForm = $this->createDeleteForm($archivop);

        return $this->render('archivop/show.html.twig', array(
            'archivop' => $archivop,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Archivop entity.
     *
     * @Route("/{id}/edit", name="archivop_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Archivop $archivop)
    {
        $deleteForm = $this->createDeleteForm($archivop);
        $editForm = $this->createForm('AppBundle\Form\ArchivoPType', $archivop);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivop);
            $em->flush();

            return $this->redirectToRoute('archivop_edit', array('id' => $archivop->getId()));
        }

        return $this->render('archivop/edit.html.twig', array(
            'archivop' => $archivop,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archivop entity.
     *
     * @Route("/{id}", name="archivop_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Archivop $archivop)
    {
        $form = $this->createDeleteForm($archivop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($archivop);
            $em->flush();
        }

        return $this->redirectToRoute('archivop_index');
    }

    /**
     * Creates a form to delete a Archivop entity.
     *
     * @param Archivop $archivop The Archivop entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Archivop $archivop)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archivop_delete', array('id' => $archivop->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
