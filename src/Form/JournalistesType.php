<?php

namespace App\Form;

use App\Entity\JournalistesEtMedias;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JournalistesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Media')
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
            'data_class' => JournalistesEtMedias::class,
        ]);
    }
}
