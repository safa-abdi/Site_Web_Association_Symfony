<?php

namespace App\Controller\Admin;

use App\Entity\TrasportPartage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TrasportPartageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TrasportPartage::class;
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
