<?php

namespace App\Form;

use App\Entity\Diplomatie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiplomatieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Pays')
            ->add('type')
            ->add('Representant')
            ->add('Fonction')
            ->add('Telephone')
            ->add('e_mail')
            ->add('Adresse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Diplomatie::class,
        ]);
    }
}
