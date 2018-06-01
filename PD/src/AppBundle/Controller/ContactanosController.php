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
            if (!$this->validarReCaptcha($recaptcharesponse))
            {
                $form->get('comentarios')->addError(new FormError('Falló la validación de reCaptcha.'));
            }
            else {

                // Enviar Mail
                $message = \Swift_Message::newInstance()
                    ->setSubject("Contacto recibido.")
                    ->setFrom("properdealmx@gmail.com")
                    ->setTo("systemas@gmail.com")
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


    /**
     * Creates a new Contacto entity.
     *
     * @Route("/enviarmovil", name="contactanos_enviarmovil")
     * @Method({"GET"})
     */
    public function enviarmovilAction(Request $request)
    {
        $nombre = $request->query->get('nombre');
        $mail = $request->query->get('mail');
        $mensaje = $request->query->get('mensaje');
        $telefono = $request->query->get('telefono');

        $contacto = new Contactanos();
        $contacto->setNombre($nombre);
        $contacto->setEmail($mail);
        $contacto->setComentarios($mensaje);
        $contacto->setTelefono($telefono);

        // Enviar Mail
        $message = \Swift_Message::newInstance()
                    ->setSubject("Contacto recibido.")
                    ->setFrom("properdealmx@gmail.com")
                    ->setTo("jcarvajal@properdeal.mx") //systemas@gmail.com
                    ->setBody(
                        $this->renderView(
                            'contactanos/mail_enviarmovil.html.twig',
                            array('contacto' => $contacto)
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);

        return new Response('[{"resultado": "' . "true" . '"}]');
    }

    public function validarReCaptcha($recaptcharesponse)
    {
        // return true; Para DEBUG y eliminar uso del Captcha

        //extract data from the post
        //set POST variables
        //   6Lf1AyITAAAAAPreNaveCBjyHHKNiTJD7SHkM-g3
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $fields = array(
            'secret' => urlencode('6LcXzAwUAAAAAO8l1S1cD_G7-QX061O8rJEMmIFA'),
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