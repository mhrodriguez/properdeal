<?php

namespace AppBundle\Controller;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\AsesorPermisoType;
use AppBundle\Entity\AsesorPermiso;

/**
 * AsesorPermiso controller.
 *
 * @Route("/asesorpermiso")
 */
class AsesorPermisoController extends Controller
{
    /**
     * Lists all AsesorPermiso entities.
     *
     * @Route("/", name="asesorpermiso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $asesorPermisos = $em->getRepository('AppBundle:AsesorPermiso')->findAllOrdered();

        return $this->render('asesorpermiso/index.html.twig', array(
            'asesorpermisos' => $asesorPermisos,
        ));
    }

    /**
     * Creates a new AsesorPermiso entity.
     *
     * @Route("/new", name="asesorpermiso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $asesorPermiso = new AsesorPermiso();
        $form = $this->createForm('AppBundle\Form\AsesorPermisoType', $asesorPermiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asesorPermiso);
            $em->flush();

            return $this->redirectToRoute('asesorpermiso_show', array('id' => $asesorPermiso->getId()));
        }

        return $this->render('asesorpermiso/new.html.twig', array(
            'asesorPermiso' => $asesorPermiso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AsesorPermiso entity.
     *
     * @Route("/{id}", name="asesorpermiso_show")
     * @Method("GET")
     */
    public function showAction(AsesorPermiso $asesorPermiso)
    {
        $deleteForm = $this->createDeleteForm($asesorPermiso);

        return $this->render('asesorpermiso/show.html.twig', array(
            'asesorPermiso' => $asesorPermiso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a AsesorPermiso entity.
     *
     * @Route("/{id}", name="asesorpermiso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AsesorPermiso $asesorPermiso)
    {
        $form = $this->createDeleteForm($asesorPermiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($asesorPermiso);
            $em->flush();
        }

        return $this->redirectToRoute('asesorpermiso_index');
    }


    /**
     * Displays a form to edit an existing AsesorPermiso entity.
     *
     * @Route("/{id}/edit", name="asesorpermiso_edit")
     * @Method({"GET", "POST"})
     */
    public function editarAction(Request $request, AsesorPermiso $asesorPermiso)
    {
        $editForm = $this->createForm('AppBundle\Form\AsesorPermisoType', $asesorPermiso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asesorPermiso);
            $em->flush();

            return $this->redirectToRoute('asesorpermiso_index', array());
        }

        return $this->render('asesorpermiso/edit.html.twig', array(
            'asesorPermiso' => $asesorPermiso,
            'form' => $editForm->createView(),
        ));
    }


    /**
     * Creates a form to delete a AsesorPermiso entity.
     *
     * @param AsesorPermiso $asesorPermiso The AsesorPermiso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AsesorPermiso $asesorPermiso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asesorpermiso_delete', array('id' => $asesorPermiso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
