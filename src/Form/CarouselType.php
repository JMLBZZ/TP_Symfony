<?php

namespace App\Form;

use App\Entity\Carousel;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('imageFile', FileType::class,["label"=>"Image", "required"=>true])
        ->add('title', TextType::class,["label"=>"Titre"])
        ->add('text', CKEditorType::class,["label"=>"Image"])
        ->add('tag', ChoiceType::class,["label"=>"Tag", "choices"=>[
            "home"=>"home",
            "contact"=>"contact",
            "livre"=>'livre',
            "auteur"=>"auteur"
        ]])

        ->remove('imageName')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
