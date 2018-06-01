<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HeaderController extends Controller
{
    public function showAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('header/show.html.twig');
    }
}
