<?php

namespace App\Controller\Admin;

use App\Entity\DataText;use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DataTextCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DataText::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('HomePres'),
            TextEditorField::new('TextPres'),
            TextField::new('homeValues'),
            TextField::new('tarifs_title'),
            TextEditorField::new('tarifs_text1'),
            TextField::new('avis_title'),
            TextEditorField::new('avis_text'),
            TextField::new('new_avis_title'),
            TextEditorField::new('new_avis_text'),
            TextField::new('rdv_title'),
            TextEditorField::new('rdv_text_un'),
        ];
    }
    
}
