<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Exceptions;

use Exception;
use Throwable;

class InvalidUrlException extends Exception implements RaidbotsException
{
    public function __construct($message = 'The given url isn\'t a valid Raidbots url.', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
