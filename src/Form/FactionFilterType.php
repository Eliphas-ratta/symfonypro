<?php

namespace App\Form;

use App\Entity\Continent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('name', SearchType::class, [
                'required' => false,
                'label' => 'Search by name',
                'attr' => [
                    'placeholder' => 'Faction name',
                    'class' => 'form-control',
                ],
            ])
            ->add('continent', EntityType::class, [
                'class' => Continent::class,
                'choices' => $world->getWorldContinent(), // méthode que tu dois avoir dans World
                'required' => false,
                'placeholder' => 'Filter by Continent',
                'choice_label' => 'Name',
                'attr' => [
                    'class' => 'form-select',
                    'onchange' => 'this.form.submit()',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('world');
    }
}
