<?php // src/Enum/AnnouncementFrequency.php

namespace App\Enum;

enum AnnouncementFrequency: string
{
    case ALWAYS = 'ALWAYS';                 // à chaque chargement de page
    case ONCE_PER_SESSION = 'ONCE_PER_SESSION'; // une fois par visite (onglet/navigateur ouvert)
    case ONCE_PER_DAY = 'ONCE_PER_DAY';     // une fois par jour
    case ONCE_EVER = 'ONCE_EVER';           // une seule fois (jusqu'à ce que l'annonce change)

    public function label(): string
    {
        return match ($this) {
            self::ALWAYS => 'À chaque page',
            self::ONCE_PER_SESSION => 'Une fois par visite',
            self::ONCE_PER_DAY => 'Une fois par jour',
            self::ONCE_EVER => 'Une seule fois',
        };
    }
}
