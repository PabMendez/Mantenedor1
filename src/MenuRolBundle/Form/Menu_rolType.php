<?php

namespace MenuRolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class Menu_rolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('menuId', TextType::class, array('label'=>'Menu Id', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('rolId', TextType::class, array('label'=>'Rol Id', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('Guardar', SubmitType::class, array('label'=>'Guardar MenuRol', "attr" =>array(
				"class" => "botonsuelo"
			)))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MenuRolBundle\Entity\Menu_rol'
        ));
    }
}
