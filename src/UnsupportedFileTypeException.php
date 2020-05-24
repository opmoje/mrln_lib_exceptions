<?php


namespace merlinface\Exceptions;

use Exception;
use Throwable;

class UnsupportedFileTypeException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 1100, $previous);
    }
}