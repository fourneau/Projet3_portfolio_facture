<?php

namespace App\Controller\Admin;

use App\Entity\UploadBackground;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UploadBackgroundCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UploadBackground::class;
    }
    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    }
    public function configureFields(string $pageName): iterable
    {
        $fields = [];

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL) {
            array_push($fields, ImageField::new('upload', 'Image')->setBasePath('uploads/'));
        } else {
            array_push($fields, TextField::new('imageUpload')
            ->setFormType(VichImageType::class));
        }
        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        
        ->add(Crud::PAGE_NEW, Action::INDEX)
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
            return $actions->setLabel('Créer Fond d\'écran');
        });
        
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Fond d\'écran')
        ->setPageTitle('edit', 'Fond d\'écran')
        ->setPageTitle('new', 'Fond d\'écran')
        ;
    }
}

