<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\TareaType;
use Symfony\Component\Form\FormError;
use AppBundle\Entity\Tarea;

/**
 * Tarea controller.
 *
 * @Route("/tarea")
 */
class TareaController extends Controller
{
    /**
     * Finds and displays a Tarea entity.
     *
     * @Route("/show/{id}", name="tarea_show")
     * @Method("GET")
     */
    public function showAction(Tarea $tarea)
    {
        //$deleteForm = $this->createDeleteForm($tarea);

        return $this->render('tarea/show.html.twig', array(
            'tarea' => $tarea,
            //'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Lists all Tarea entities.
     *
     * @Route("/", name="tarea_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $tareas = $em->getRepository('AppBundle:Tarea')->findByOwner($authuser->getId());

        return $this->render('tarea/index.html.twig', array(
            'tareas' => $tareas,
        ));
    }

    /**
     * Lists all Tarea entities.
     *
     * @Route("/actividades", name="tarea_actividades")
     * @Method("GET")
     */
    public function actividadesAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $fecha = new \DateTime();
        $fecha = $fecha->sub(date_interval_create_from_date_string('1 day'));

        $tareas = $em->getRepository('AppBundle:Tarea')->findByOwnerDate($authuser->getId(), $fecha);

        return $this->render('tarea/actividades.html.twig', array(
            'tareas' => $tareas,
        ));
    }

    /**
     * Creates a new Tarea entity.
     *
     * @Route("/new", name="tarea_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tarea = new Tarea();
        $error=false;

        // 1. Cargar catálogos
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        $intindexAsesor = intVal($request->query->get('indexAsesor'));
        if ($intindexAsesor==-1)
        {
            $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId());
        }
        else
        {
            $idAsesor = $usuarios[$intindexAsesor];
            $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($idAsesor);

            $tarea->setIndexSelectedAsesor($intindexAsesor);
        }

        $acciones = $this->getDoctrine()
            ->getRepository('AppBundle:Accion')
            ->findAll();

        // 2. Crear Form
        $tarea->setActivo(true);
        $form = $this->createForm('AppBundle\Form\TareaType', $tarea,
            array('prospectos' => $prospectos,
                  'acciones' => $acciones,
                  'asesores' => $usuarios,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fecha = $request->request->get('tarea_fecha', '');

            $tarea->setFecha(new \DateTime($fecha));

            $em = $this->getDoctrine()->getManager();
            $em->persist($tarea);

            // Si se requiere agregar a mi calendario
            if (/*$tarea->getAgregarmicalendario() == true &&*/ $authuser->getId() != $tarea->getIdUsuario()->getId()) {
                $tarea->setIdUsuario($authuser);
                $em->persist($tarea);
            }

            $em->flush();

            $this->addFlash(
                'notice',
                '¡Tarea guardada exitosamente!'
            );

            return $this->redirectToRoute('tarea_new', array(/*'id' => $tarea->getIdTarea()*/));
        }

        return $this->render('tarea/new.html.twig', array(
            'tarea' => $tarea,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Tarea entity.
     *
     * @Route("/new2", name="tarea_new2")
     * @Method({"GET", "POST"})
     */
    public function new2Action(Request $request)
    {
        $tarea = new Tarea();
        $error=false;

        // 1. Cargar catálogos
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        $intindexAsesor = intVal($request->query->get('indexAsesor'));
        if ($intindexAsesor==-1)
        {
            $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId());
        }
        else
        {
            $idAsesor = $usuarios[$intindexAsesor];
            $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($idAsesor);

            $tarea->setIndexSelectedAsesor($intindexAsesor);
        }

        $acciones = $this->getDoctrine()
            ->getRepository('AppBundle:Accion')
            ->findAll();

        // 2. Crear Form
        $tarea->setActivo(true);
        $form = $this->createForm('AppBundle\Form\TareaType', $tarea,
            array('prospectos' => $prospectos,
                'acciones' => $acciones,
                'asesores' => $usuarios,
            ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fecha = $request->request->get('tarea_fecha', '');

            $tarea->setFecha(new \DateTime($fecha));

            $em = $this->getDoctrine()->getManager();
            $em->persist($tarea);

            // Si se requiere agregar a mi calendario
            if (/*$tarea->getAgregarmicalendario() == true &&*/ $authuser->getId() != $tarea->getIdUsuario()->getId()) {
                $tarea->setIdUsuario($authuser);
                $em->persist($tarea);
            }

            $em->flush();

            $this->addFlash(
                'notice',
                '¡Tarea guardada exitosamente!'
            );

            return $this->redirectToRoute('inmueble_index', array());
        }

        return $this->render('tarea/new.html.twig', array(
            'tarea' => $tarea,
            'form' => $form->createView(),
        ));
    }


    /**
     * Creates a new Tarea entity.
     *
     * @Route("/prospecto", name="tarea_prospecto")
     * @Method({"GET", "POST"})
     */
    public function prospectoAction(Request $request)
    {
        $tarea = new Tarea();
        $error=false;

        // 1. Cargar catálogos
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        $intindexAsesor = intVal($request->query->get('idAsesor'));
        $prospectos=array();
        if ($intindexAsesor==-1)
        {

        }
        else
        {
            $idAsesor = $usuarios[$intindexAsesor];
            $tarea->setIndexSelectedAsesor($intindexAsesor);
        }

        // Prospecto
        $idProspecto = intVal($request->query->get('idProspecto'));
        $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);
        array_push($prospectos, $prospecto);

        $acciones = $this->getDoctrine()
            ->getRepository('AppBundle:Accion')
            ->findAll();

        // 2. Crear Form
        $tarea->setActivo(true);
        $form = $this->createForm('AppBundle\Form\TareaType', $tarea,
            array('prospectos' => $prospectos,
                'acciones' => $acciones,
                'asesores' => $usuarios,
            ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fecha = $request->request->get('tarea_fecha', '');

            $tarea->setFecha(new \DateTime($fecha));

            $em = $this->getDoctrine()->getManager();
            $em->persist($tarea);

            // Si se requiere agregar a mi calendario
            if (/*$tarea->getAgregarmicalendario() == true &&*/ $authuser->getId() != $tarea->getIdUsuario()->getId()) {
                $tarea->setIdUsuario($authuser);
                $em->persist($tarea);
            }

            $em->flush();

            $this->addFlash(
                'notice',
                '¡Tarea guardada exitosamente!'
            );

            return $this->redirectToRoute('prospecto_index', array());
        }

        return $this->render('tarea/new.html.twig', array(
            'tarea' => $tarea,
            'form' => $form->createView(),
        ));
    }





    /**
     * Displays a form to edit an existing Tarea entity.
     *
     * @Route("/{id}/edit", name="tarea_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Tarea $tarea)
    {
        $deleteForm = $this->createDeleteForm($tarea);
        $editForm = $this->createForm('AppBundle\Form\TareaType', $tarea);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarea);
            $em->flush();

            return $this->redirectToRoute('tarea_edit', array('id' => $tarea->getId()));
        }

        return $this->render('tarea/edit.html.twig', array(
            'tarea' => $tarea,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
*/
    /**
     * Deletes a Tarea entity.
     *
     * @Route("/{id}", name="tarea_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Tarea $tarea)
    {
        $form = $this->createDeleteForm($tarea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarea);
            $em->flush();
        }

        return $this->redirectToRoute('tarea_index');
    }*/

    /**
     * Creates a form to delete a Tarea entity.
     *
     * @param Tarea $tarea The Tarea entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Tarea $tarea)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarea_delete', array('id' => $tarea->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
