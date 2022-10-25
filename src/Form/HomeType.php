<?php

namespace App\Form;

use App\Entity\Home;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class HomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isActive', CheckboxType::class, [
                "label"=>"Activer la page ?", 
                "row_attr"=>["class"=>"form-switch"]])
            ->add('titre', TextType::class, [
                "help"=>"Titre du post", 
                "help_attr"=>["class"=>"text-info"], 
                "label"=>"Titre du post", 
                "required"=>true])
            ->add('texte', CKEditorType::class, [
                "help"=>"", 
                "help_attr"=>["class"=>"text-info"], 
                "label"=>"Texte du post", 
                "required"=>true])
            ->add('signature', TextType::class, [
                "help"=>"", 
                "help_attr"=>["class"=>"text-info"], 
                "label"=>"Signature", 
                "required"=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Home::class,
        ]);
    }
}
