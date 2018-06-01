<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Prospecto;
use Symfony\Component\Form\FormError;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Doctrine\Common\Annotations\AnnotationReader;

use Symfony\Component\HttpFoundation\Response;

/**
 * Prospecto controller.
 *
 * @Route("/prospecto")
 */
class ProspectoController extends Controller
{
    /**
     * Lists all Prospecto entities.
     *
     * @Route("/index.{_format}", name="prospecto_index", defaults= {"_format"="html"}, requirements = {"_format"="html|json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        if ($_format == "html")
        {
            $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($authuser->getId());

            return $this->render('prospecto/index.html.twig', array(
            'prospectos' => $prospectos,
            ));
        }
        else{
            $prospectos = array();
            $intindexAsesor = intVal($request->query->get('indexAsesor'));

            if ($intindexAsesor!=-1 && !is_null($intindexAsesor)) {

                $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
                    array('idUsuarioPadre' => $authuser->getId())
                );
                array_unshift($usuarios, $authuser);

                if ($intindexAsesor < count($usuarios)) {
                    $usuario = $usuarios[$intindexAsesor];
                    $prospectos = $em->getRepository('AppBundle:Prospecto')->findByOwner($usuario->getId());
                }
            }

            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($prospectos, 'json', array('groups' => array('list')));

            return new Response($jsonContent);
        }
    }

    /**
     * Creates a new Prospecto entity.
     *
     * @Route("/new", name="prospecto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error=false;

        // 1. Cargar catálogos
        $estados = $this->getDoctrine()
            ->getRepository('AppBundle:Estado')
            ->findAll();

        $canalescaptacion = $this->getDoctrine()
            ->getRepository('AppBundle:CanalCaptacion')
            ->findAll();

        $estatusavance = $this->getDoctrine()
            ->getRepository('AppBundle:EstatusAvance')
            ->findAll();

        $tiposprospecto = $this->getDoctrine()
            ->getRepository('AppBundle:TipoProspecto')
            ->findAll();

        $documentos = $this->getDoctrine()
            ->getRepository('AppBundle:Documento')
            ->findAll();

        $authuser= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AppBundle:Usuario')->findBy(
            array('idUsuarioPadre' => $authuser->getId())
        );
        array_unshift($usuarios, $authuser);

        $prospecto = new Prospecto();
        $prospecto->setActivo(true);
        $form = $this->createForm('AppBundle\Form\ProspectoType', $prospecto,
            array('estados' => $estados,
                  'canalescaptacion' => $canalescaptacion,
                  'estatusavance' => $estatusavance,
                  'tiposprospecto' => $tiposprospecto,
                  'documentos' => $documentos,
                  'usuarios' => $usuarios
            )
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 2. Validaciones
            // 2.1 Tipo prospecto
            if ($prospecto->getIdTipoProspecto() == null)
            {
                $error=true;
                $form->get('id_tipo_prospecto')->addError(new FormError('Seleccione una opción.'));
            }

            if (!$error)
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($prospecto);
                $em->flush();

                return $this->redirectToRoute('prospecto_index', array());
            }
        }

        return $this->render('prospecto/new.html.twig', array(
            'prospecto' => $prospecto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Prospecto entity.
     *
     * @Route("/{id}", name="prospecto_show")
     * @Method("GET")
     */
    /*public function showAction(Prospecto $prospecto)
    {
        $deleteForm = $this->createDeleteForm($prospecto);

        return $this->render('prospecto/show.html.twig', array(
            'prospecto' => $prospecto,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Prospecto entity.
     *
     * @Route("/{id}/edit", name="prospecto_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Prospecto $prospecto)
    {
        $deleteForm = $this->createDeleteForm($prospecto);
        $editForm = $this->createForm('AppBundle\Form\ProspectoType', $prospecto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prospecto);
            $em->flush();

            return $this->redirectToRoute('prospecto_edit', array('id' => $prospecto->getId()));
        }

        return $this->render('prospecto/edit.html.twig', array(
            'prospecto' => $prospecto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a Prospecto entity.
     *
     * @Route("/{id}", name="prospecto_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Prospecto $prospecto)
    {
        $form = $this->createDeleteForm($prospecto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prospecto);
            $em->flush();
        }

        return $this->redirectToRoute('prospecto_index');
    }
*/
    /**
     * Creates a form to delete a Prospecto entity.
     *
     * @param Prospecto $prospecto The Prospecto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
   /* private function createDeleteForm(Prospecto $prospecto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prospecto_delete', array('id' => $prospecto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
