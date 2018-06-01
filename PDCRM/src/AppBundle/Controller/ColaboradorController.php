<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/6/16
 * Time: 11:25 a.m.
 */
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuario;
use Symfony\Component\Form\FormError;

use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\HttpFoundation\Response;

use AppBundle\Repository\ColaboradorRepository;

/**
 * Colaborador controller.
 *
 * @Route("/colaborador")
 */
class ColaboradorController extends Controller
{
    /**
     * Lists all Colaborador entities.
     *
     * @Route("/", name="colaborador_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = new ColaboradorRepository($this->getDoctrine()->getManager(),
                                        $this->get('security.context')->getToken()->getUser());

        // 1. Obtener candidatos a Colaboradores
        $posiblescolaboradores = $em->findAllCandidatoColaborador();

        // 2. Obtener Colaboradores
        $handshakes = $em->findAllHandshakes();

        // 3. Obtener Seguidores
        $seguidores = $em->findAllSeguidores();

        return $this->render('colaborador/index.html.twig', array(
            'posiblescolaboradores' => $posiblescolaboradores,
            'handshakes' => $handshakes,
            'seguidores' => $seguidores
        ));
    }

    /**
     * Lists all Usuario entities.
     *
     * @Route("/handshake.{_format}", name="colaborador_handshake", defaults= {"_format"="json"}, requirements = {"_format"="json"})
     * @Method("GET")
     */
    public function handshakeAction(Request $request, $_format)
    {
        $resultado = false;
        $idUsuarioColaborador = intVal($request->query->get('idUsuarioColaborador'));

        if ($idUsuarioColaborador!=-1 && $idUsuarioColaborador != NULL) {
            $em = $this->getDoctrine()->getManager();

            $authuser= $this->get('security.context')->getToken()->getUser();

            // 1. Buscar colaborador
            $colaborador = $em->getRepository('AppBundle:Usuario')->findOneById(
                $idUsuarioColaborador
            );

            // 2. Si fue encontrado, agregarlo
            if ($colaborador != NULL) {
                $authuser->addColaborador($colaborador);

                try {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($authuser);
                    $em->flush();

                    $resultado = true;
                }
                catch (\Exception $e)
                {
                    $resultado = false;
                }
            }
        }

        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer($classMetadataFactory));
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize(array('resultado' => $resultado), 'json');

        return new Response($jsonContent);
    }

    /**
     * Creates a new Colaborador entity.
     *
     * @Route("/new", name="colaborador_new")
     * @Method({"GET", "POST"})
     */
    /*public function newAction(Request $request)
    {
        $error=false;

        // 1) build the form
        $user = new Colaborador();
        $form = $this->createForm(ColaboradorType::class, $user);

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
                ->find(1);
            $user->setRol($rol);

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
                $form->get('email')->addError(new FormError('Ya existe un colaborador con este e-mail.'));
            }

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            if (!$error)
            {
                $this->addFlash(
                    'notice',
                    'Su colaborador ha sido creado con éxito. A partir de este momento puede ingresar a su cuenta.'
                );

                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render('colaborador/new.html.twig', array(
            'colaborador' => $user,
            'form' => $form->createView(),
        ));
    }*/

    /**
     * Finds and displays a Colaborador entity.
     *
     * @Route("/{id}", name="colaborador_show")
     * @Method("GET")
     */
    /*public function showAction(Colaborador $colaborador)
    {
        $deleteForm = $this->createDeleteForm($colaborador);

        return $this->render('colaborador/enviar.html.twig', array(
            'colaborador' => $colaborador,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Colaborador entity.
     *
     * @Route("/{id}/edit", name="colaborador_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Colaborador $colaborador)
    {
        $deleteForm = $this->createDeleteForm($colaborador);
        $editForm = $this->createForm('AppBundle\Form\ColaboradorType', $colaborador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($colaborador);
            $em->flush();

            return $this->redirectToRoute('colaborador_edit', array('id' => $colaborador->getId()));
        }

        return $this->render('colaborador/edit.html.twig', array(
            'colaborador' => $colaborador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a Colaborador entity.
     *
     * @Route("/{id}", name="colaborador_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Colaborador $colaborador)
    {
        $form = $this->createDeleteForm($colaborador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($colaborador);
            $em->flush();
        }

        return $this->redirectToRoute('colaborador_index');
    }*/

    /**
     * Creates a form to delete a Colaborador entity.
     *
     * @param Colaborador $colaborador The Colaborador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Colaborador $colaborador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colaborador_delete', array('id' => $colaborador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/
}
