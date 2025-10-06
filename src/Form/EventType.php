<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $typeChoices = \defined(Event::class.'::TYPES')
            ? array_combine(Event::TYPES, Event::TYPES)
            : [
                'Sortie' => 'OUTING',
                'Régate' => 'REGATTA',
                'Réunion' => 'MEETING',
            ];

        $statusChoices = \defined(Event::class.'::STATUSES')
            ? array_combine(Event::STATUSES, Event::STATUSES)
            : [
                'Brouillon' => 'DRAFT',
                'Publié'    => 'PUBLISHED',
                'Annulé'    => 'CANCELLED',
            ];

        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de l’événement',
                'attr'  => ['placeholder' => 'Ex. Sortie conviviale vers Pénestin'],
                'help'  => 'Un titre court et explicite.',
            ])

            ->add('description', TextareaType::class, [
                'label'    => 'Description',
                'required' => false,
                'attr'     => [
                    'rows'        => 5,
                    'placeholder' => 'Détails, matériel, conditions, etc.',
                ],
                'help'     => 'Quelques lignes suffisent (vous pourrez compléter plus tard).',
            ])

            ->add('type', ChoiceType::class, [
                'label'       => 'Type',
                'choices'     => $typeChoices,
                'placeholder' => '— Sélectionnez —',
                'help'        => 'Choisissez le type d’activité.',
            ])

            ->add('startAt', DateTimeType::class, [
                'label'        => 'Date de début',
                'widget'       => 'single_text',
                'with_seconds' => false,
                'html5'        => true,
                'help'         => 'Date et heure de début de l’événement.',
            ])

            ->add('endAt', DateTimeType::class, [
                'label'        => 'Date de fin',
                'required'     => false,
                'widget'       => 'single_text',
                'with_seconds' => false,
                'html5'        => true,
                'help'         => 'Optionnel si l’heure de fin n’est pas connue.',
            ])

            ->add('locationName', TextType::class, [
                'label'    => 'Lieu',
                'required' => false,
                'attr'     => ['placeholder' => 'Capitainerie d’Arzal-Camoël, cale, etc.'],
            ])

            ->add('maxParticipants', IntegerType::class, [
                'label'       => 'Nombre maximum de participants',
                'required'    => false,
                'empty_data'  => '', // para guardar NULL si se deja vacío
                'attr'        => ['min' => 0, 'placeholder' => 'Illimité'],
                'help'        => 'Déjelo vide para inscripciones ilimitadas.',
            ])

            ->add('registrationOpen', CheckboxType::class, [
                'label'    => 'Inscriptions ouvertes',
                'required' => false,
            ])

            ->add('isMembersOnly', CheckboxType::class, [
                'label'    => 'Réservé aux membres',
                'required' => false,
            ])

            ->add('status', ChoiceType::class, [
                'label'       => 'Statut',
                'choices'     => $statusChoices,
                'placeholder' => '— Sélectionnez —',
                'help'        => 'Laissez en brouillon tant que l’événement n’est pas finalisé.',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
