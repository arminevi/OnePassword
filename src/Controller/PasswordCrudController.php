<?php

namespace App\Controller;

use App\Entity\Password;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class PasswordCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Password::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $password = new Password();
        $password->setUid($this->getUser());

        return $password;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Passwort')
            ->setEntityLabelInPlural('Passwörter')
            ->setPageTitle('new', '%entity_label_singular% erstellen')
            ->setPageTitle('edit', '%entity_label_singular% bearbeiten')
            ->setSearchFields(['title'])
            ->setDefaultSort(['title' => 'ASC'])
            ->setPaginatorPageSize(15)
            ->setPaginatorRangeSize(2)
            ;
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            'title',
            'username',
            'email',
            'password',
            TextareaField::new('description')->hideOnIndex(),
        ];
    }
}
