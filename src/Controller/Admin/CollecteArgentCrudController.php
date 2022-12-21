<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use App\Entity\CollecteArgent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CollecteArgentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CollecteArgent::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Sender'),
            IntegerField::new('Montant'),
            DateTimeField::new('Date'),
            TextField::new('type'),

        ];
    }
    /*
    CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
            ])
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
