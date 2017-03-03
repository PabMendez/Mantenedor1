<?php

namespace ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClienteType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut', TextType::class, array('label'=>'Rut', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('nombres', TextType::class, array('label'=>'Nombres', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('apellidop', TextType::class, array('label'=>'Apellido Paterno', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('apellidom', TextType::class, array('label'=>'Apellido Materno', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('direccion', TextType::class, array('label'=>'Direccion', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('email', EmailType::class, array('label'=>'Email', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('fono', TextType::class, array('label'=>'Telefono', "attr" =>array(
				"class" => "formularito"
			)))
                
            ->add('Guardar', SubmitType::class, array('label'=>'Guardar Cliente', "attr" =>array(
				"class" => "botonsuelo"
			)))
               
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ClienteBundle\Entity\Cliente'
        ));
    }
}
