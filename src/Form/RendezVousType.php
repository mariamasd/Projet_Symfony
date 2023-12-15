<?php

namespace App\Form;

use App\Entity\Analyses;
use App\Entity\Creneau;
use App\Entity\Patient;
use App\Entity\RendezVous;
use App\Repository\AnalysesRepository;
use App\Repository\CreneauRepository;
use App\Repository\PatientRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousType extends AbstractType
{
   
    private CreneauRepository $creneauRepository;
    private AnalysesRepository $analysesRepository;
    private PatientRepository $patientRepository;

    public function __construct(CreneauRepository $creneauRepository, AnalysesRepository $analysesRepository, PatientRepository $patientRepository)
    {
        $this->creneauRepository = $creneauRepository;
        $this->analysesRepository = $analysesRepository;
        $this->patientRepository = $patientRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $creneaux = $this->creneauRepository->findAll();
        $analyses = $this->analysesRepository->findAll();
        $patients = $this->patientRepository->findAll();
    
        $builder
            ->add('creneau', EntityType::class, [
                'class' => Creneau::class,
                'choices' => $creneaux,
                'choice_label' => function ($creneau) {
                    return $creneau->getDate()->format('Y-m-d');
                },
                'label' => 'Choisissez une date',
            ])
            ->add('motif')
            // ->add('patient', EntityType::class, [
            //     'class' => Patient::class,
            //     'choices' => $patients,
            //     'choice_label' => function ($patient) {
            //         return $patient->getPrenom() . ' ' . $patient->getNom();
            //     },
            // ])
            ->add('analyses', EntityType::class, [
                'class' => Analyses::class,
                'choices' => $analyses,
                'choice_label' => 'nom',
                'label' => 'Choisissez votre analyse',
                'multiple' => false,
                'expanded' => false,
            ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
