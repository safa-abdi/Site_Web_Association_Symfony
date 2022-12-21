<?php

namespace App\Controller\Admin;

use App\Entity\Clothes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ClothesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Clothes::class;
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
