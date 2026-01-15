<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Photo;
use App\Enum\MediaVisibility;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', VichImageType::class, [
                'label' => 'Photo (JPG, PNG, WEBP - max 128Mo)',
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false,
                'image_uri' => false,
                'attr' => [
                    'accept' => 'image/jpeg,image/png,image/webp',
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '128M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Formats acceptés : JPG, PNG ou WEBP uniquement et la taille maximum du fichier est de 128mo.',
                    ]),
                ],
            ])

            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => false,
                'attr' => ['placeholder' => 'Titre de la photo'],
            ])

            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 3, 'placeholder' => 'Description ou légende'],
            ])

            ->add('visibility', ChoiceType::class, [
                'label' => 'Visibilité',
                'choices' => [
                    'Publique' => MediaVisibility::PUBLIC,
                    'Réservée aux membres' => MediaVisibility::MEMBERS,
                ],
                'expanded' => true, // boutons radio
            ])

            ->add('album', EntityType::class, [
                'class' => Album::class,
                'choice_label' => 'title',
                'label' => 'Sélectionnez un album (optionnel) :',
                'placeholder' => 'Aucun album',
                'required' => false,
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Photo::class,
        ]);
    }
}
