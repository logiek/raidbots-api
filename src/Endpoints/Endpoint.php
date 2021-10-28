<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

abstract class Endpoint
{
    protected const BASE_URL = 'raidbots.com';

    private GuzzleClient $guzzleClient;

    public function __construct()
    {
        $this->guzzleClient = new GuzzleClient();
    }

    /**
     * @throws GuzzleException
     */
    protected function getRequest(string $url, array $options = [], string $method = 'GET'): ResponseInterface
    {
        return $this->guzzleClient->request($method, $url, $options);
    }

    protected function sendResponse(ResponseInterface $response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
