<?php

namespace App\Form;

use App\Entity\Divertissement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DivertissementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Entreprise')
            ->add('Personne')
            ->add('Fonction')
            ->add('Numero')
            ->add('Email')
            ->add('Adresse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Divertissement::class,
        ]);
    }
}
