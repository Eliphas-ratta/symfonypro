<?php

namespace App\Form;

use App\Entity\Guild;
use App\Entity\Hero;
use App\Entity\Faction;
use App\Entity\Continent;
use App\Entity\Visibility;
use App\Repository\HeroRepository;
use App\Repository\FactionRepository;
use App\Repository\ContinentRepository;
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
        $world = $options['world']; // 👈 Monde passé depuis le contrôleur

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
                'query_builder' => function (FactionRepository $repo) use ($world) {
                    return $repo->createQueryBuilder('f')
                        ->where('f.Faction_World = :world')
                        ->setParameter('world', $world);
                },
                'choice_attr' => function ($faction) {
                    return [
                        'data-image' => $faction->getImageFaction(),
                    ];
                },
            ])
            ->add('Guild_Continent', EntityType::class, [
                'class' => Continent::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Continents',
                'query_builder' => function (ContinentRepository $repo) use ($world) {
                    return $repo->createQueryBuilder('c')
                        ->where('c.Continent_World = :world')
                        ->setParameter('world', $world);
                },
                'choice_attr' => function ($continent) {
                    return [
                        'data-image' => $continent->getImageContinent(),
                    ];
                },
            ])
            ->add('heroes', EntityType::class, [
                'class' => Hero::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Héros associés',
                'query_builder' => function (HeroRepository $repo) use ($world) {
                    return $repo->createQueryBuilder('h')
                        ->where('h.Hero_World = :world')
                        ->setParameter('world', $world);
                },
                'choice_attr' => function ($hero) {
                    return [
                        'data-image' => $hero->getImageHero(),
                    ];
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Guild::class,
            'world' => null, // 👈 Ajout obligatoire pour passer le monde
        ]);
    }
}
