<?php


namespace UWebPro\Vehicle\Exceptions;


use Throwable;

class OSException extends \Exception
{
    public function __construct($message = "PHP OS is not recognised", $code = 28, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}