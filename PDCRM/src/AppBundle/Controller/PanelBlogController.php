<?php
/**
 * Created by PhpStorm.
 * User: davatar
 * Date: 5/23/16
 * Time: 12:24 a.m.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelBlogController extends Controller
{
    /**
     * @Route("/panel_blog", name="panel_blog")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('panel_blog/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}