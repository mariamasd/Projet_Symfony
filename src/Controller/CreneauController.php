<?php

namespace App\Controller;

use App\Entity\Creneau;
use App\Form\CreneauType;
use App\Form\RendezVousType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreneauController extends AbstractController
{
    #[Route('/creneau', name: 'app_creneau')]
    public function creneau(HttpFoundationRequest $request, EntityManagerInterface $entityManager): Response
    {
        $creneau= new Creneau();
        $form = $this->createForm(CreneauType::class, $creneau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($creneau);
            $entityManager->flush();

            // Redirigez l'utilisateur après la soumission du formulaire
            return $this->redirectToRoute('admin');
        }

        // Si le formulaire n'est pas soumis ou n'est pas valide, affichez la page avec le formulaire
        return $this->render('creneau/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin', name: 'admin')]
public function dashboard(EntityManagerInterface $entityManager): Response
{
    // Récupérer les créneaux depuis la base de données
    $creneaux = $entityManager->getRepository(Creneau::class)->findAll();

    // Passer les créneaux au template
    return $this->render('admin/dashboard.html.twig', [
        'creneaux' => $creneaux,
    ]);
}
}
