<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, ['label' => 'Titre'])
            ->add('description', TextareaType::class, ['label' => 'Description'])
            ->add('type', ChoiceType::class, [
                'label'   => 'Type',
                'choices' => [
                    'Sortie'  => 'OUTING',
                    'Régate'  => 'REGATTA',
                    'Réunion' => 'MEETING',
                    'Autre'   => 'OTHER',
                ],
            ])
            ->add('startAt', DateTimeType::class, [
                'label'  => 'Début',
                'widget' => 'single_text',
                'html5'  => true,
                'required' => true,
            ])
            ->add('endAt', DateTimeType::class, [
                'label'  => 'Fin',
                'widget' => 'single_text',
                'html5'  => true,
                'required' => false,
            ])
            ->add('registrationOpen', CheckboxType::class, [
                'label'    => 'Inscriptions ouvertes',
                'required' => false,
            ])
            ->add('isMembersOnly', CheckboxType::class, [
                'label'    => 'Réservé aux membres',
                'required' => false,
            ])
            ->add('maxParticipants', IntegerType::class, [
                'label'    => 'Capacité',
                'required' => false,
            ])
            ->add('locationName', TextType::class, [
                'label'    => 'Lieu',
                'required' => false,
            ])
            ->add('lat', NumberType::class, [
                'label'       => 'Latitude',
                'required'    => false,
                'scale'       => 6,
                'html5'       => true,
                'attr'        => ['step' => '0.000001'],
            ])
            ->add('lng', NumberType::class, [
                'label'       => 'Longitude',
                'required'    => false,
                'scale'       => 6,
                'html5'       => true,
                'attr'        => ['step' => '0.000001'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
