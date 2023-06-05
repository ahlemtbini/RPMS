<?php

namespace App\Form;

use App\Entity\HotelerieEtHebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HoteleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('maison_d_hotes')
            ->add('Type')
            ->add('Adresse')
            ->add('Commune_Arrondissement')
            ->add('Num_Tel')
            ->add('E_mail')
            ->add('Nom')
            ->add('Fonction')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HotelerieEtHebergement::class,
        ]);
    }
}
