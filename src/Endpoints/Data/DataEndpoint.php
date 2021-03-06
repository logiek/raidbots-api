<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

use GuzzleHttp\Exception\GuzzleException;
use Logiek\Raidbots\Endpoints\Endpoint;
use Logiek\Raidbots\Exceptions\InvalidVersionException;
use Psr\Http\Message\ResponseInterface;

abstract class DataEndpoint extends Endpoint
{
    private const DEFAULT_VERSION = 'live';

    /**
     * @throws InvalidVersionException
     */
    public function get(string $version = self::DEFAULT_VERSION): array
    {
        $response = $this->getData($this->getDataKey(), $version);

        return $this->sendResponse($response);
    }

    abstract protected function getDataKey(): string;

    /**
     * @throws InvalidVersionException
     */
    private function getData(string $key, string $version): ResponseInterface
    {
        $url = self::BASE_URL . "/static/data/{$version}/{$key}.json";

        try {
            $response = $this->getRequest($url);
        } catch (GuzzleException) {
            throw new InvalidVersionException();
        }

        return $response;
    }
}
