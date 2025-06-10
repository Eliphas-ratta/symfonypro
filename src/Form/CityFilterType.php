<?php

namespace App\Form;

use App\Entity\Faction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CityFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('name', SearchType::class, [
                'required' => false,
                'label' => 'Search by name',
                'attr' => ['placeholder' => 'City name']
            ])
            ->add('factions', EntityType::class, [
                'class' => Faction::class,
                'choices' => $world->getWorldFaction(),
                'multiple' => false,
                'required' => false,
                'label' => 'Filter by Faction',
                'choice_label' => 'Name',
                'placeholder' => 'All factions',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('world');
    }
}

