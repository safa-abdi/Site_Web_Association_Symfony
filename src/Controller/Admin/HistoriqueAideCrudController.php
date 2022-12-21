<?php

namespace App\Controller\Admin;

use App\Entity\HistoriqueAide;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HistoriqueAideCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HistoriqueAide::class;
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
