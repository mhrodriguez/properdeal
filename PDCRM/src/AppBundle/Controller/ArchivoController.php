<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Archivo;
use AppBundle\Form\ArchivoType;

/**
 * Archivo controller.
 *
 * @Route("/archivo")
 */
class ArchivoController extends Controller
{
    /**
     * Lists all Archivo entities.
     *
     * @Route("/", name="archivo_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idInmueble = $request->query->get('idInmueble');

        $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

        $archivos = $em->getRepository('AppBundle:Archivo')->findByInmueble($inmueble);

        return $this->render('archivo/index.html.twig', array(
            'archivos' => $archivos,
            'idInmueble' => $idInmueble
        ));
    }

    /**
     * Creates a new Archivo entity.
     *
     * @Route("/new", name="archivo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idInmueble = $request->query->get('idInmueble');

        $archivo = new Archivo($this->container->getParameter('domain_root_name'));
        $form = $this->createForm('AppBundle\Form\ArchivoType', $archivo,
            array('modoEdicion'=>false));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

            $archivo->setInmueble($inmueble);
            $archivo->upload();
            $archivo->setActivo(1);

            $em->persist($archivo);
            $em->flush();

            return $this->redirectToRoute('inmueble_index', array());
        }

        return $this->render('archivo/new.html.twig', array(
            'archivo' => $archivo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Archivo entity.
     *
     * @Route("/{id}", name="archivo_show")
     * @Method("GET")
     */
    public function showAction(Archivo $archivo)
    {
        $deleteForm = $this->createDeleteForm($archivo);

        return $this->render('archivo/show.html.twig', array(
            'archivo' => $archivo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Archivo entity.
     *
     * @Route("/{id}/edit", name="archivo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Archivo $archivo)
    {
        $deleteForm = $this->createDeleteForm($archivo);
        $editForm = $this->createForm('AppBundle\Form\ArchivoType', $archivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivo);
            $em->flush();

            return $this->redirectToRoute('archivo_edit', array('id' => $archivo->getId()));
        }

        return $this->render('archivo/edit.html.twig', array(
            'archivo' => $archivo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archivo entity.
     *
     * @Route("/{id}", name="archivo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Archivo $archivo)
    {
        $form = $this->createDeleteForm($archivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($archivo);
            $em->flush();
        }

        return $this->redirectToRoute('archivo_index');
    }

    /**
     * Creates a form to delete a Archivo entity.
     *
     * @param Archivo $archivo The Archivo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Archivo $archivo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('archivo_delete', array('id' => $archivo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
