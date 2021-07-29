<?php

namespace App\Controller\Admin;

use App\Entity\BillingMethod;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class BillingMethodCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BillingMethod::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            BooleanField::new('subscription', 'Abonnement'),
            BooleanField::new('timeSpent', 'Temps passé'),
        ];
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    } 

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Methode  de facturation')
        ->setPageTitle('edit', 'Methode  de facturation')
        ->setPageTitle('new', 'Methode  de facturation')
        ->setPageTitle('detail', 'Methode  de facturation')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->remove(Crud::PAGE_INDEX, Action::DELETE)
        ->add(Crud::PAGE_NEW, Action::INDEX)
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
            return $actions->setLabel('Créer Méthode de facturation');
        })
        ->remove(Crud::PAGE_INDEX, Action::EDIT);
        
    }
}
