<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Exceptions;

use Exception;
use Throwable;

class InvalidVersionException extends Exception implements RaidbotsException
{
    public function __construct($message = 'The given version doesn\'t exist.', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
