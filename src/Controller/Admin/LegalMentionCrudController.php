<?php

namespace App\Controller\Admin;

use App\Entity\LegalMention;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LegalMentionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalMention::class;
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    } 

    public function configureFields(string $pageName): iterable
    {
        return [
            
            FormField::addPanel('Mention Legales'),
            TextField::new('name', 'Nom'),
            TextEditorField::new('description', 'decription')->hideOnIndex(),
           
            
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Mentions Légales')
        ->setPageTitle('edit', 'Mentions  Légales')
        ->setPageTitle('new', 'Mentions Légales')
        ->setPageTitle('detail', 'Mentions Légales')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE)
        ->remove(Crud::PAGE_DETAIL, Action::EDIT)
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
            return $actions->setLabel('Créer Mentions Légales');
        });
        
    }
}
