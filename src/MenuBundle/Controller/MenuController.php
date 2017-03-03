<?php

namespace MenuBundle\Controller;

use MenuBundle\Form\MenuType;
use MenuBundle\Entity\Menu;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MenuController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $menu = $em->getRepository("MenuBundle:Menu")->findAll();
        
        return $this->render("MenuBundle:Menu:list.html.twig", array("menu"=>$menu));
    }

    public function addAction(Request $request)
    {
         // 1) build the form
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($menu);
            $em->flush();
            
            $this->addFlash("mensaje", "El menu fue creado con éxito");
            
            return $this->redirectToRoute('menu_list', array("id"=>$menu->getId()));
            
        }else{
            $this->addFlash("mensaje", "El menu no fue creado");
        }

        return $this->render("MenuBundle:Menu:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('MenuBundle:Menu')->find($id);
        
        $form = $this->createForm(MenuType::class,$menu);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El menu fue actualizado con exito");
            
            return $this->redirectToRoute('menu_list', array("id"=>$menu->getId()));
        }
        return $this->render("MenuBundle:Menu:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('MenuBundle:Menu')->find($id);
        
        
            $em->remove($menu);
            $em->flush();
            
            $this->addFlash("mensaje", "El menu fue borrado con exito");
        
        
        return $this->redirectToRoute('menu_list');
    }
}