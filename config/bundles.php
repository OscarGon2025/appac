<?php

return [
    // Core
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],


    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],

    // Dev only
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true],

    // Dev + Test
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],

    // Templating / Front
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\UX\StimulusBundle\StimulusBundle::class => ['all' => true],
    Symfony\UX\Turbo\TurboBundle::class => ['all' => true],
    Symfony\UX\TwigComponent\TwigComponentBundle::class => ['all' => true],

    // Admin
    EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle::class => ['all' => true],

    // UX Map
    Symfony\UX\Map\UXMapBundle::class => ['all' => true],

    // Media / Uploads
    Liip\ImagineBundle\LiipImagineBundle::class => ['all' => true],
    Vich\UploaderBundle\VichUploaderBundle::class => ['all' => true],

    // Doctrine extensions
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],

    // Recaptcha
    Karser\Recaptcha3Bundle\KarserRecaptcha3Bundle::class => ['all' => true],
];
