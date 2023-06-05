<?php

namespace App\Form;

use App\Entity\DataBaseRpms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataRPMSType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('AgencesDeCommunication')
            ->add('Representant')
            ->add('Fonction')
            ->add('telephone')
            ->add('mail')
            ->add('adresse')
            ->add('adresse2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DataBaseRpms::class,
        ]);
    }
}
