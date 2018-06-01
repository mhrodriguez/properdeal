<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/15/16
 * Time: 4:51 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Mensaje;
use AppBundle\Entity\Contactanos;
use AppBundle\Form\MensajeType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;

/**
 * Mensaje controller.
 *
 * @Route("/mensaje")
 */
class MensajeController extends Controller
{
    /**
     * Lists all Mensaje entities.
     *
     * @Route("/", name="mensaje_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $mensajes = $em->getRepository('AppBundle:Mensaje')->findByDestinoemail($authuser->getEmail());

        return $this->render('mensaje/index.html.twig', array(
            'mensajes' => $mensajes,
        ));
    }

    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/new", name="mensaje_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $urlBack = $request->query->get('urlBack');
        $idInmueble = intVal($request->query->get('idInmueble'));

        $authuser= $this->get('security.context')->getToken()->getUser();

        $mensaje = new Mensaje();
        $mensaje->setTitulo('Información de propiedad');
        $form = $this->createForm('AppBundle\Form\MensajeType', $mensaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $idUsuario = intVal($request->query->get('idUsuario'));

                $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($idUsuario);

                $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setDestinoemail($usuario->getEmail());
                $mensajenuevo->setTexto($mensaje->getTexto());
                $mensajenuevo->setTitulo($mensaje->getTitulo());
                $mensajenuevo->addInmueble($inmueble);

                $em->persist($mensajenuevo);
                $em->flush();

                $this->addFlash(
                'notice',
                'Su mensaje ha sido enviado con éxito. En breve nuestro asesor le contactará.'
                );
                return new Response('<script>parent.mensajeEnviado();</script>');

                //return $this->redirect($urlBack);
        }

        return $this->render('mensaje/new.html.twig', array(
            'mensaje' => $mensaje,
            'urlBack' => $urlBack,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/anonimo", name="mensaje_anonimo")
     * @Method({"GET", "POST"})
     */
    public function anonimoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();

        $urlBack = $request->query->get('urlBack');
        $idInmueble = intVal($request->query->get('idInmueble'));

        $contactanos = new Contactanos();

        $form = $this->createForm('AppBundle\Form\ContactanosType', $contactanos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mensaje = new Mensaje();

            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

            $mensaje->setTitulo('Información de propiedad');
            $mensaje->setTexto($contactanos->getComentarios());

            $idUsuario = intVal($request->query->get('idUsuario'));

            $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($idUsuario);

            $mensajenuevo = new Mensaje();
            $mensajenuevo->setDestinoemail($usuario->getEmail());
            $mensajenuevo->setTitulo($mensaje->getTitulo());
            $mensajenuevo->setTexto($mensaje->getTexto());

            $mensajenuevo->setNombre($contactanos->getNombre());
            $mensajenuevo->setTelefono($contactanos->getTelefono());
            $mensajenuevo->setEmailremitente($contactanos->getEmail());

            $mensajenuevo->addInmueble($inmueble);

            $em->persist($mensajenuevo);
            $em->flush();

            // Enviar e-mail al asesor que dio el alta la propiedad
            $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($inmueble->getIdUsuario()->getId());
            // Enviar E-Mail
            $message = \Swift_Message::newInstance()
                ->setSubject("Se ha preguntado por una propiedad que usted dió de alta")
                ->setFrom("properdealmx@gmail.com")
                ->setTo($usuario->getEmail())
                ->setBody(
                    $this->renderView(
                        'mensaje/mail_inmueblecontacto.html.twig',
                        array('nombre' => $contactanos->getNombre(),
                            'telefono' => $contactanos->getTelefono(),
                            'email' => $contactanos->getEmail(),
                            'comentarios' => $contactanos->getComentarios(),
                            'idInmueble' => $inmueble->getIdInmueble())
                    ),
                    'text/html'
                );
            $this->get('mailer')->send($message);

            $this->addFlash(
            'notice',
            'Su mensaje ha sido enviado con éxito. En breve nuestro asesor le contactará.'
            );

            return $this->redirect($urlBack);
        }

        return $this->render('mensaje/anonimo.html.twig', array(
            'mensaje' => $contactanos,
            'urlBack' => $urlBack,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mensaje entity.
     *
     * @Route("/{id}", name="mensaje_show")
     * @Method("GET")
     */
    /*public function showAction(Mensaje $mensaje)
    {
        $deleteForm = $this->createDeleteForm($mensaje);

        return $this->render('mensaje/show.html.twig', array(
            'mensaje' => $mensaje,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Mensaje entity.
     *
     * @Route("/{id}/edit", name="mensaje_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Mensaje $mensaje)
    {
        $deleteForm = $this->createDeleteForm($mensaje);
        $editForm = $this->createForm('AppBundle\Form\MensajeType', $mensaje);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mensaje);
            $em->flush();

            return $this->redirectToRoute('mensaje_edit', array('id' => $mensaje->getId()));
        }

        return $this->render('mensaje/edit.html.twig', array(
            'mensaje' => $mensaje,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a Mensaje entity.
     *
     * @Route("/{id}", name="mensaje_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Mensaje $mensaje)
    {
        $form = $this->createDeleteForm($mensaje);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mensaje);
            $em->flush();
        }

        return $this->redirectToRoute('mensaje_index');
    }*/

    /**
     * Creates a form to delete a Mensaje entity.
     *
     * @param Mensaje $mensaje The Mensaje entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Mensaje $mensaje)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mensaje_delete', array('id' => $mensaje->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
