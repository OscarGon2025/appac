<?php

namespace App\Service\HelloAsso;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use App\Entity\MembershipApplication; // adapta a tu namespace
use App\Enum\ApplicationStatus;       // PENDING_REVIEW, APPROVED, REJECTED...

final class HelloAssoWebhookHandler
{
    public function __construct(private EntityManagerInterface $em, private LoggerInterface $logger) {}

    public function handle(string $rawJson, ?string $signature = null): void
    {
        $data = json_decode($rawJson, true, 512, JSON_THROW_ON_ERROR);

        // TODO: validar $signature si activas firma
        // Normalizar info mínima:
        $eventType = $data['eventType'] ?? $data['type'] ?? 'unknown';
        $paymentId = $data['payment']['id'] ?? $data['id'] ?? null;
        $email     = $data['payer']['email'] ?? $data['user']['email'] ?? null;
        $amountCts = $data['amount']['value'] ?? $data['payment']['amount'] ?? null;
        $currency  = $data['amount']['currency'] ?? 'EUR';
        $paidOk    = ($data['status'] ?? $data['payment']['status'] ?? '') === 'Paid';

        if (!$paymentId || !$email) {
            $this->logger->warning('HA webhook incompleto', ['data' => $data]);
            return;
        }


        $repo = $this->em->getRepository(MembershipApplication::class);
        $existing = $repo->findOneBy(['provider' => 'HELLOASSO', 'providerPaymentId' => (string)$paymentId]);
        if ($existing) {
            return;
        }


        $app = $repo->findOneBy(['email' => $email, 'status' => ApplicationStatus::PENDING_REVIEW])
            ?? new MembershipApplication();

        $app->setEmail($email);
        $app->setProvider('HELLOASSO');
        $app->setProviderPaymentId((string)$paymentId);
        $app->setAmountCents((int)$amountCts);
        $app->setCurrency($currency);
        $app->setRawPayload($data);
        $app->setReceivedAt(new \DateTimeImmutable('now'));
        $app->setStatus($paidOk ? ApplicationStatus::PENDING_REVIEW : ApplicationStatus::ON_HOLD);

        $this->em->persist($app);
        $this->em->flush();
    }
}
