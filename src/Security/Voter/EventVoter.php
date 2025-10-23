<?php

namespace App\Security\Voter;

use App\Entity\Event;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class EventVoter extends Voter
{
    public const EDIT = 'EVENT_EDIT';

    protected function supports(string $attribute, $subject): bool
    {
        return $attribute === self::EDIT && $subject instanceof Event;
    }

    protected function voteOnAttribute(string $attribute, $event, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user || !method_exists($user, 'getUserIdentifier')) return false;

        // Admin siempre puede
        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) return true;

        // Solo el propietario
        return $event->getCreatedBy() === $user;
    }
}
