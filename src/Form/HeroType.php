<?php

namespace App\Form;

use App\Entity\Hero;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class HeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', TextType::class, [
                'label' => 'Hero Name'
            ])
            ->add('Fonction', TextType::class, [
                'label' => 'Profession',
                'required' => false
            ])
            ->add('Age', TextType::class, [
                'label' => 'Age',
                'required' => false
            ])
            ->add('Size', TextType::class, [
                'label' => 'Size'
            ])
            ->add('Description', TextareaType::class, [
                'label' => 'Description',
                'required' => false
            ])
            ->add('Image_Hero', FileType::class, [
                'label' => 'Image (JPG, PNG)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '3M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPG, PNG, or WEBP)',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hero::class,
        ]);
    }
}
