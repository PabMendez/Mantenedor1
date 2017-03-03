<?php

namespace RolBundle\Controller;

use RolBundle\Form\RolType;
use RolBundle\Entity\Rol;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RolController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $rol = $em->getRepository("RolBundle:Rol")->findAll();
        
        return $this->render("RolBundle:Rol:list.html.twig", array("rol"=>$rol));
    }

    public function addAction(Request $request)
    {
         // 1) build the form
        $rol = new Rol();
        $form = $this->createForm(RolType::class, $rol);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($rol);
            $em->flush();
            
            $this->addFlash("mensaje", "El rol fue creado con éxito");
            
            return $this->redirectToRoute('rol_list', array("id"=>$rol->getId()));
            
        }else{
            $this->addFlash("mensaje", "El rol no fue creado");
        }

        return $this->render("RolBundle:Rol:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('RolBundle:Rol')->find($id);
        
        $form = $this->createForm(RolType::class,$rol);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El rol fue actualizado con exito");
            
            return $this->redirectToRoute('rol_list', array("id"=>$rol->getId()));
        }
        return $this->render("RolBundle:Rol:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('RolBundle:Rol')->find($id);
        
        
            $em->remove($rol);
            $em->flush();
            
            $this->addFlash("mensaje", "El rol fue borrado con exito");
        
        
        return $this->redirectToRoute('rol_list');
    }
}