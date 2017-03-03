<?php

namespace UsuarioBundle\Controller;

use UsuarioBundle\Form\UsuarioType;
use UsuarioBundle\Entity\Usuario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository("UsuarioBundle:Usuario")->findAll();
        
        return $this->render("UsuarioBundle:Usuario:list.html.twig", array("usuario"=>$usuario));
    }
    
    public function addAction(Request $request)
    {
        // 1) build the form
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($usuario);
            $em->flush();
            
            $this->addFlash("mensaje", "El usuario fue creado con éxito");
            
            return $this->redirectToRoute('usuario_list', array("id"=>$usuario->getId()));
            
        }else{
            $this->addFlash("mensaje", "El Usuario no fue creado");
        }

        return $this->render("UsuarioBundle:Usuario:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);
        
        $form = $this->createForm(UsuarioType::class,$usuario);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El usuario fue actualizado con exito");
            
            return $this->redirectToRoute('usuario_list', array("id"=>$usuario->getId()));
        }
        
        
        return $this->render("UsuarioBundle:Usuario:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuarioBundle:Usuario')->find($id);
        
        
            $em->remove($usuario);
            $em->flush();
            
            $this->addFlash("mensaje", "El usuario fue borrado con exito");
        
        
        return $this->redirectToRoute('usuario_list');
    }
}