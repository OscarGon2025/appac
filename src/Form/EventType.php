<?php

// namespace App\Form;
//
// use App\Entity\Event;
// use App\Entity\User;
// use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\FormBuilderInterface;
// use Symfony\Component\OptionsResolver\OptionsResolver;
//
// class EventType extends AbstractType
// {
//    public function buildForm(FormBuilderInterface $builder, array $options): void
//    {
//        $builder
//            ->add('title')
//            ->add('slug')
//            ->add('description')
//            ->add('type')
//            ->add('registrationOpen')
//            ->add('isMembersOnly')
//            ->add('startAt', null, [
//                'widget' => 'single_text',
//            ])
//            ->add('endAt', null, [
//                'widget' => 'single_text',
//            ])
//            ->add('locationName')
//            ->add('lat')
//            ->add('lng')
//            ->add('maxParticipants')
//            ->add('status')
//            ->add('createdAt', null, [
//                'widget' => 'single_text',
//            ])
//            ->add('updatedAt', null, [
//                'widget' => 'single_text',
//            ])
//            ->add('createdBy', EntityType::class, [
//                'class' => User::class,
//                'choice_label' => 'id',
//            ])
//        ;
//    }
//
//    public function configureOptions(OptionsResolver $resolver): void
//    {
//        $resolver->setDefaults([
//            'data_class' => Event::class,
//        ]);
//    }
// }

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de l’événement',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => array_combine(Event::TYPES, Event::TYPES),
            ])
            ->add('startAt', DateTimeType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
            ])
            ->add('endAt', DateTimeType::class, [
                'label' => 'Date de fin',
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('locationName', TextType::class, [
                'label' => 'Lieu',
                'required' => false,
            ])
            ->add('maxParticipants', null, [
                'label' => 'Nombre maximum de participants',
                'required' => false,
            ])
            ->add('registrationOpen', CheckboxType::class, [
                'label' => 'Inscriptions ouvertes',
                'required' => false,
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => array_combine(Event::STATUSES, Event::STATUSES),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
