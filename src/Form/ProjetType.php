<?php

namespace App\Form;

use App\Entity\Fournisseurs;
use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('listeServices')
            ->add('departement')
            ->add('listeServices')
            ->add('descriptionProjet')
            ->add('coutInterne')
            ->add('prixVent')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('commission')
            ->add('prixNegociation')
            ->add('marge')
            ->add('pourcentage')
            ->add('commentaire')
            ->add('FournisseurProjet')
            ->add('typeCollaboration',ChoiceType::class, [
                'choices' => [
                    'ONE SHOT' => 'ONE SHOT',
                    'CONTRAT' => 'CONTRAT',
                    ]
                ])
            ->add('dureeColaboration')
            ->add('echeanceDePayement')
           
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
