<?php

namespace App\Form;

use App\Entity\Race;
use App\Entity\Domain;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class RaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('Name', TextType::class)
            ->add('Description', TextareaType::class, [
                'required' => false,
            ])
            ->add('Image_Race', FileType::class, [
                'label' => 'Race Image (jpg, png, webp)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Upload a valid image file (JPEG/PNG/WEBP)',
                    ])
                ],
            ])
            ->add('Race_Domain', EntityType::class, [
                'class' => Domain::class,
                'choice_label' => 'Name',
                'multiple' => true,
                'expanded' => false, // ✅ Dropdown instead of checkboxes
                'label' => 'Domains',
                'required' => false,
                'query_builder' => fn(EntityRepository $repo) => $repo->createQueryBuilder('d')
                    ->where('d.Domain_World = :world')
                    ->setParameter('world', $world),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Race::class,
            'world' => null,
        ]);
    }
}
