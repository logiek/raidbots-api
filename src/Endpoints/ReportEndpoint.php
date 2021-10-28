<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints;

use GuzzleHttp\Exception\GuzzleException;
use Logiek\Raidbots\Exceptions\InvalidReportException;
use Logiek\Raidbots\Exceptions\InvalidUrlException;

class ReportEndpoint extends Endpoint
{
    /**
     * @throws InvalidUrlException|InvalidReportException
     */
    public function get(string $report, bool $fullUrl = false): array
    {
        if ($fullUrl) {
            if (!str_contains($report, self::BASE_URL)) {
                throw new InvalidUrlException();
            }
        } else {
            $report = self::BASE_URL . "/reports/{$report}";
        }

        $url = $report . '/data.json';

        try {
            $response = $this->getRequest($url);
        } catch (GuzzleException) {
            throw new InvalidReportException();
        }

        return $this->sendResponse($response);
    }
}
