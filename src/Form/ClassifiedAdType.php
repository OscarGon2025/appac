<?php

namespace App\Form;

use App\Entity\ClassifiedAd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClassifiedAdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr'  => ['rows' => 6],
            ])
            ->add('price', MoneyType::class, [
                'label'    => 'Prix',
                'currency' => 'EUR',
                'required' => false,
                'divisor'  => 1, // si el campo price en la entidad es entero
            ])
            ->add('condition', ChoiceType::class, [
                'label'   => 'État',
                'choices' => [
                    'Neuf'          => 'NEW',
                    'Occasion'      => 'USED',
                    'Reconditionné' => 'REFURB',
                ],
                'placeholder' => '— Sélectionner —',
                'required'    => false,
            ])
            ->add('location', TextType::class, [
                'label'    => 'Localisation',
                'required' => false,
            ])

            ->add('photos', CollectionType::class, [
                'entry_type'    => PhotoType::class,
                'label'         => 'Photos',
                'required'      => false,
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'prototype'     => true,
                'prototype_name'=> '__name__',
                'entry_options' => [
                    'label' => false,
                ],
                'attr'          => ['class' => 'photos-collection'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ClassifiedAd::class,
        ]);
    }
}
