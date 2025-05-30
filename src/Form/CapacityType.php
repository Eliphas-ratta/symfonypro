<?php

namespace App\Form;

use App\Entity\Capacity;
use App\Entity\Domain;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class CapacityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'] ?? null;

        $builder
            ->add('Name', TextType::class)
            ->add('Type', TextType::class, ['required' => false])
            ->add('Description', TextareaType::class, ['required' => false])
            ->add('Image_Capacity', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
            ])
            ->add('Domain', EntityType::class, [
                'class' => Domain::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'query_builder' => function (EntityRepository $er) use ($world) {
                    return $er->createQueryBuilder('d')
                        ->where('d.Domain_World = :world')
                        ->setParameter('world', $world);
                },
                'choice_attr' => function ($domain) {
                    return [
                        'data-image' => $domain->getImageDomain(), // si applicable
                    ];
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Capacity::class,
            'world' => null, // 👈 on autorise l'option "world"
        ]);
    }
}
