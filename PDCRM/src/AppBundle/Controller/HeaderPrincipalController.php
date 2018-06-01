<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/16/16
 * Time: 12:06 a.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HeaderPrincipalController extends Controller
{
    public function showAction(Request $request)
    {
        $usuario = $authuser = $this->get('security.context')->getToken()->getUser();

        // replace this example code with whatever you need
        return $this->render('header_principal/show.html.twig',
            array(
                'webPathFoto' => $usuario->getWebPathFoto(),
            )
        );
    }
}
