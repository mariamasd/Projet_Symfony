<?php

namespace App\Form;

use App\Entity\Analyses;
use App\Entity\Patient;
use App\Entity\Secretaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnalysesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Numération globulaire complète (NGC)' => 'Numération globulaire complète (NGC)',
                    'Dosage de l\'hémoglobine' => 'Dosage de l\'hémoglobine',
                    'Analyse des plaquettes' => 'Analyse des plaquettes',
                    'Formule leucocytaire' => 'Formule leucocytaire',
                    'Glucose sanguin' => 'Glucose sanguin',
                    'Cholestérol total' => 'Cholestérol total',
                    'Triglycérides' => 'Triglycérides',
                    'Fonction rénale (urée, créatinine)' => 'Fonction rénale (urée, créatinine)',
                    'Fonction hépatique (transaminases, bilirubine)' => 'Fonction hépatique (transaminases, bilirubine)',
                    'Hormone thyroïdienne (TSH, T3, T4)' => 'Hormone thyroïdienne (TSH, T3, T4)',
                    'Hormone de croissance' => 'Hormone de croissance',
                    'Hormones sexuelles (testostérone, œstradiol)' => 'Hormones sexuelles (testostérone, œstradiol)',
                    'Culture bactérienne' => 'Culture bactérienne',
                    'Test d\'urine' => 'Test d\'urine',
                    'Test de sensibilité aux antibiotiques' => 'Test de sensibilité aux antibiotiques',
                    'Numération des lymphocytes' => 'Numération des lymphocytes',
                    'Tests d\'allergie' => 'Tests d\'allergie',
                    'Dosage des anticorps' => 'Dosage des anticorps',
                    'Temps de prothrombine (TP)' => 'Temps de prothrombine (TP)',
                    'Temps de thromboplastine partielle activée (TTPA)' => 'Temps de thromboplastine partielle activée (TTPA)',
                    'Tests de dépistage des maladies infectieuses (VIH, hépatites, syphilis)' => 'Tests de dépistage des maladies infectieuses (VIH, hépatites, syphilis)',
                    'Sodium' => 'Sodium',
                    'Potassium' => 'Potassium',
                    'Chlorure' => 'Chlorure',
                    'Frottis cervico-utérin (dépistage du cancer du col de l\'utérus)' => 'Frottis cervico-utérin (dépistage du cancer du col de l\'utérus)',
                    'Tests génétiques préventifs ou diagnostiques' => 'Tests génétiques préventifs ou diagnostiques',
                ],
                'placeholder' => 'Sélectionnez le type d\'analyse',
                // Ajoutez d'autres options si nécessaire
            ]);
//             ->add('patient', EntityType::class, [
//                 'class' => Patient::class,
// 'choice_label' => 'id',
// 'multiple' => true,
//             ])
//             ->add('secretaire', EntityType::class, [
//                 'class' => Secretaire::class,
// 'choice_label' => 'id',
// 'multiple' => true,
//             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Analyses::class,
        ]);
    }
}
