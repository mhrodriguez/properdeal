<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Rol;
use AppBundle\Form\UsuarioType;
use Symfony\Component\Form\FormError;
/**
 * Usuario controller.
 *
 * @Route("/usuario")
 */
class UsuarioController extends Controller
{
    /**
     * Creates a new Usuario entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $error=false;
        if ($request->isMethod('POST'))
        {
            $recaptcharesponse = $_POST["g-recaptcha-response"];
        }
        // 1) build the form
        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // 3.1) Validar Captcha
            if (!$this->validarReCaptcha($recaptcharesponse))
            {
                $form->get('email')->addError(new FormError('Falló la validación de reCaptcha.'));
            }
            else
            {
                // 3.2) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPassword());
                $user->setPassword($password);

                // 4) save the User
                $user->setActivo(true);
                $user->setEmpresa("N/A");

                $rol = $this->getDoctrine()
                    ->getRepository('AppBundle:Rol')
                    ->find(3);
                $user->setRol($rol);

                $em = $this->getDoctrine()->getManager();

                // 4.1) validar si hubo un error
                try {
                    $em->persist($user);
                    $em->flush();
                }
                catch(UniqueConstraintViolationException $e)
                {
                    $error=true;
                    $form->get('email')->addError(new FormError('Ya existe un usuario con este e-mail.'));
                }

                if (!$error)
                {
                    // 4.2) Mensaje de Notificación
                    $this->addFlash(
                        'notice',
                        'Su usuario ha sido creado con éxito. A partir de este momento puede ingresar a su cuenta.'
                    );

                    // 4.3) Enviar Mail
                    $message = \Swift_Message::newInstance()
                        ->setSubject("¡Bienvenido!")
                        ->setFrom("properdealmx@gmail.com")
                        ->setTo($user->getEmail())
                        ->setBody(
                            $this->renderView(
                                'usuario/mail_new.html.twig',
                                array('nombre' => $user->getNombre())
                            ),
                            'text/html'
                        );
                    $this->get('mailer')->send($message);

                    // Ir a Homepage
                    return $this->redirectToRoute('homepage');
                }
            }
        }

        return $this->render('usuario/new.html.twig', array(
            'usuario' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuario entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    /*public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Displays a form to edit an existing Usuario entity.
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    /*public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuario_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a Usuario entity.
     *
     * @Route("/{id}", name="usuario_delete")
     * @Method("DELETE")
     */
    /*public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }*/

    /**
     * Creates a form to delete a Usuario entity.
     *
     * @param Usuario $usuario The Usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }*/

    public function validarReCaptcha($recaptcharesponse)
    {
        // return true; //Para DEBUG y eliminar uso del Captcha

        //extract data from the post
        //set POST variables
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $fields = array(
            'secret' => urlencode('6Lf1AyITAAAAAPreNaveCBjyHHKNiTJD7SHkM-g3'),
            'response' => urlencode($recaptcharesponse),
        );

        //url-ify the data for the POST
        $fields_string="";
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);

        // Validar resultado
        $pos = strpos($result, "\"success\": true");

        if ($pos === false) {
            return false;
        }
        else
        {
            return true;
        }
    }
}
