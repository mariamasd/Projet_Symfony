<?php
namespace App\Controller;

use App\Entity\Analyses;
use App\Entity\Creneau;
use App\Form\AnalysesType;
use App\Form\CreneauType;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class SecretaireController extends AbstractDashboardController
{
    #[IsGranted('ROLE_ADMIN')] 
    #[Route('/admin', name: 'admin')]
    public function register(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        dump($this->getUser()->getRoles());

        // Make sure the user is authenticated
        if (!$this->getUser()) {
            throw $this->createAccessDeniedException('This user does not have access to the admin dashboard.');
        }
        $creneau = new Creneau();
        $form = $this->createForm(CreneauType::class, $creneau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($creneau);
            $entityManager->flush();
        }
        $analyses = new Analyses();
        $form1 = $this->createForm(AnalysesType::class, $analyses);
        $form1->handleRequest($request);

        if ($form1->isSubmitted() && $form1->isValid()) {
            $entityManager->persist($analyses);
            $entityManager->flush();
        }

        return $this->render('user/secretaire.html.twig', [
            'user' => $this->getUser(),
            'form' => $form->createView(),
            'form1' => $form1->createView(),
        ]);
        // return parent::index();
        

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }
 // ...


    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        // Ajoute un lien vers le formulaire de créneau
        yield MenuItem::linkToCrud('Créer un Créneau', 'fa fa-calendar', Creneau::class)
            ->setController(CreneauController::class);

        // Ajoute un lien vers la liste des créneaux
        yield MenuItem::linkToCrud('Liste des Créneaux', 'fa fa-list', Creneau::class)
            ->setController(CreneauController::class)
            ->setAction('index'); // L'action 'index' correspond généralement à la liste des enregistrements
    }

    //  public function configureFields(string $pageName): iterable
    //     {
    //         // Récupérer les données depuis la base de données
    //         $creneaux = $this->getDoctrine()->getRepository(Creneau::class)->findAll();
    
    //         // Construire les champs à afficher
    //         $fields = [
    //             // Ajoutez d'autres champs si nécessaire
    //             TextField::new('id', 'Identifiant'),
    //             DateField::new('date', 'Date'),
    //             TimeField::new('heure', 'Heure'),
    //             // Ajoutez d'autres champs si nécessaire
    //         ];
    
    //         // Mettez à jour les données des champs avec les données de la base de données
    //         foreach ($fields as $field) {
    //             $fieldPropertyName = $field->getProperty();
    //             $field->setTemplatePath('admin/dashboard.html.twig')
    //                   ->setCustomOption('data', $creneaux[0]->{$fieldPropertyName}); // Utilisez la première entrée à titre d'exemple
    //         }
    
    //         return $fields;
    //     }
    
        public function yourAction(EntityManagerInterface $entityManager): Response
        {
            // Récupérer les données depuis la base de données
            $creneaux = $entityManager->getRepository(Creneau::class)->findAll();
            dump($creneaux);
    $controller="bonjours";
            // Rendre le template avec les données
            return $this->render('admin/dashboard.html.twig',[
                'donnees' => $creneaux,
                'salut' => $controller
                
            ]);
        }
       
    }

    

