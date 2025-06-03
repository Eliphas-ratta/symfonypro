<?php

namespace App\Form;

use App\Entity\Race;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DomainFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $races = $options['races'] ?? [];

        $builder
            ->add('name', SearchType::class, [
                'required' => false,
                'label' => 'Search by name',
                'attr' => [
                    'placeholder' => 'Domain name',
                ]
            ])
            ->add('races', EntityType::class, [
                'class' => Race::class,
                'choices' => $races,
                'required' => false,
                'multiple' => false, // ✅ Mono sélection
                'expanded' => false,
                'label' => 'Filter by Race',
                'choice_label' => 'Name',
                'placeholder' => 'Choose a race',
                'attr' => [
                    'onchange' => 'this.form.submit()'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired(['world', 'races']);
    }
}
