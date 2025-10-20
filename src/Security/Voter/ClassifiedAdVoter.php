<?php

namespace App\Security\Voter;

use App\Entity\ClassifiedAd;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

final class ClassifiedAdVoter extends Voter
{
    public const EDIT   = 'AD_EDIT';
    public const DELETE = 'AD_DELETE';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::DELETE], true)
            && $subject instanceof ClassifiedAd;
    }

    protected function voteOnAttribute(string $attribute, mixed $ad, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!is_object($user)) {
            return false;
        }

        // Admin siempre puede
        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return true;
        }

        // Debe tener método getOwner() y comparar
        if (!method_exists($ad, 'getOwner')) {
            return false;
        }

        return $ad->getOwner() === $user;
    }
}
