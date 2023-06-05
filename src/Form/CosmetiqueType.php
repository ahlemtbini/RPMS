<?php

namespace App\Form;

use App\Entity\CosmetiqueEtParfum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CosmetiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Enseigne')
            ->add('Type')
            ->add('Gerant')
            ->add('Adresse')
            ->add('Num_Tel')
            ->add('E_mail')
            ->add('Commentaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CosmetiqueEtParfum::class,
        ]);
    }
}
