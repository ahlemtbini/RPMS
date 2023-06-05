<?php

namespace App\Form;

use App\Entity\DataBaseLm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataLmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Enseigne')
            ->add('Type')
            ->add('Gerant')
            ->add('Adresse')
            ->add('Commune_Arrondissement')
            ->add('Num_Tel')
            ->add('Email')
            ->add('Commentaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DataBaseLm::class,
        ]);
    }
}
