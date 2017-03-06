<?php

namespace MenuRolBundle\Controller;

use MenuRolBundle\Form\Menu_rolType;
use MenuRolBundle\Entity\Menu_rol;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MenuRolController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository("MenuRolBundle:Menu_rol")->findAll();
        
        return $this->render("MenuRolBundle:MenuRol:list.html.twig", array("menuRol"=>$menuRol));
    }

    public function addAction(Request $request)
    {
         // 1) build the form
        $menuRol = new Menu_rol();
        $form = $this->createForm(Menu_rolType::class, $menuRol);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($menuRol);
            $em->flush();
            
            $this->addFlash("mensaje", "El menuRol fue creado con éxito");
            
            return $this->redirectToRoute('menuRol_list', array("id"=>$menuRol->getId()));
            
        }else{
            $this->addFlash("mensaje", "El menuRol no fue creado");
        }

        return $this->render("MenuRolBundle:MenuRol:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MenuRolBundle:Menu_rol')->find($id);
        
        $form = $this->createForm(Menu_rolType::class,$menuRol);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El menuRol fue actualizado con exito");
            
            return $this->redirectToRoute('menuRol_list', array("id"=>$menuRol->getId()));
        }
        return $this->render("MenuRolBundle:MenuRol:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MenuRolBundle:Menu_rol')->find($id);
        
        
            $em->remove($menuRol);
            $em->flush();
            
            $this->addFlash("mensaje", "El menuRol fue borrado con exito");
        
        
        return $this->redirectToRoute('menuRol_list');
    }
}