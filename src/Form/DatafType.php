<?php

namespace App\Form;

use App\Entity\DataFournisseursBrut;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatafType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Enseigne')
            ->add('Rubrique')
            ->add('type')
            ->add('Gerant')
            ->add('Adresse')
            ->add('Commune_Arrondissement')
            ->add('Num_tel')
            ->add('Email')
            ->add('Lien_reseaux_sociaux_web')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DataFournisseursBrut::class,
        ]);
    }
}
