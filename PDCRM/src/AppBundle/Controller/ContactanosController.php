<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 6/8/16
 * Time: 12:46 p.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\ContactanosType;
use AppBundle\Entity\Contactanos;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;

/**
 * ContactoWebController controller.
 *
 * @Route("/contactanos")
 */
class ContactanosController extends Controller
{
    /**
     *
     *
     * @Route("/", name="contactanos_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        return $this->render('contactanos/index.html.twig',
            array()
        );
    }

    /**
     * Creates a new Contacto entity.
     *
     * @Route("/enviar", name="contactanos_enviar")
     * @Method({"GET", "POST"})
     */
    public function enviarAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $recaptcharesponse = $_POST["g-recaptcha-response"];
        }

        $contacto = new Contactanos();
        $form = $this->createForm('AppBundle\Form\ContactanosType', $contacto);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Validar Captcha
            $usuarioController = new UsuarioController();
            if (!$usuarioController->validarReCaptcha($recaptcharesponse))
            {
                $form->get('comentarios')->addError(new FormError('Falló la validación de reCaptcha.'));
            }
            else {

                // Enviar Mail
                $message = \Swift_Message::newInstance()
                    ->setSubject("Contacto recibido.")
                    ->setFrom("properdealmx@gmail.com")
                    ->setTo("dan_dm2@yahoo.com")
                    ->setBody(
                        $this->renderView(
                            'contactanos/mail_enviar.html.twig',
                            array('contacto' => $contacto)
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

                $response = new Response("<html><body><br><br><h4>Su información de contacto ha sido enviada. Pronto nos pondremos en contacto con usted.</h4></body></html>");

                return $response;
            }
        }

        return $this->render('contactanos/enviar.html.twig', array(
            'contacto' => $contacto,
            'form' => $form->createView(),
        ));
    }
}