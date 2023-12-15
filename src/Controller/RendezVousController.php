<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RendezVousController extends AbstractController
{
    #[Route('/rendezVous', name: 'app_rendez_vous')]
    public function rendezVous(Request $request, EntityManagerInterface $entityManager): Response
    {
        $rv = new RendezVous();
        $form = $this->createForm(RendezVousType::class, $rv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rv);
            $entityManager->flush();

            // Redirigez l'utilisateur après la soumission du formulaire
            return $this->redirectToRoute('app_user');
        }

        // Si le formulaire n'est pas soumis ou n'est pas valide, affichez la page avec le formulaire
        return $this->render('rendez_vous/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
