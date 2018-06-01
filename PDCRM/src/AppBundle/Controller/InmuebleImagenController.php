<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/24/16
 * Time: 7:06 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Imagen;
use AppBundle\Entity\MultiImagen;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\FormError;

/**
 * InmuebleImagen controller.
 *
 * @Route("/inmuebleimagen")
 */
class InmuebleImagenController extends Controller
{
    /**
     * Lists all ListaContacto entities.
     *
     * @Route("/", name="inmuebleimagen_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $idInmueble = intVal($request->query->get('idInmueble'));

        $authuser = $this->get('security.context')->getToken()->getUser();

        // 1. Recuperara las imagenes de este inmueble
        $em = $this->getDoctrine()->getManager();
        $inmueble = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->find($idInmueble);

        return $this->render('inmuebleimagen/index.html.twig',
            array('idInmueble' => $idInmueble,
                'imagenes' => $inmueble->getImagenes()
                ));
    }

    /**
     * Creates a new ListaContacto entity.
     *
     * @Route("/new", name="inmuebleimagen_new")
     */
    public function newAction(Request $request)
    {
        $idInmueble = intVal($request->query->get('idInmueble'));

        $imagen = new Imagen();

        $form = $this->createForm('AppBundle\Form\ImagenType', $imagen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imagen->upload();

            $em = $this->getDoctrine()->getManager();

            // Obtener el inmueble
            $inmueble = $this->getDoctrine()
                ->getRepository('AppBundle:Inmueble')
                ->find($idInmueble);

            // Obtener el max order hasta el momento
            $orden=1;
            foreach ($inmueble->getImagenes() as $imagen)
            {
                if ($imagen->getOrden() > $orden)
                {
                    $orden = $imagen->getOrden();
                }
            }

            $imagen->setOrden($orden);
            $inmueble->addImagen($imagen);

            $em->persist($imagen);
            $em->persist($inmueble);
            $em->flush();

            return $this->redirect($this->generateUrl('inmuebleimagen_index', array()) . '?idInmueble=' .  $idInmueble);
        }

        return $this->render('inmuebleimagen/new.html.twig', array(
            'imagen' => $imagen,
            'form' => $form->createView(),
            'idInmueble' => $idInmueble
        ));
    }


    /**
     * Creates a new ListaContacto entity.
     *
     * @Route("/multinew", name="inmuebleimagen_multinew")
     */
    public function multinewAction(Request $request)
    {
        // Ajuste a los múltiples archivos recibidos
        // Dispositivos móviles mandan el mismo nombre de archivos para todas las cargas
/*
        if ( count( $_FILES ) > 1 ) {
            $i = 1;
            $temp = array();
            jimport('joomla.filesystem.file');
            foreach ($_FILES as $k => $v) {
                if ($i != 1) {
                    if (in_array($v['name'], $temp)) {
                        $ext = JFile::getExt($v['name']);
                        $name = JFile::stripExt($v['name']);
                        $name = "{$name}_{$i}.{$ext}";
                        $_FILES[$k]['name'] = $name;
                    }
                }
                $temp[] = $_FILES[$k]['name'];
                $i++;
            }
        }
*/
        // ----------------------------------------


        $idInmueble = intVal($request->query->get('idInmueble'));

        $multiimagen = new MultiImagen();

        $form = $this->createForm('AppBundle\Form\MultiImagenType', $multiimagen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 0. Validar las extensiones
            if ($multiimagen->validarExtensiones()) {

                $multiimagen->upload();

                $em = $this->getDoctrine()->getManager();

                // Obtener el inmueble
                $inmueble = $this->getDoctrine()
                    ->getRepository('AppBundle:Inmueble')
                    ->find($idInmueble);

                // Obtener el max order hasta el momento
                $orden = 0;
                foreach ($inmueble->getImagenes() as $imagen) {
                    if ($imagen->getOrden() > $orden) {
                        $orden = $imagen->getOrden();
                    }
                }
                $orden++;

                $paths = $multiimagen->getPaths();
                for ($index = 0; $index < count($paths); $index++) {
                    $imagen = new Imagen();

                    $imagen->setPath($paths[$index]);
                    $imagen->setURL($multiimagen->getURLs()[$index]);
                    $imagen->setOrden($orden);

                    $inmueble->addImagen($imagen);

                    $em->persist($imagen);

                    $orden++;
                }

                $em->persist($inmueble);
                $em->flush();

                return $this->redirect($this->generateUrl('inmuebleimagen_index', array()) . '?idInmueble=' . $idInmueble);
            }
            else
            {
                $form->get("files")->addError(new FormError('Alguna imagen no tiene una extensión válida (jpeg, gif, o png).'));
            }
        }


        return $this->render('inmuebleimagen/multinew.html.twig', array(
            'imagen' => $multiimagen,
            'form' => $form->createView(),
            'idInmueble' => $idInmueble
        ));
    }


