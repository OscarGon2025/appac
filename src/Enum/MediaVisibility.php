<?php

namespace App\Enum;

enum MediaVisibility: string
{
    case PUBLIC = 'PUBLIC';
    case MEMBERS = 'MEMBERS';

    public function label(): string
    {
        return match ($this) {
            self::PUBLIC => 'Public',
            self::MEMBERS => 'Membres',
        };
    }
}
