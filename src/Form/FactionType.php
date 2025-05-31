<?php

namespace App\Form;

use App\Entity\Continent;
use App\Entity\Faction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Doctrine\ORM\EntityRepository;

class FactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('Name', TextType::class)
            ->add('Type', TextType::class, [
                'required' => false,
            ])
            ->add('Regime', TextType::class, [
                'required' => false,
            ])
            ->add('Capital', TextType::class, [
                'required' => false,
            ])
            ->add('Couleur', TextType::class, [
                'required' => false,
            ])
            ->add('Description', TextareaType::class, [
                'required' => false,
            ])
            ->add('Image_Faction', FileType::class, [
                'label' => 'Faction Image (jpg, png, webp)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG, WEBP)',
                    ])
                ],
            ])
            ->add('FactionContinent', EntityType::class, [
                'class' => Continent::class,
                'label' => 'Continents',
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'query_builder' => function (EntityRepository $er) use ($world) {
                    return $er->createQueryBuilder('c')
                        ->where('c.Continent_World = :world')
                        ->setParameter('world', $world);
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Faction::class,
            'world' => null,
        ]);
    }
}
