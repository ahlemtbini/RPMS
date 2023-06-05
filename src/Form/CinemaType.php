<?php

namespace App\Form;

use App\Entity\CinemaEtCentreCuturel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CinemaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Enseigne')
            ->add('Contact')
            ->add('Fonction')
            ->add('Adresse')
            ->add('NumTel')
            ->add('Email')
            ->add('Commentaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CinemaEtCentreCuturel::class,
        ]);
    }
}
