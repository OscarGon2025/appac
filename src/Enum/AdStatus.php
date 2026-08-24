<?php // src/Enum/AdStatus.php
namespace App\Enum;

enum AdStatus: string
{
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case ARCHIVED = 'ARCHIVED';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'En attente',
            self::APPROVED => 'Approuvée',
            self::REJECTED => 'Refusée',
            self::ARCHIVED => 'Archivée',
        };
    }

    public function badge(): string
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
            self::ARCHIVED => 'secondary',
        };
    }
}
