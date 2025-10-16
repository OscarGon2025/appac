<?php

namespace App\Service;

use App\Entity\{MembershipApplication, User, Membership};
use App\Enum\ApplicationStatus;
use Doctrine\ORM\EntityManagerInterface;

final class MembershipApprover
{
    public function __construct(private EntityManagerInterface $em) {}

    public function approve(MembershipApplication $app): void
    {
        if ($app->getStatus() === ApplicationStatus::APPROVED) return;

        $user = $this->em->getRepository(User::class)->findOneBy(['email' => $app->getEmail()]);
        if (!$user) {
            $user = (new User())->setEmail($app->getEmail())->setIsActive(true);
            $user->setRoles(array_unique([...$user->getRoles(), 'ROLE_MEMBER']));
            // TODO: opcional: generar token y enviar email de activación para fijar contraseña
            $this->em->persist($user);
        } else {
            $user->setRoles(array_unique([...$user->getRoles(), 'ROLE_MEMBER']));
        }


        $seasonEnd = new \DateTimeImmutable(date('Y-12-31'));
        $m = new Membership();
        $m->setUser($user);
        $m->setStartsAt(new \DateTimeImmutable('now'));
        $m->setEndsAt($seasonEnd);
        $m->setAmountCents($app->getAmountCents());
        $m->setProviderPaymentId($app->getProviderPaymentId());

        $app->setStatus(ApplicationStatus::APPROVED);

        $this->em->persist($m);
        $this->em->flush();
    }
}
