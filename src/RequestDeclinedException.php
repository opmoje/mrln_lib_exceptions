<?php

namespace merlinface\Exceptions;

use Exception;
use Throwable;

class RequestDeclinedException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 1502, $previous);
    }
}