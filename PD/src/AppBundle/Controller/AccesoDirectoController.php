<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccesoDirectoController extends Controller
{
    public function showAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('barra_accesosdirectos/show.html.twig');
    }

    public function showvAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('barra_accesosdirectos/showv.html.twig');
    }
}