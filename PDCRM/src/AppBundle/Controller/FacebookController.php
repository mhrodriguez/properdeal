<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 8/5/16
 * Time: 12:17 a.m.
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormError;
use Facebook\Facebook;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Mensaje controller.
 *
 * @Route("/facebook")
 */
class FacebookController extends Controller
{
    /**
     * Lists all Mensaje entities.
     *
     * @Route("/publicar", name="facebook_publicar")
     * @Method("GET")
     */
    public function publicarAction(Request $request)
    {
       $error=false;
       require_once __DIR__ . '/../../../vendor/facebookphpsdk/FacebookBundle/autoload.php';

       $url = $request->query->get('url');

       // 1. Obtener usuario actual
       $authuser= $this->get('security.context')->getToken()->getUser();

       $fb = new Facebook([
            'app_id' => '317047301963315',
            'app_secret' => 'ad416d51316d5e6e51f876b5c5abd453',
            'default_graph_version' => 'v2.2',
        ]);

        $linkData = [
            'link' => $url,
            'message' => 'Propiedad compartida (Test).'
        ];

        try
        {
            if ($authuser->getFacebookToken() != null) {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->post('/me/feed', $linkData, $authuser->getFacebookToken());
                $graphNode = $response->getGraphNode();
                //echo 'Posted with id: ' . $graphNode['id'];
            }
            else
            {
                $error=true;
            }
        }
        catch(Facebook\Exceptions\FacebookResponseException $e)
        {
            $error = true;
        }
        catch(Facebook\Exceptions\FacebookSDKException $e) {

            $error = true;
        }

        if ($error)
        {
            return new Response('<h5>Ha ocurrido un error al publicar propiedad. En Mi Perfil haga clic en la opción LOGIN FACEBOOK para configurar la cuenta para publicar.</h5>');
        }
        else
        {
            return new Response('<h2>Propiedad publicada exitósamente.</h2>');
        }
    }

    /**
     * Lists all Mensaje entities.
     *
     * @Route("/login", name="facebook_login")
     * @Method("GET")
     */
    public function loginAction(Request $request)
    {
        $error=false;
        require_once __DIR__ . '/../../../vendor/facebookphpsdk/FacebookBundle/autoload.php';

        $fb = new Facebook([
            'app_id' => '317047301963315',
            'app_secret' => 'ad416d51316d5e6e51f876b5c5abd453',
            'default_graph_version' => 'v2.2',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        $url = 'http://104.236.50.14' . $this->generateUrl(
                'facebook_token',
                array()
            );

        $permissions = ['email', 'publish_actions'];
        $loginUrl = $helper->getLoginUrl($url, $permissions);

        $response = new RedirectResponse($loginUrl);
        $response->send();
    }

    /**
     * Lists all Mensaje entities.
     *
     * @Route("/token", name="facebook_token")
     * @Method("GET")
     */
    public function tokenAction(Request $request)
    {
        require_once __DIR__ . '/../../../vendor/facebookphpsdk/FacebookBundle/autoload.php';
        $error=false;

        $fb = new Facebook([
            'app_id' => '317047301963315',
            'app_secret' => 'ad416d51316d5e6e51f876b5c5abd453',
            'default_graph_version' => 'v2.2',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        }
        catch(Facebook\Exceptions\FacebookResponseException $e)
        {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            $error=true;
        }
        catch(Facebook\Exceptions\FacebookSDKException $e)
        {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            $error=true;
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            $error=true;
        }

        $oAuth2Client = $fb->getOAuth2Client();
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('317047301963315'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        //$tokenMetadata->validateUserId('123');
        $tokenMetadata->validateExpiration();

        if (! $accessToken->isLongLived()) {
            // Exchanges a short-lived access token for a long-lived one
            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            }
            catch (Facebook\Exceptions\FacebookSDKException $e)
            {
                echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                $error=true;
            }
        }

        if ($error)
        {
            return new Response('<script>alert("Ha ocurrido un error en la configuración."); window.close();</script>');
        }
        else
        {
            $token = (string) $accessToken;

            $authuser= $this->get('security.context')->getToken()->getUser();

            $em = $this->getDoctrine()->getManager();

            $authuser->setFacebookToken($token);
            $em->persist($authuser);
            $em->flush();

            return new Response('<script>alert("La configuración ha sido exitosa."); window.close();</script>');
        }

    }

}