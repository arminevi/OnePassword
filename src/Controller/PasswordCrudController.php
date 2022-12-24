<?php

namespace App\Controller;

use App\Entity\Password;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PasswordCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Password::class;
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
