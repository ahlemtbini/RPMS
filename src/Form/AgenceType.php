<?php

namespace App\Form;

use App\Entity\AgenceDeCommunicationRp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Agence_de_communication')
            ->add('Representant')
            ->add('Fonction')
            ->add('telephone')
            ->add('mail')
            ->add('adresse')
            ->add('adress1')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AgenceDeCommunicationRp::class,
        ]);
    }
}
