<?php

namespace App\Form;

use App\Entity\Faction;
use App\Entity\Guild;
use App\Entity\Race;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HeroFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('name', SearchType::class, [
                'required' => false,
                'label' => 'Search by name',
                'attr' => ['placeholder' => 'Hero name']
            ])
            ->add('factions', EntityType::class, [
    'class' => Faction::class,
    'choices' => $world->getWorldFaction(),
    'multiple' => false,  
    'required' => false,
    'label' => 'Trier par Faction',
    'choice_label' => 'Name',
    'placeholder' => 'Filter by Faction',
])
->add('guilds', EntityType::class, [
    'class' => Guild::class,
    'choices' => $world->getWorldGuild(),
    'multiple' => false,
    'required' => false,
    'label' => 'Trier par Guilde',
    'choice_label' => 'Name',
    'placeholder' => 'Filter by Guild',
])
->add('races', EntityType::class, [
    'class' => Race::class,
    'choices' => $world->getWorldRace(),
    'multiple' => false,
    'required' => false,
    'label' => 'Trier par Race',
    'choice_label' => 'Name',
    'placeholder' => 'Filter by Race',
])

;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('world');
    }
}
