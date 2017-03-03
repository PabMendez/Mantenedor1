<?php

namespace ClienteBundle\Controller;

use ClienteBundle\Form\ClienteType;
use ClienteBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClienteController extends Controller
{
    public function listAction() {
        
        $em  = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository("ClienteBundle:Cliente")->findAll();
        
        return $this->render("ClienteBundle:Cliente:list.html.twig", array("cliente"=>$cliente));
    }
    
    public function addAction(Request $request)
    {
        // 1) build the form
        $cliente = new Cliente();
        $form = $this->createForm(ClienteType::class, $cliente);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            // 4) save the User!
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($cliente);
            $em->flush();
            
            $this->addFlash("mensaje", "El cliente fue creado con éxito");
            
            return $this->redirectToRoute('cliente_list', array("id"=>$cliente->getId()));
            
        }else{
            $this->addFlash("mensaje", "El Cliente no fue creado");
        }

        return $this->render("ClienteBundle:Cliente:add.html.twig", 
                array("form" => $form->createView())
        );
    }
    
    
    public function editAction(Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('ClienteBundle:Cliente')->find($id);
        
        $form = $this->createForm(ClienteType::class,$cliente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            
            $this->addFlash("mensaje", "El cliente fue actualizado con exito");
            
            return $this->redirectToRoute('cliente_list', array("id"=>$cliente->getId()));
        }
        
        
        return $this->render("ClienteBundle:Cliente:edit.html.twig",array(
		"form" => $form->createView()
	));
    }
    
    public function deleteAction($id){
        
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('ClienteBundle:Cliente')->find($id);
        
        
            $em->remove($cliente);
            $em->flush();
            
            $this->addFlash("mensaje", "El cliente fue borrado con exito");
        
        
        return $this->redirectToRoute('cliente_list');
    }
}