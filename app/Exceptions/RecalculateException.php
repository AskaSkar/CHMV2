<?php

namespace App\Exceptions;

class RecalculateException extends \Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
