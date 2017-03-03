<?php

namespace MenuRolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MenuRolBundle:Default:index.html.twig');
    }
}
