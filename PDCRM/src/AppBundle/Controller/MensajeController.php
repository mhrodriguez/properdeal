<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Mensaje;
use AppBundle\Entity\Prospecto;
use AppBundle\Form\MensajeType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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
     * @Route("/index.{_format}", name="mensaje_index", defaults= {"_format"="html"}, requirements = {"_format"="html|json|xlsx"})
     * @Method("GET")
     */
    public function indexAction(Request $request, $_format)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        //$mensajes = $em->getRepository('AppBundle:Mensaje')->findByDestinoemail($authuser->getEmail(), array('activo'=>true));
        $mensajes = $em->getRepository('AppBundle:Mensaje')->findBy(array('destinoemail'=>$authuser->getEmail(), 'activo'=>true), array('fechaCreacion'=>'DESC'));

        if ($_format == "html") {
            // Poner mensajes como leidos
            $mensajeRepository = $em->getRepository('AppBundle:Mensaje');
            $mensajeRepository->setDoctrineManager($em);
            $mensajeRepository->updateByDestinoemailLeido($authuser->getEmail());

            return $this->render('mensaje/index.html.twig', array(
                'mensajes' => $mensajes,
                'esVerMensajesBorrados' => false
            ));
        }
        else
        {
            return $this->crearExcel($mensajes);
        }
    }

    /**
     * Lists all Mensaje entities.
     *
     * @Route("/indexborrado.{_format}", name="mensaje_indexborrado", defaults= {"_format"="html"}, requirements = {"_format"="html|json|xlsx"})
     * @Method("GET")
     */
    public function indexborradoAction(Request $request, $_format)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        //$mensajes = $em->getRepository('AppBundle:Mensaje')->findByDestinoemail($authuser->getEmail(), array('activo'=>true));
        $mensajes = $em->getRepository('AppBundle:Mensaje')->findBy(array('destinoemail'=>$authuser->getEmail(), 'activo'=>false), array('fechaCreacion'=>'DESC'));

        if ($_format == "html") {
            // Poner mensajes como leidos
            $mensajeRepository = $em->getRepository('AppBundle:Mensaje');
            $mensajeRepository->setDoctrineManager($em);
            $mensajeRepository->updateByDestinoemailLeido($authuser->getEmail());

            return $this->render('mensaje/index.html.twig', array(
                'mensajes' => $mensajes,
                'esVerMensajesBorrados' => true
            ));
        }
        else
        {
            return $this->crearExcel($mensajes);
        }
    }

    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/new", name="mensaje_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $tipoMensaje = intVal($request->query->get('tipoMensaje'));

        $mensaje = new Mensaje();
        $form = $this->createForm('AppBundle\Form\MensajeType', $mensaje);
        $form->handleRequest($request);

        $mensaje->setTipoMensaje($tipoMensaje);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if ($mensaje->getTipoMensaje() == 1) // Mensaje a Lista de Contactos
            {
                $contactoRepository = $em->getRepository('AppBundle:Contacto');
                $contactoRepository->setDoctrineManager($em);

                $idListaContacto = intVal($request->query->get('idContacto'));
                // Obtener todos los correos de la lista
                $listaContactos = $contactoRepository->findByListaContacto($idListaContacto);

                if (count($listaContactos)>0)
                {
                    for ($index=0; $index<count($listaContactos);$index++)
                    {
                        $contacto = $listaContactos[$index];

                        $mensajenuevo = new Mensaje();
                        $mensajenuevo->setIdUsuario($authuser);
                        $mensajenuevo->setDestinoemail($contacto["email"]);
                        $mensajenuevo->setTitulo($mensaje->getTitulo());
                        $mensajenuevo->setTexto($mensaje->getTexto());

                        $em->persist($mensajenuevo);
                        $em->flush();
                    }

                    return $this->redirectToRoute('listacontacto_index', array());
                }
                else{
                    $form->get('texto')->addError(new FormError('El mensaje no pudo ser enviado debido a que la lista de contactos esta vacía.'));
                }
            }
            else if ($mensaje->getTipoMensaje() == 2) // Mensaje a un contacto
            {
                $idContacto = intVal($request->query->get('idContacto'));

                $contacto = $em->getRepository('AppBundle:Contacto')->findByIdContacto($idContacto)[0];

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setDestinoemail($contacto->getEmail());
                $mensajenuevo->setTitulo($mensaje->getTitulo());
                $mensajenuevo->setTexto($mensaje->getTexto());

                $em->persist($mensajenuevo);
                $em->flush();

                return $this->redirectToRoute('contacto_index', array());
            }
            else if ($mensaje->getTipoMensaje() == 3) // Mensaje Inmueble a asesor
            {
                $idAsesor = intVal($request->query->get('idAsesor'));
                $idInmueble = intVal($request->query->get('idInmueble'));

                $usuario = $em->getRepository('AppBundle:Usuario')->findById($idAsesor)[0];

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setDestinoemail($usuario->getEmail());
                $mensajenuevo->setTitulo($mensaje->getTitulo());
                $mensajenuevo->setTexto($mensaje->getTexto());
                $mensajenuevo->setActivo(true);

                $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);

                $mensajenuevo->addInmueble($inmueble);

                $em->persist($mensajenuevo);
                $em->flush();

                return $this->redirectToRoute('inmueble_index', array());
            }
            else if ($mensaje->getTipoMensaje() == 4) // Mensaje Solicitud a asesor
            {
                $idAsesor = intVal($request->query->get('idAsesor'));
                $idSolicitud = intVal($request->query->get('idSolicitud'));

                $usuario = $em->getRepository('AppBundle:Usuario')->findById($idAsesor)[0];

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setDestinoemail($usuario->getEmail());
                $mensajenuevo->setTitulo($mensaje->getTitulo());
                $mensajenuevo->setTexto($mensaje->getTexto());
                $mensajenuevo->setActivo(true);

                $solicitud = $em->getRepository('AppBundle:Solicitud')->findOneByIdSolicitud($idSolicitud);

                $mensajenuevo->addSolicitude($solicitud);

                $em->persist($mensajenuevo);
                $em->flush();

                return $this->redirectToRoute('solicitud_index', array());
            }
            else if ($mensaje->getTipoMensaje() == 5) // Mensaje a prospecto
            {
                $idProspecto = intVal($request->query->get('idProspecto'));

                $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setDestinoemail($prospecto->getEmail());
                $mensajenuevo->setTitulo($mensaje->getTitulo());
                $mensajenuevo->setTexto($mensaje->getTexto());
                $mensajenuevo->setActivo(true);

                $em->persist($mensajenuevo);
                $em->flush();

                // Enviar E-Mail a destinatario
                $message = \Swift_Message::newInstance()
                    ->setSubject("Ha recibido un mensaje de " . $authuser->getNombre())
                    ->setFrom("properdealmx@gmail.com")
                    ->setTo($prospecto->getEmail())
                    ->setBody(
                        $this->renderView(
                            'mensaje/mail_mensaje.html.twig',
                            array('titulo' => $mensaje->getTitulo(),
                                'mensaje' => $mensaje->getTexto())
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $this->addFlash(
                    'notice',
                    'Mensaje enviado'
                );

                return $this->redirectToRoute('prospecto_index', array());
            }

        }

        return $this->render('mensaje/new.html.twig', array(
            'mensaje' => $mensaje,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/enviarinmueble", name="mensaje_enviarinmueble")
     * @Method({"GET", "POST"})
     */
    public function enviarInmuebleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $tipoMensaje = intVal($request->query->get('tipoMensaje'));

        $authuser= $this->get('security.context')->getToken()->getUser();

        $listaContactos = $em->getRepository('AppBundle:ListaContacto')->findByOwner($authuser->getId());

        $mensaje = new Mensaje();
        $form = $this->createForm('AppBundle\Form\MensajeType', $mensaje,
            array('listacontactos' => $listaContactos
        ));
        $form->handleRequest($request);

        $mensaje->setTipoMensaje($tipoMensaje);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($mensaje->getTipoMensaje() == 1) // Mensaje a Lista de Contactos
            {
                $contactoRepository = $em->getRepository('AppBundle:Contacto');
                $contactoRepository->setDoctrineManager($em);

                $idListaContacto = $mensaje->getIdListacontacto()->getIdListaContacto();

                $idAsesor = $request->query->get('ida');
                $idInmuebles = $request->query->get('idInmueble');
                $arrayInmuebles= explode(',', $idInmuebles);

                // Obtener todos los correos de la lista
                $listaContactos = $contactoRepository->findByListaContacto($idListaContacto);

                if (count($listaContactos)>0)
                {
                    for ($index=0; $index<count($listaContactos);$index++)
                    {
                        $contacto = $listaContactos[$index];

                        $mensajenuevo = new Mensaje();
                        $mensajenuevo->setIdUsuario($authuser);
                        $mensajenuevo->setDestinoemail($contacto["email"]);
                        $mensajenuevo->setTitulo($mensaje->getTitulo());
                        $mensajenuevo->setTexto($mensaje->getTexto());
                        $mensajenuevo->setActivo(true);

                        $arrayObjetosInmuebles = array();
                        for ($indexInmueble=0; $indexInmueble<count($arrayInmuebles);$indexInmueble++) {
                            $idInmueble = $arrayInmuebles[$indexInmueble];

                            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);
                            array_push($arrayObjetosInmuebles, $inmueble);

                            $mensajenuevo->addInmueble($inmueble);

                            // Sí la propiedad pertenece a otro asesor...
                            if ($inmueble->getIdUsuario()->getId() != $authuser->getId())
                            {
                                $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($inmueble->getIdUsuario()->getId());

                                // Enviar E-Mail a destinatario
                                $message = \Swift_Message::newInstance()
                                    ->setSubject("Se ha compartido una propiedad que usted dió de alta")
                                    ->setFrom("properdealmx@gmail.com")
                                    ->setTo($usuario->getEmail())
                                    ->setBody(
                                        $this->renderView(
                                            'mensaje/mail_inmueblecompartido.html.twig',
                                            array('nombre' => $authuser->getNombre(),
                                                'idInmueble' => $inmueble->getIdInmueble())
                                        ),
                                        'text/html'
                                    );
                                $this->get('mailer')->send($message);
                            }
                        }

                        $em->persist($mensajenuevo);
                        $em->flush();

                        // Enviar E-Mail a cliente
                        $message = \Swift_Message::newInstance()
                            ->setSubject($authuser->getNombre() . " te ha compartido una propiedad")
                            ->setFrom("properdealmx@gmail.com")
                            ->setTo($mensajenuevo->getDestinoemail())
                            ->setBody(
                                $this->renderView(
                                    'mensaje/mail_enviarinmueble.html.twig',
                                    array(
                                        'titulo' => $mensaje->getTitulo(),
                                        'mensaje' => $mensaje->getTexto(),
                                        'inmuebles' => $arrayObjetosInmuebles,
                                        'ida'=>$idAsesor)
                                ),
                                'text/html'
                            );
                        $this->get('mailer')->send($message);
                    }

                    $this->addFlash(
                        'notice',
                        '¡Propiedad(es) enviada(s) exitosamente!'
                    );

                    return $this->redirectToRoute('inmueble_index', array());
                }
                else{
                    $form->get('texto')->addError(new FormError('El mensaje no pudo ser enviado debido a que la lista de contactos esta vacía.'));
                }
            }
        }

        return $this->render('mensaje/enviarinmueble.html.twig', array(
            'mensaje' => $mensaje,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/enviarinmuebleamigo", name="mensaje_enviarinmuebleamigo")
     * @Method({"GET"})
     */
    public function enviarInmuebleAmigoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();

        $idAsesor = $request->query->get('ida');
        $idInmuebles = $request->query->get('idInmueble');
        $email = $request->query->get('email');
        $arrayInmuebles= explode(',', $idInmuebles);

        $mensajenuevo = new Mensaje();
        $mensajenuevo->setIdUsuario($authuser);
        $mensajenuevo->setDestinoemail($email);
        $mensajenuevo->setTitulo($authuser->getNombre() . " te ha compartido una propiedad");
        $mensajenuevo->setTexto("");
        $mensajenuevo->setActivo(true);

        $arrayObjetosInmuebles = array();
        for ($indexInmueble=0; $indexInmueble<count($arrayInmuebles);$indexInmueble++) {
            $idInmueble = $arrayInmuebles[$indexInmueble];

            $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);
            array_push($arrayObjetosInmuebles, $inmueble);

            $mensajenuevo->addInmueble($inmueble);

            // Sí la propiedad pertenece a otro asesor...
            if ($inmueble->getIdUsuario()->getId() != $authuser->getId())
            {
                $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($inmueble->getIdUsuario()->getId());

                // Enviar E-Mail a destinatario
                $message = \Swift_Message::newInstance()
                    ->setSubject("Se ha compartido una propiedad que usted dió de alta")
                    ->setFrom("properdealmx@gmail.com")
                    ->setTo($usuario->getEmail())
                    ->setBody(
                        $this->renderView(
                            'mensaje/mail_inmueblecompartido.html.twig',
                            array('nombre' => $authuser->getNombre(),
                                'idInmueble' => $inmueble->getIdInmueble())
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);
            }
        }

        $em->persist($mensajenuevo);
        $em->flush();


        // Enviar E-Mail a cliente
        $message = \Swift_Message::newInstance()
            ->setSubject($authuser->getNombre() . " te ha compartido una propiedad")
            ->setFrom("properdealmx@gmail.com")
            ->setTo($mensajenuevo->getDestinoemail())
            ->setBody(
                $this->renderView(
                    'mensaje/mail_enviarinmueble.html.twig',
                    array(
                        'titulo' => $mensajenuevo->getTitulo(),
                        'mensaje' => $mensajenuevo->getTexto(),
                        'inmuebles' => $arrayObjetosInmuebles,
                        'ida'=>$idAsesor)
                ),
                'text/html'
            );

        $this->get('mailer')->send($message);

        $this->addFlash(
            'notice',
            '¡Propiedad(es) enviada(s) exitosamente!'
        );

        return $this->redirectToRoute('inmueble_index', array());
    }


    /**
     * Creates a new Mensaje entity.
     *
     * @Route("/enviarinmuebleaprospectos", name="mensaje_enviarinmuebleaprospectos")
     * @Method({"GET"})
     */
    public function enviarInmuebleAProspectosAction(Request $request)
    {
        $arrayObjetosInmuebles=null;
        $arrayObjetosProspectos=array();

        $em = $this->getDoctrine()->getManager();

        $authuser= $this->get('security.context')->getToken()->getUser();

        $idAsesor = $request->query->get('ida');

        $idInmuebles = $request->query->get('idInmuebles');
        $arrayInmuebles= explode(',', $idInmuebles);

        $email = $request->query->get('email');

        $titulo = $request->query->get('titulo');

        $mensaje = $request->query->get('mensaje');
        if ($mensaje == null) $mensaje='';

        $idProspectos = $request->query->get('idProspectos');
        $arrayProspectos= explode(',', $idProspectos);

        $redurl = str_replace("SHARP", "#", $request->query->get('redurl'));
        $redurl = str_replace("AMP", "&", $redurl);

        $transport = \Swift_SmtpTransport::newInstance('mail.properdeal.mx')
            ->setUsername($authuser->getEmail())
            ->setPassword($authuser->getPwdemail());
        $mailerauthuser = \Swift_Mailer::newInstance($transport);

        // 0. Determinar template a usar
        if (count($arrayInmuebles) > 1)
        {
            $mail_template = "mensaje/mail_enviarinmueble_multiple.html.twig";
        }
        else
        {
            $mail_template = "mensaje/mail_enviarinmueble.html.twig";
        }


        // 1. Enviar a prospectos
        if (count($arrayProspectos)>0) {
            for ($indexProspecto = 0; $indexProspecto < count($arrayProspectos); $indexProspecto++) {

                $idProspecto = $arrayProspectos[$indexProspecto];

                if ($idProspecto == null || $idProspecto=='') {
                    continue;
                }

                $prospecto = $em->getRepository('AppBundle:Prospecto')->findOneByIdProspecto($idProspecto);
                array_push($arrayObjetosProspectos, $prospecto);

                $mensajenuevo = new Mensaje();
                $mensajenuevo->setIdUsuario($authuser);
                $mensajenuevo->setTitulo($titulo);
                $mensajenuevo->setTexto($mensaje);
                $mensajenuevo->setActivo(true);
                $mensajenuevo->setDestinoemail($prospecto->getEmail());

                $arrayObjetosInmuebles = array();
                for ($indexInmueble = 0; $indexInmueble < count($arrayInmuebles); $indexInmueble++) {
                    $idInmueble = $arrayInmuebles[$indexInmueble];

                    $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);
                    array_push($arrayObjetosInmuebles, $inmueble);

                    if (count($arrayInmuebles)>1)
                    {
                        $inmueble->setDescripcion(substr($inmueble->getDescripcion(), 0, 65*3) . '...');
                    }

                    $mensajenuevo->addInmueble($inmueble);
                }

                // Enviar E-Mail a cliente
                $message = \Swift_Message::newInstance()
                    ->setSubject($titulo)
                    ->setFrom(array($authuser->getEmail() => $authuser->getNombre()))
                    ->setTo($mensajenuevo->getDestinoemail())
                    ->setReplyTo(array($authuser->getEmail() => $authuser->getNombre()))
                    ->setBody(
                        $this->renderView(
                            $mail_template,
                            array(
                                'titulo' => $mensajenuevo->getTitulo(),
                                'mensaje' => $mensajenuevo->getTexto(),
                                'inmuebles' => $arrayObjetosInmuebles,
                                'asesor' => $authuser,
                                'ida' => $idAsesor)
                        ),
                        'text/html'
                    );
                $mailerauthuser->send($message);

                // Regresar la descripcion completa
                if (count($arrayInmuebles)>1) {
                    for ($indexInmueble = 0; $indexInmueble < count($arrayObjetosInmuebles); $indexInmueble++) {
                        $inmueble = $arrayObjetosInmuebles[$indexInmueble];
                        $em->refresh($inmueble);
                    }
                }

                $em->persist($mensajenuevo);
                $em->flush();
            }
        }

        // 2. Enviar a E-mail
        if ($email != '' && $email != null) {

            if ($arrayObjetosInmuebles == null) {
                $arrayObjetosInmuebles = array();
                for ($indexInmueble = 0; $indexInmueble < count($arrayInmuebles); $indexInmueble++) {
                    $idInmueble = $arrayInmuebles[$indexInmueble];

                    $inmueble = $em->getRepository('AppBundle:Inmueble')->findOneByIdInmueble($idInmueble);
                    array_push($arrayObjetosInmuebles, $inmueble);

                    if (count($arrayInmuebles)>1)
                    {
                        $inmueble->setDescripcion(substr($inmueble->getDescripcion(), 0, 65*3) . '...');
                    }
                }
            }
            else
            {
                if (count($arrayInmuebles)>1) {
                    for ($indexInmueble = 0; $indexInmueble < count($arrayObjetosInmuebles); $indexInmueble++) {
                        $inmueble = $arrayObjetosInmuebles[$indexInmueble];
                        $inmueble->setDescripcion(substr($inmueble->getDescripcion(), 0, 65*3) . '...');
                    }
                }
            }

            $mensajenuevo = new Mensaje();
            $mensajenuevo->setIdUsuario($authuser);
            $mensajenuevo->setTitulo($titulo);
            $mensajenuevo->setTexto($mensaje);
            $mensajenuevo->setActivo(true);
            $mensajenuevo->setDestinoemail($email);

            // Enviar E-Mail a cliente
            $message = \Swift_Message::newInstance()
                ->setSubject($mensajenuevo->getTitulo())
                ->setFrom(array($authuser->getEmail() => $authuser->getNombre()))
                ->setTo($mensajenuevo->getDestinoemail())
                ->setReplyTo(array($authuser->getEmail() => $authuser->getNombre()))
                ->setBody(
                    $this->renderView(
                        $mail_template,
                        array(
                            'titulo' => $mensajenuevo->getTitulo(),
                            'mensaje' => $mensajenuevo->getTexto(),
                            'inmuebles' => $arrayObjetosInmuebles,
                            'asesor' => $authuser,
                            'ida' => $idAsesor)
                    ),
                    'text/html'
                );
            $mailerauthuser->send($message);

            // Regresar la descripcion completa
            if (count($arrayInmuebles)>1) {
                for ($indexInmueble = 0; $indexInmueble < count($arrayObjetosInmuebles); $indexInmueble++) {
                    $inmueble = $arrayObjetosInmuebles[$indexInmueble];
                    $em->refresh($inmueble);
                }
            }

            $em->persist($mensajenuevo);
            $em->flush();

            $prospectoEmail = new Prospecto();
            $prospectoEmail->setEMail($email);
            array_push($arrayObjetosProspectos, $prospectoEmail);
        }

        // A. Enviar correo a si mismo para confirmar que se han enviado las propiedades
        if (count($arrayInmuebles)>1) {
            for ($indexInmueble = 0; $indexInmueble < count($arrayObjetosInmuebles); $indexInmueble++) {
                $inmueble = $arrayObjetosInmuebles[$indexInmueble];
                $inmueble->setDescripcion(substr($inmueble->getDescripcion(), 0, 65*3) . '...');
            }
        }
        $message = \Swift_Message::newInstance()
            ->setSubject("Usted ha compartido estas propiedades.")
            ->setFrom(array($authuser->getEmail() => $authuser->getNombre()))
            ->setTo($authuser->getEmail())
            ->setBody(
                $this->renderView(
                    $mail_template,
                    array(
                        'titulo' => $titulo,
                        'mensaje' => $mensaje,
                        'inmuebles' => $arrayObjetosInmuebles,
                        'asesor' => $authuser,
                        'prospectos' => $arrayObjetosProspectos,
                        'ida' => $idAsesor)
                ),
                'text/html'
            );
        $mailerauthuser->send($message);

        // B. Enviar notificaciones de envio de inmuebles a asesores que los tienen asignados:
        for ($indexInmueble = 0; $indexInmueble < count($arrayObjetosInmuebles); $indexInmueble++) {
            $inmueble = $arrayObjetosInmuebles[$indexInmueble];

            $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($inmueble->getIdUsuario()->getId());

            // Si el usuario asignado a la propiedad es diferente del usuario logeado, enviar
            if ($inmueble->getIdUsuario()->getId() != $authuser->getId())
            {
                // Enviar notificación
                $message = \Swift_Message::newInstance()
                    ->setSubject("Se ha compartido una propiedad que tiene asignada.")
                    ->setFrom(array($authuser->getEmail() => $authuser->getNombre()))
                    ->setTo($usuario->getEmail())
                    ->setBody(
                        $this->renderView(
                            'mensaje/mail_enviarinmueble_notif.html.twig',
                            array(
                                'titulo' => $titulo,
                                'mensaje' => $mensaje,
                                'inmuebles' => array($inmueble),
                                'asesor' => $authuser,
                                'prospectos' => $arrayObjetosProspectos,
                                'ida' => $idAsesor)
                        ),
                        'text/html'
                    );
                $mailerauthuser->send($message);
            }
        }

        $this->addFlash(
            'notice',
            '¡Propiedad(es) enviada(s) exitosamente!'
        );

        if ($redurl == null) {
            return $this->redirectToRoute('ids_index', array());
        }
        else
        {
            return $this->redirect($redurl);
        }
    }

    private function crearExcel($mensajes)
    {

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel2007');

        $htmlHelper = $this->get('phpexcel')->createHelperHTML();

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('A1', $htmlHelper->toRichTextObject('<b>ID</b>'))
            ->setCellValue('B1', $htmlHelper->toRichTextObject('<b>Fecha</b>'))
            ->setCellValue('C1', $htmlHelper->toRichTextObject('<b>Nombre</b>'))
            ->setCellValue('D1', $htmlHelper->toRichTextObject('<b>E-mail</b>'))
            ->setCellValue('E1', $htmlHelper->toRichTextObject('<b>Titulo</b>'))
            ->setCellValue('F1', $htmlHelper->toRichTextObject('<b>Texto</b>'));

        for ($index=0; $index<count($mensajes); $index++)
        {
            $mensaje = $mensajes[$index];

            $fila = $index+2;
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('A'.$fila, $mensaje->getIdMensaje())
                ->setCellValue('B'.$fila, $mensaje->getFechaCreacion())
                ->setCellValue('C'.$fila, $mensaje->getIdUsuario()->getNombre())
                ->setCellValue('D'.$fila, $mensaje->getIdUsuario()->getEmail())
                ->setCellValue('E'.$fila, $mensaje->getTitulo())
                ->setCellValue('F'.$fila, $mensaje->getTexto());
        }

        $response = $this->get('phpexcel')->createStreamedResponse($writer);

        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'mensaje.xlsx'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    /**
     * Confirmarmatrizs a Pago entity.
     *
     * @Route("/borrar", name="mensaje_borrar")
     * @Method("POST")
     */
    public function borrarmensajeAction(Request $request)
    {
        $idMensaje = intval($request->query->get('idMensaje'));

        $em = $this->getDoctrine()->getManager();

        $mensaje = $em->getRepository('AppBundle:Mensaje')->findOneByIdMensaje($idMensaje);

        if ($mensaje != null)
        {
            $mensaje->setActivo(false);

            $em->persist($mensaje);

            $em->flush();
        }

        return $this->redirectToRoute('mensaje_index');
    }

    /**
     * Lists all Mensaje entities.
     *
     * @Route("/resumenenvios", name="mensaje_resumenenvios")
     * @Method("GET")
     */
    public function resumenenviosAction(Request $request)
    {
        $authuser= $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $mensajes = $em->getRepository('AppBundle:Mensaje')->findByOwner($authuser->getId());

        return $this->render('mensaje/resumenenvios.html.twig', array(
                'mensajes' => $mensajes,
                'esVerMensajesBorrados' => false
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

        return $this->render('mensaje/enviar.html.twig', array(
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
