<?php

namespace ProveedorBundle\Controller;

use ProveedorBundle\Form\ProveedorType;
use ProveedorBundle\Entity\Proveedor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProveedorController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository("ProveedorBundle:Proveedor")->findAll();
        
        return $this->render("ProveedorBundle:Proveedor:list.html.twig", array("proveedor"=>$proveedor));
    }

    public function addAction(Request $request)
    {
         // 1) build the form
        $proveedor = new Proveedor();
        $form = $this->createForm(ProveedorType::class, $proveedor);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($proveedor);
            $em->flush();
            
            $this->addFlash("mensaje", "El proveedor fue creado con éxito");
            
            return $this->redirectToRoute('proveedor_list', array("id"=>$proveedor->getId()));
            
        }else{
            $this->addFlash("mensaje", "El proveedor no fue creado");
        }

        return $this->render("ProveedorBundle:Proveedor:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository('ProveedorBundle:Proveedor')->find($id);
        
        $form = $this->createForm(ProveedorType::class,$proveedor);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El proveedor fue actualizado con exito");
            
            return $this->redirectToRoute('proveedor_list', array("id"=>$proveedor->getId()));
        }
        return $this->render("ProveedorBundle:Proveedor:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository('ProveedorBundle:Proveedor')->find($id);
        
        
            $em->remove($proveedor);
            $em->flush();
            
            $this->addFlash("mensaje", "El proveedor fue borrado con exito");
        
        
        return $this->redirectToRoute('proveedor_list');
    }
}