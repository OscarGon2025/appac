<?php
namespace App\Service\HelloAsso;

use GuzzleHttp\Client;

final class HelloAssoApi
{
    public function __construct(
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

        $http = new Client(['base_uri' => 'https://api.helloasso.com/']);
        $res = $http->post('oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ],
        ]);
        $data = json_decode((string) $res->getBody(), true);
        return $this->accessToken = $data['access_token'];
    }

    public function searchPayments(string $email): array
    {
        $http = new Client(['base_uri' => 'https://api.helloasso.com/v5/']);
        $res = $http->get(sprintf('organizations/%s/payments/search', $this->organizationSlug), [
            'headers' => ['Authorization' => 'Bearer '.$this->getAccessToken()],
            'query' => ['query' => $email, 'pageSize' => 10],
        ]);
        return json_decode((string) $res->getBody(), true);
    }
}
