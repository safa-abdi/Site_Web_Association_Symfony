<?php

namespace App\Controller\Admin;

use App\Entity\Reclamation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReclamationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reclamation::class;
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
