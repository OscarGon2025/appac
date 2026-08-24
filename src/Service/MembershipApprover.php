<?php

namespace App\Service;

use App\Entity\{MembershipApplication, User, Membership};
use App\Enum\ApplicationStatus;
use App\Enum\MembershipStatus;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class MembershipApprover
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $passwordHasher,
    ) {}

    public function approve(MembershipApplication $app): void
    {
        if ($app->getStatus() === ApplicationStatus::APPROVED) return;

        $user = $this->em->getRepository(User::class)->findOneBy(['email' => $app->getEmail()]);
        if (!$user) {
            $user = (new User())->setEmail($app->getEmail())->setIsApproved(true);
            $user->setFirstName($app->getFirstName());
            $user->setLastName($app->getLastName());
            $user->setPhone($app->getPhone());
            // Mot de passe temporaire aléatoire: le champ ne peut pas être vide en base.
            // TODO: opcional: generar token y enviar email de activación para fijar contraseña
            $user->setPassword($this->passwordHasher->hashPassword($user, bin2hex(random_bytes(16))));
            $user->setRoles(array_unique([...$user->getRoles(), 'ROLE_MEMBER']));
            $this->em->persist($user);
        } else {
            $user->setRoles(array_unique([...$user->getRoles(), 'ROLE_MEMBER']));
        }


        $year = $app->getTargetYear() ?: (int) date('Y');

        $m = new Membership();
        $m->setUser($user);
        $m->setYear($year);
        $m->setStatus(MembershipStatus::ACTIVE);
        $m->setPaidAt($app->getReceivedAt() ?? new \DateTimeImmutable('now'));
        $m->setHelloAssoRef($app->getProviderPaymentId());

        $app->setStatus(ApplicationStatus::APPROVED);

        $this->em->persist($m);
        $this->em->flush();
    }
}
