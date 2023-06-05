<?php

namespace App\Form;

use App\Entity\Contacts2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Contacts2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('COMMERCIAL')
            ->add('CLIENT')
            ->add('CONTACT')
            ->add('POSTE')
            ->add('NTEL')
            ->add('NPORTABLE')
            ->add('email')
            ->add('COMMENTAIRES')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts2::class,
        ]);
    }
}
