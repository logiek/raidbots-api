<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Exceptions;

use Exception;
use Throwable;

class InvalidReportException extends Exception implements RaidbotsException
{
    public function __construct($message = 'The given report doesn\'t exist or has been removed.', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
