<?php

namespace App\Controller\Admin;

use App\Entity\Electromenagers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ElectromenagersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Electromenagers::class;
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
