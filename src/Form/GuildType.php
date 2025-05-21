<?php

namespace App\Form;

use App\Entity\Guild;
use App\Entity\Hero;
use App\Entity\Faction;
use App\Entity\Continent;
use App\Entity\Visibility;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GuildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name')
            ->add('Type')
            ->add('Description', TextareaType::class, ['required' => false])
            ->add('Image_Guild', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
            ])
            ->add('Visibility_id', EntityType::class, [
                'class' => Visibility::class,
                'choice_label' => 'Visibility',
                'label' => 'Visibility',
                'required' => true,
            ])
            ->add('Guild_Faction', EntityType::class, [
                'class' => Faction::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Factions',
                'choice_attr' => function ($faction) {
                    return [
                        'data-image' => $faction->getImageFaction(), // ✅ méthode correcte
                    ];
                },
            ])
            ->add('Guild_Continent', EntityType::class, [
                'class' => Continent::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Continents',
                'choice_attr' => function ($continent) {
                    return [
                        'data-image' => $continent->getImageContinent(), // ✅ méthode correcte
                    ];
                },
            ])
            ->add('heroes', EntityType::class, [
                'class' => Hero::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Héros associés',
                'choice_attr' => function ($hero) {
                    return [
                        'data-image' => $hero->getImageHero(), // ✅ méthode correcte
                    ];
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Guild::class,
        ]);
    }
}
