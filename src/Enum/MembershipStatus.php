<?php
declare(strict_types=1);

namespace App\Enum;

enum MembershipStatus: string
{
    case ACTIVE    = 'ACTIVE';
    case EXPIRED   = 'EXPIRED';
    case CANCELLED = 'CANCELLED';
    case PENDING   = 'PENDING';

    // --- UI helpers ---------------------------------------------------------

    /** FR: Libellé lisible pour l'UI. */
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE    => 'Actif',
            self::EXPIRED   => 'Expiré',
            self::CANCELLED => 'Annulé',
            self::PENDING   => 'En attente',
        };
    }

    /** FR: Classe de badge Bootstrap correspondant au statut. */
    public function badge(): string
    {
        return match ($this) {
            self::ACTIVE    => 'success',
            self::EXPIRED   => 'secondary',
            self::CANCELLED => 'danger',
            self::PENDING   => 'warning',
        };
    }

    // --- Business helpers ---------------------------------------------------

    /** FR: Statut final (plus de transition attendue) ? */
    public function isFinal(): bool
    {
        return match ($this) {
            self::CANCELLED, self::EXPIRED => true,
            self::ACTIVE, self::PENDING    => false,
        };
    }

    /** FR: La cotisation donne accès membre ? */
    public function isActive(): bool
    {
        return $this === self::ACTIVE;
    }

    // --- Static utils -------------------------------------------------------

    /**
     * FR: Normalise une valeur hétérogène (enum|string|null) vers l'enum.
     * - Insensible à la casse.
     * - Retourne null si valeur inconnue (ex: "PAID" venant d'un paiement).
     */
    public static function tryFromMixed(self|string|null $value): ?self
    {
        if ($value instanceof self) {
            return $value;
        }
        if ($value === null) {
            return null;
        }

        return match (strtoupper($value)) {
            'ACTIVE'    => self::ACTIVE,
            'EXPIRED'   => self::EXPIRED,
            'CANCELLED' => self::CANCELLED,
            'PENDING'   => self::PENDING,
            default     => null, // évite ValueError ("PAID" etc.)
        };
    }

    /** FR: Liste de choix prête pour EasyAdmin (label => case). */
    public static function choices(): array
    {
        $out = [];
        foreach (self::cases() as $case) {
            $out[$case->label()] = $case;
        }
        return $out;
    }
}
