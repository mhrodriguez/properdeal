<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 4/14/16
 * Time: 11:05 p.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FooterController extends Controller
{
    public function showAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('footer/show.html.twig');
    }
}