<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/17/16
 * Time: 6:37 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

/**
 * Usuario controller.
 *
 * @Route("/asesor")
 */
class AsesorController extends Controller
{
    /**
     * Lists all Usuario entities.
     *
     * @Route("/", name="asesor_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $borrados = intVal($request->query->get('borrados'));
        $search = $request->query->get('search');

        // 1. Obtener Usuario padre
        $em = $this->getDoctrine()->getManager();

        if ($borrados == NULL || $borrados == 0) {
            $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2Activo(true);
            $borrados=false;
        }
        else
        {
            $borrados=true;
            $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2Activo(false);
        }

        if ($search!=NULL && $search!="")
        {
            // Filtrar
            $usuarios = $this->filtrarAsesores($usuarios, $search);
        }

        $ur = $em->getRepository('AppBundle:Usuario');
        $ur->setDoctrineManager($em);

        $pathFotografias = array();
        $arrayCountPropiedades = array();
        $arrayCountProspectos = array();
        foreach ($usuarios as $usuario)
        {
            array_push($pathFotografias, $ur->obtenerFotoURL($usuario->getId()));
            // Obtener el numero de propiedades
            array_push($arrayCountPropiedades, strval($em->getRepository('AppBundle:Inmueble')->findByOwnerCount($usuario->getId())));
            // Obtener el numero de prospectos
            array_push($arrayCountProspectos, $em->getRepository('AppBundle:Prospecto')->findByOwnerCount($usuario->getId()));
        }

        return $this->render('asesor/index.html.twig', array(
            'usuarios' => $usuarios,
            'pathFotografias' => $pathFotografias,
            'arrayCountPropiedades' => $arrayCountPropiedades,
            'arrayCountProspectos' => $arrayCountProspectos,
            'borrados' => $borrados
        ));
    }

    /**
     * Creates a new Usuario entity.
     *
     * @Route("/new", name="asesor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error=false;

        // 1) build the form
        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // 4) save the User!
            $user->setActivo(true);

            $rol = $this->getDoctrine()
                ->getRepository('AppBundle:Rol')
                ->find(2);
            $user->setRol($rol);

            // Usuario padre
            $authuser= $this->get('security.context')->getToken()->getUser();
            $user->setIdUsuarioPadre($authuser->getId());

            $em = $this->getDoctrine()->getManager();

            // 4.1) validar si hubo un error
            try {
                //$em->persist($rol);
                $em->persist($user);
                $em->flush();
            }
            catch(UniqueConstraintViolationException $e)
            {
                $error=true;
                $form->get('email')->addError(new FormError('Ya existe un usuario con este e-mail.'));
            }

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            if (!$error)
            {
                $this->addFlash(
                    'notice',
                    'El asesor ha sido creado con éxito.'
                );

                return $this->redirectToRoute('asesor_index');
            }
        }

        return $this->render('asesor/new.html.twig', array(
            'usuario' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Lists all Usuario entities.
     *
     * @Route("/permiso", name="asesor_permiso")
     * @Method("GET")
     */
    public function permisoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('AppBundle:Usuario')->findAllRole1and2();

        return $this->render('asesor/permiso.html.twig', array(
            'usuarios' => $usuarios,
        ));
    }

    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/borrar", name="asesor_borrar")
     * @Method("GET")
     */
    public function borrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($id);

        $usuario->setActivo(false);

        $em->persist($usuario);
        $em->flush();

        return $this->redirectToRoute('asesor_index');
    }


    /**
     * Activa/Desactiva a Inmueble entity.
     *
     * @Route("/{id}/enviarmensajebienvenida", name="asesor_enviarmensajebienvenida")
     * @Method("GET")
     */
    public function enviarmensajebienvenidaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $usuario = $em->getRepository('AppBundle:Usuario')->findOneById($id);

        // 2. Enviar Mail
        $message = \Swift_Message::newInstance()
            ->setSubject("¡Bienvenido!")
            ->setFrom("properdealmx@gmail.com")
            ->setTo($usuario->getEmail())
            ->setBody(
                $this->renderView(
                    'asesor/mail_bienvenida.html.twig',
                    array('nombre' => $usuario->getNombre())
                ),
                'text/html'
            );
        $this->get('mailer')->send($message);

        // 2. Mensaje de Notificación
        $this->addFlash(
            'notice',
            'El mensaje de bienvenida ha sido enviado.'
        );

        return $this->redirectToRoute('asesor_index');
    }



    private function filtrarAsesores($asesores, $search)
    {
        $asesoresFiltro = array();

        $search = strtoupper($search);

        foreach ($asesores as $asesor)
        {
            if ((strpos(strtoupper($asesor->getNombre()), $search) !== false) ||
                (strpos(strtoupper($asesor->getEmpresa()), $search) !== false) ||
                (strpos(strtoupper($asesor->getEmail()), $search) !== false) ||
                (strpos(strtoupper($asesor->getTelefono()), $search) !== false) ||
                (strpos(strtoupper($asesor->getTelefono2()), $search) !== false) ||
                (strpos(strtoupper($asesor->getCelular()), $search) !== false)
            )
            {
                array_push($asesoresFiltro, $asesor);
            }
        }

        return $asesoresFiltro;
    }
}