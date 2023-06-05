<?php

namespace App\Form;

use App\Entity\TextileEtHabillement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TextileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Enseigne')
            ->add('Type')
            ->add('Createur')
            ->add('E_mail')
            ->add('Numero')
            ->add('Adresse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TextileEtHabillement::class,
        ]);
    }
}
