<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 3/17/16
 * Time: 6:04 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MenuPrincipalController extends Controller
{
    public function showAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('menu_principal/show.html.twig');
    }
}