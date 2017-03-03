<?php

namespace ProveedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ProveedorType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres', TextType::class, array('label'=>'Nombres', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('apellidoP', TextType::class, array('label'=>'Apellido Paterno', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('apellidoM', TextType::class, array('label'=>'Apellido Materno', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('rut', TextType::class, array('label'=>'Rut', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('razonSocial', TextType::class, array('label'=>'Razon Social', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('email', EmailType::class, array('label'=>'Email', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('fono', TextType::class, array('label'=>'Telefono', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('Guardar', SubmitType::class, array('label'=>'Guardar Proveedor', "attr" =>array(
				"class" => "botonsuelo"
			)))
        ;
    }

    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProveedorBundle\Entity\Proveedor'
        ));
    }
}
