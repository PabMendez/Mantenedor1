<?php

namespace MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MenuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array('label'=>'Nombres', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('ruta', TextType::class, array('label'=>'Ruta', "attr" =>array(
				"class" => "formularito"
			)))
            ->add('listar', CheckboxType::class, array(
                'label'    => 'listar',
                'required' => false,
            ))
            ->add('agregar', CheckboxType::class, array(
                'label'    => 'agregar',
                'required' => false,
            ))
            ->add('editar', CheckboxType::class, array(
                'label'    => 'editar',
                'required' => false,
            ))
            ->add('eliminar', CheckboxType::class, array(
                'label'    => 'eliminar',
                'required' => false,
            ))
            ->add('Guardar', SubmitType::class, array('label'=>'Guardar Menu', "attr" =>array(
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
            'data_class' => 'MenuBundle\Entity\Menu'
        ));
    }
}
