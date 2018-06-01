<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Propietario;
use AppBundle\Form\PropietarioType;

/**
 * Propietario controller.
 *
 * @Route("/propietario")
 */
class PropietarioController extends Controller
{
    /**
     * Lists all Propietario entities.
     *
     * @Route("/", name="propietario_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $propietarios = $em->getRepository('AppBundle:Propietario')->findAll();

        return $this->render('propietario/index.html.twig', array(
            'propietarios' => $propietarios,
        ));
    }

    /**
     * Creates a new Propietario entity.
     *
     * @Route("/new", name="propietario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findAll();

        $propietario = new Propietario();
        $form = $this->createForm('AppBundle\Form\PropietarioType', $propietario,
            array('canalescaptacion' => $canalescaptacion,));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idInmueble = $request->query->get('idInmueble');

            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

            $inmueble->setIdPropietario($propietario);

            $propietario->setActivo(true);

            $em->persist($propietario);
            $em->persist($inmueble);
            $em->flush();

            return $this->redirectToRoute('inmueble_index', array('id' => $propietario->getId()));
        }

        return $this->render('propietario/new.html.twig', array(
            'propietario' => $propietario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Propietario entity.
     *
     * @Route("/{id}", name="propietario_show")
     * @Method("GET")
     */
    public function showAction(Propietario $propietario)
    {
        $deleteForm = $this->createDeleteForm($propietario);

        return $this->render('propietario/show.html.twig', array(
            'propietario' => $propietario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Propietario entity.
     *
     * @Route("/{id}/edit", name="propietario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Propietario $propietario)
    {
        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findAll();


        $deleteForm = $this->createDeleteForm($propietario);
        $editForm = $this->createForm('AppBundle\Form\PropietarioType', $propietario,
            array('canalescaptacion' => $canalescaptacion,));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($propietario);
            $em->flush();

            return $this->redirectToRoute('inmueble_index', array());
        }

        return $this->render('propietario/edit.html.twig', array(
            'propietario' => $propietario,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Propietario entity.
     *
     * @Route("/{id}", name="propietario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Propietario $propietario)
    {
        $form = $this->createDeleteForm($propietario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($propietario);
            $em->flush();
        }

        return $this->redirectToRoute('propietario_index');
    }

    /**
     * Creates a form to delete a Propietario entity.
     *
     * @param Propietario $propietario The Propietario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Propietario $propietario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('propietario_delete', array('id' => $propietario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
