<?php 
namespace App\Form;

use App\Entity\Domain;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CapacityFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $world = $options['world'];

        $builder
            ->add('name', SearchType::class, [
                'required' => false,
                'label' => false,
                'attr' => ['placeholder' => 'Capacity name']
            ])
            ->add('domains', EntityType::class, [
                'class' => Domain::class,
                'choices' => $world->getWorldDomain(),
                'required' => false,
                'multiple' => false,
                'expanded' => false,
                'choice_label' => 'Name',
                'placeholder' => 'Filter by Domain',
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('world');
    }
}
