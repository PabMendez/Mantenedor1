<?php

namespace UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class UsuarioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('rol', EntityType::class, array(
                    'class' => 'RolBundle:Rol', "attr" => array(
                        "class" => "formularito"
            )
                ))
                ->add('rut', TextType::class, array('label' => 'Rut', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('nombres', TextType::class, array('label' => 'Nombres', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('apellidoP', TextType::class, array('label' => 'Apellido Paterno', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('apellidoM', TextType::class, array('label' => 'Apellido Materno', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('username', TextType::class, array('label' => 'UserName', "attr" => array(
                        "class" => "formularito", "autocomplete" => "off"
            )))
                ->add('password', PasswordType::class, array('label' => 'Password', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('email', EmailType::class, array('label' => 'Email', "attr" => array(
                        "class" => "formularito"
            )))
                ->add('Guardar', SubmitType::class, array('label' => 'Guardar Usuario', "attr" => array(
                        "class" => "botonsuelo"
            )))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'UsuarioBundle\Entity\Usuario'
        ));
    }

    public function getName() {
        return 'usuario';
    }

}
