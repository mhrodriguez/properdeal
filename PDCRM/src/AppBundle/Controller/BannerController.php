<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/19/16
 * Time: 3:37 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Banner;
use AppBundle\Form\BannerType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Banner controller.
 *
 * @Route("/banner")
 */
class BannerController extends Controller
{
    /**
     * Lists all Banner entities.
     *
     * @Route("/index.{_format}", name="banner_index", defaults= {"_format"="html"}, requirements = {"_format"="html|json"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $version = $request->query->get('version');

        $em = $this->getDoctrine()->getManager();

        if ($_format == "html")
        {
            $banneres = $em->getRepository('AppBundle:Banner')->findBy(array('activo' => true));

            return $this->render('banner/index.html.twig', array(
                'banners' => $banneres,
            ));
        }
        else
        {
            $bannerLN = new BannerLN($em);
            $banneres = $bannerLN->obtenerBanneres($version);

            $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer($classMetadataFactory));
            $serializer = new Serializer($normalizers, $encoders);
            $jsonContent = $serializer->serialize($banneres, 'json', array('groups' => array('sync')));

            return new Response($jsonContent);
        }
    }

    /**
     * Creates a new Banner entity.
     *
     * @Route("/new", name="banner_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $banner = new Banner(""/*$this->container->getParameter('domain_root_name')*/);

        $form = $this->createForm('AppBundle\Form\BannerType', $banner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($banner->getFile() != null)
            {
                $em = $this->getDoctrine()->getManager();

                // 2. Guardar Banner y actualizar versión
                $banner->upload();
                $banner->setActivo(1);

                $em->persist($banner);
                $em->flush();

                return $this->redirectToRoute('banner_index', array());
            }
            else
            {
                $error = new FormError("Por favor, seleccione una banner.");
                $form->get('file')->addError($error);
            }
        }

        return $this->render('banner/new.html.twig', array(
            'banner' => $banner,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Banner entity.
     *
     * @Route("/{id}", name="banner_show")
     * @Method("GET")
     */
    public function showAction(Banner $banner)
    {
        $deleteForm = $this->createDeleteForm($banner);

        return $this->render('banner/show.html.twig', array(
            'banner' => $banner,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Banner entity.
     *
     * @Route("/{id}/edit", name="banner_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Banner $banner)
    {
        $editForm = $this->createForm('AppBundle\Form\BannerType', $banner,
            array('modoEdicion' => true));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($banner);
            $em->flush();

            return $this->redirectToRoute('banner_index', array());
        }

        $deleteForm = $this->createDeleteForm($banner);

        return $this->render('banner/edit.html.twig', array(
            'banner' => $banner,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Banner entity.
     *
     * @Route("/{id}", name="banner_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Banner $banner)
    {
        $form = $this->createDeleteForm($banner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // 1. Obtener versión actual
            $configuracionLN = new ConfiguracionLN($em);
            $configuracionVersion = $configuracionLN->obtenerVersion();
            $configuracionVersion->setValor($configuracionVersion->getValor()+0.01);

            // Marcar como borrado y actualizar version
            $banner->setActivo(false);
            $banner->setVersion($configuracionVersion->getValor());
            //$em->remove($banner);
            $em->flush();
        }

        return $this->redirectToRoute('banner_index');
    }

    /**
     * Creates a form to delete a Banner entity.
     *
     * @param Banner $banner The Banner entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Banner $banner)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('banner_delete', array('id' => $banner->getIdBanner())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
