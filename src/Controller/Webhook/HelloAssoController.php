<?php

namespace App\Controller\Webhook;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\HelloAsso\HelloAssoWebhookHandler;

final class HelloAssoController
{
    public function __construct(private HelloAssoWebhookHandler $handler) {}

    #[Route('/webhook/helloasso', name: 'webhook_helloasso', methods: ['POST'])]
    public function __invoke(Request $request): Response
    {
        $payload = $request->getContent();
        $sig = $request->headers->get('X-HA-Signature');

        try {
            $this->handler->handle($payload, $sig);
        } catch (\Throwable $e) {
            return new Response('nok', 400);
        }
        return new Response('ok', 200);
    }
}
