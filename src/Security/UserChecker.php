<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof \App\Entity\User) {
            return;
        }

        if (!$user->isApproved()) {
            throw new CustomUserMessageAuthenticationException('Votre compte doit être validé par un administrateur avant de vous connecter.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Rien ici pour l’instant
    }
}
