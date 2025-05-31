<?php

namespace App\Form;

use App\Entity\Hero;
use App\Entity\Guild;
use App\Entity\Faction;
use App\Entity\Race;
use App\Entity\City;
use App\Entity\Domain;
use App\Repository\GuildRepository;
use App\Repository\FactionRepository;
use App\Repository\RaceRepository;
use App\Repository\CityRepository;
use App\Repository\DomainRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;

class HeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('Name', TextType::class, ['label' => 'Hero Name'])
            ->add('Fonction', TextType::class, ['label' => 'Profession', 'required' => false])
            ->add('Age', TextType::class, ['label' => 'Age', 'required' => false])
            ->add('Size', TextType::class, ['label' => 'Size'])
            ->add('Description', TextareaType::class, ['label' => 'Description', 'required' => false])
            ->add('Image_Hero', FileType::class, [
                'label' => 'Image (JPG, PNG, WEBP)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '3M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPG, PNG, or WEBP)',
                    ])
                ],
            ])
            ->add('guilds', EntityType::class, [
                'class' => Guild::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Guilds',
                'required' => false,
                'query_builder' => fn(GuildRepository $repo) => $repo->createQueryBuilder('g')
                    ->where(':world MEMBER OF g.Guild_World')
                    ->setParameter('world', $world),
                'choice_attr' => fn($guild) => ['data-image' => $guild->getImageGuild()],
            ])
            ->add('HeroFaction', EntityType::class, [
                'class' => Faction::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Factions',
                'required' => false,
                'query_builder' => fn(FactionRepository $repo) => $repo->createQueryBuilder('f')
                    ->where('f.Faction_World = :world')
                    ->setParameter('world', $world),
                'choice_attr' => fn($faction) => ['data-image' => $faction->getImageFaction()],
            ])
            ->add('HeroRace', EntityType::class, [
                'class' => Race::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Races',
                'required' => false,
                'query_builder' => fn(RaceRepository $repo) => $repo->createQueryBuilder('r')
                    ->where('r.Race_World = :world')
                    ->setParameter('world', $world),
                'choice_attr' => fn($race) => ['data-image' => $race->getImageRace()],
            ])
            ->add('HeroCity', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Cities',
                'required' => false,
                'query_builder' => fn(CityRepository $repo) => $repo->createQueryBuilder('c')
                    ->where('c.City_World = :world')
                    ->setParameter('world', $world),
                'choice_attr' => fn($city) => ['data-image' => $city->getImageCity()],
            ])
            ->add('HeroDomain', EntityType::class, [
                'class' => Domain::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => true,
                'label' => 'Domains',
                'required' => false,
                'query_builder' => fn(DomainRepository $repo) => $repo->createQueryBuilder('d')
                    ->where('d.Domain_World = :world')
                    ->setParameter('world', $world),
                'choice_attr' => fn($domain) => ['data-image' => $domain->getImageDomain()],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hero::class,
            'world' => null,
        ]);
    }
}
