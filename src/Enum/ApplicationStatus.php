<?php

namespace App\Enum;

enum ApplicationStatus: string
{
    case PENDING  = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case ON_HOLD  = 'ON_HOLD';

    public function label(): string
    {
        return match ($this) {
            self::PENDING  => 'En attente',
            self::APPROVED => 'Approuvée',
            self::REJECTED => 'Refusée',
            self::ON_HOLD  => 'En pause',
        };
    }

    public function badge(): string
    {
        return match ($this) {
            self::PENDING  => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
            self::ON_HOLD  => 'secondary',
        };
    }
}