    /**
     * Deletes a InmuebleImagen entity.
     *
     * @Route("/{id}/delete", name="inmuebleimagen_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        $idInmueble = intVal($request->query->get('idInmueble'));

        $inmueble = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->find($idInmueble);

        $imagen = $this->getDoctrine()
            ->getRepository('AppBundle:Imagen')
            ->findOneByIdImagen($id);

        $inmueble->removeImagen($imagen);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inmueble);
        $em->flush();

        // Si la imagen existe en otro registro, no borrar el archivo de imagen
        try {
            $em->remove($imagen);
            $em->flush();

            $file_path = $imagen->getAbsolutePath();
            // Borrar imagen
            if(file_exists($file_path)) unlink($file_path);
        }
        catch (\Exception $e)
        {
            // La imagen no pudo ser borrada por dos razones:
                // a. Todavía hay un registro inmueble_imagen con la imagen asociada (por clonacion)
                // b. No se encontró la imagen fisica
        }

        // REGRESAR AL LISTADO DE IMAGENES
        return $this->render('inmuebleimagen/index.html.twig',
            array('idInmueble' => $idInmueble,
                'imagenes' => $inmueble->getImagenes()
            ));
    }


    /**
     * Deletes a InmuebleImagen entity.
     *
     * @Route("/{id}/rotar", name="inmuebleimagen_rotar")
     * @Method("GET")
     */
    public function rotarAction(Request $request, $id)
    {
        $idInmueble = intVal($request->query->get('idInmueble'));
        $direccion = intVal($request->query->get('direccion'));

        $inmueble = $this->getDoctrine()
            ->getRepository('AppBundle:Inmueble')
            ->find($idInmueble);

        $imagen = $this->getDoctrine()
            ->getRepository('AppBundle:Imagen')
            ->findOneByIdImagen($id);

        // Rotar
        try {
            $file_path = $imagen->getAbsolutePath();
            // Rotar imagen
            if(file_exists($file_path))
            {
                $imagen = $this->imageCreateFromAny($file_path, $tipoImagen);

                // Rotar
                if ($direccion == 1) {
                    $imagerotada = imagerotate($imagen, 90, 0);
                }
                else
                {
                    $imagerotada = imagerotate($imagen, -90, 0);
                }

                // Borrar anterior
                unlink($file_path);

                // Guardar
                $this->imageSaveFromAny($imagerotada, $file_path, $tipoImagen);
            }
        }
        catch (\Exception $e)
        {

        }

        // REGRESAR AL LISTADO DE IMAGENES
        return $this->render('inmuebleimagen/index.html.twig',
            array('idInmueble' => $idInmueble,
                'imagenes' => $inmueble->getImagenes()
            ));
    }

    /**
     * Lists all ListaContacto entities.
     *
     * @Route("/", name="inmuebleimagen_orden")
     * @Method("POST")
     */
    public function ordenAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idInmueble = intVal($request->query->get('idInmueble'));

        $ids = $request->query->get('ids');
        $arrayIdImagenes= explode(',', $ids);

        $ordenes = $request->query->get('ordenes');
        $arrayOrdenes= explode(',', $ordenes);

        $index=0;
        foreach ($arrayIdImagenes as $idImagen) {
            if ($idImagen != '') {

                $imagen = $this->getDoctrine()
                    ->getRepository('AppBundle:Imagen')
                    ->findOneByIdImagen($idImagen);

                $orden = $arrayOrdenes[$index];

                $imagen->setOrden($orden);

                $em->persist($imagen);
            }
            $index++;
        }

        $em->flush();

        return $this->redirect($this->generateUrl('inmuebleimagen_index', array()) . '?idInmueble=' .  $idInmueble);
    }

    function imageCreateFromAny($filepath, &$tipoImagen) {
        $type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize()
        $allowedTypes = array(
            1,  // [] gif
            2,  // [] jpg
            3,  // [] png
            6   // [] bmp
        );
        if (!in_array($type, $allowedTypes)) {
            return false;
        }
        switch ($type) {
            case 1 :
                $im = imageCreateFromGif($filepath);
                break;
            case 2 :
                $im = imageCreateFromJpeg($filepath);
                break;
            case 3 :
                $im = imageCreateFromPng($filepath);
                break;
            case 6 :
                $im = imageCreateFromBmp($filepath);
                break;
        }

        $tipoImagen = $type;

        return $im;
    }

    function imageSaveFromAny($image, $filepath, $tipoImagen) {
        switch ($tipoImagen) {
            case 1 :
                $im = imagegif($image, $filepath);
                break;
            case 2 :
                $im = imagejpeg($image, $filepath);
                break;
            case 3 :
                $im = imagepng($image, $filepath);
                break;
            case 6 :
                $im = imagebmp($image, $filepath);
                break;
        }
    }
}