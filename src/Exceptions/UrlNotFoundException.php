<?php

namespace JobMetric\Url\Exceptions;

use Exception;
use Throwable;

class UrlNotFoundException extends Exception
{
    public function __construct(int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct('Url not found', $code, $previous);
    }
}
