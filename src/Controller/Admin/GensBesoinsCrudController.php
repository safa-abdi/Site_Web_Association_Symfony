<?php

namespace App\Controller\Admin;

use App\Entity\GensBesoins;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class GensBesoinsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GensBesoins::class;
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
