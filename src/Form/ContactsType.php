<?php

namespace App\Form;

use App\Entity\Contacts;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('COMMERCIAL')
            ->add('CLIENT')
            ->add('CONTACT')
            ->add('POSTE')
            ->add('NTEL')
            ->add('NPORTABLE')
            ->add('email')
            ->add('COMMENTAIRES')
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'RDV' => 'RDV',
                    'Relance' => 'Relance',
                    'Annuler' =>'Annuler',
                    'valider' => 'valider',
                    ]
                ])  
            ->add('date',TypeDateType::class,[
                'required'=>false,
                
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}
