<?php

namespace App\Controller;

use App\Entity\RendezVous;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeleteController extends AbstractController
{
    #[Route('/delete/{id}', name: 'delete_action')]
    public function delete($id, EntityManagerInterface $entityManager): Response
    {
        
        $record = $entityManager->getRepository(RendezVous::class)->find($id);

        if (!$record) {
            throw $this->createNotFoundException('Record not found');
        }

        $entityManager->remove($record);
        $entityManager->flush();

        $this->addFlash('success', 'Record deleted successfully');

        return $this->redirectToRoute('app_user');
    }
}

