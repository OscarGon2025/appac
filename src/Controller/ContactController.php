<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\RateLimiter\RateLimiterFactory;

class ContactController extends AbstractController
{
    public function contact(Request $request, RateLimiterFactory $contactFormLimiter): Response
    {
        $limiter = $contactFormLimiter->create($request->getClientIp());

        if (false === $limiter->consume(1)->isAccepted()) {
            $this->addFlash('error', 'Vous avez envoyé trop de messages, réessayez plus tard.');

            return $this->redirectToRoute('app_home');
        }
        return new Response('Message envoyé !');
    }
}
