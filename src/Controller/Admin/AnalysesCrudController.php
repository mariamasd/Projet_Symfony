<?php

namespace App\Controller\Admin;

use App\Entity\Analyses;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AnalysesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Analyses::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud;
        
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
