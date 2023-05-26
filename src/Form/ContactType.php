<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' =>' ',
                'attr' => array('class' => 'field',
                                'placeholder' => 'Votre Nom',
                                )
            ])
            ->add('prenom', TextType::class, [
                'label' =>' ',
                'attr' => array('class' => 'field',
                                'placeholder' => 'Votre Prénom',
                                )])
            ->add('email', EmailType::class, [
                'label' =>' ',
                'attr' => array('class' =>'field',
                                'placeholder' => 'Votre E-mail')
            ])
            ->add('message', TextareaType::class, [
                'label' =>' ',
                'mapped' => 'false',
                'attr' => array('class' => 'field',
                                'placeholder' => 'Votre Message',
                                'rows' => 10,
                                )
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
        ]);
    }
}
