<?php

namespace UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UsuarioBundle\Entity\Usuario;
use MenuBundle\Entity\Menu;
use RolBundle\Entity\Rol;
use MenuRolBundle\Entity\Menu_rol;
use Symfony\Component\HttpFoundation\Session\Session;

class MenuController extends Controller
{
    public function indexAction()
    {
        return $this->render('MenuBundle:Menu:index.html.twig');
    }
    
    public function listAction()
    {
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MenuRolBundle:Menu_rol')->findBy(array("rol" => $session->get('usuarioRolID')));
        return $this->render('UsuarioBundle:Menu:list.html.twig', array(
            'usuarioNombre' => $session->get('usuarioNombre'),
            'usuarioRol' => $session->get('usuarioRolNombre'),
            'menuRol'=>$menuRol));
    }



}
