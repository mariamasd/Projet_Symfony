<?php

namespace App\Controller;

use App\Entity\Analyses;
use App\Form\AnalysesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnalysesController extends AbstractController
{
    #[Route('/analyses', name: 'app_analyses')]
    public function analyse(HttpFoundationRequest $request, EntityManagerInterface $entityManager): Response
    {
        $analyse= new Analyses();
        $form = $this->createForm(AnalysesType::class, $analyse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($analyse);
            $entityManager->flush();

            // Redirigez l'utilisateur après la soumission du formulaire
            return $this->redirectToRoute('admin');
        }
        return $this->render('analyses/index.html.twig', [
           'form'=>$form
        ]);
    }
}
