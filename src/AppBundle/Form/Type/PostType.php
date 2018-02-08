<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Blog\Category;
use AppBundle\Entity\Blog\Post;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',
                TextType::class,
                [
                    'label' => 'Nom :',
                    'required' => true
                ])
            ->add('description',
                TextareaType::class,
                [
                    'label' => 'Description :',
                    'required' => true
                ])
            ->add('active',
                ChoiceType::class,
                [
                    'label' => 'Activer :',
                    'choices' => [
                        'Oui' => true,
                        'Non' => false,
                    ]
                ])
            ->add('categories',
                EntityType::class,
                [
                    'label'        => 'Categories :',
                    'class'        => Category::class,
                    'choice_label' => 'name',
                    'multiple'     => true,
                    'expanded'     => true,
                    'required'     => true,
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class
        ]);
    }
}

