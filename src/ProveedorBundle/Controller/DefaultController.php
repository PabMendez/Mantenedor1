<?php

namespace ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProveedorBundle:Default:index.html.twig');
    }
}
