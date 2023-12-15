<?php

namespace App\Controller;

use App\Entity\RendezVous;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{
    
    #[Route('/user', name: 'app_user')]
    public function index(UserInterface $user,EntityManagerInterface $entityManager): Response
    {
        $rendezVousList = $entityManager->getRepository(RendezVous::class)->findAll();
        return $this->render('user/index.html.twig', [
            'user' => $user,
            'donnees'=>$rendezVousList,
        ]);
    }
}
