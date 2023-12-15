<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EditController extends AbstractController
{
#[Route('/edit/{id}', name: 'edit_action')]
    public function edit(Request $request, $id,EntityManagerInterface $entityManager): Response
    {
        // $entityManager = $this->$getDoctrine()->getManager();
        $record = $entityManager->getRepository(RendezVous::class)->find($id);

        if (!$record) {
            throw $this->createNotFoundException('Record not found');
        }

        $form = $this->createForm(RendezVousType::class, $record);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Record updated successfully');

            return $this->redirectToRoute('app_user');
        }

        return $this->render('edit/index.html.twig', [
            'form' => $form->createView(),
            'record' => $record,
        ]);
    }
}
    
