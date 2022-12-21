<?php

namespace App\Controller\Admin;

use App\Entity\CollecteNourriture;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CollecteNourritureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CollecteNourriture::class;
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
