<?php
namespace App\Service\HelloAsso;

use Symfony\Contracts\HttpClient\HttpClientInterface;

final class HelloAssoApi
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $clientId,
        private string $clientSecret,
        private string $organizationSlug
    ) {}

    private ?string $accessToken = null;

    private function getAccessToken(): string
    {
        if ($this->accessToken) {
            return $this->accessToken;
        }

        $res = $this->httpClient->request('POST', 'https://api.helloasso.com/oauth2/token', [
            'body' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
        ]);
        $data = $res->toArray();

        return $this->accessToken = $data['access_token'];
    }

    public function searchPayments(string $email): array
    {
        $res = $this->httpClient->request(
            'GET',
            sprintf('https://api.helloasso.com/v5/organizations/%s/payments/search', $this->organizationSlug),
            [
                'auth_bearer' => $this->getAccessToken(),
                'query' => ['query' => $email, 'pageSize' => 10],
            ]
        );

        return $res->toArray();
    }
}
