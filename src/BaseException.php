<?php

declare(strict_types = 1);

namespace holicz\SimpleException;

use Exception;
use Throwable;

class BaseException extends Exception
{
    private ExceptionContext $context;

    public function __construct(ExceptionContext $context, ?Throwable $previous = null)
    {
        $this->context = $context;

        parent::__construct($this->getDebugMessage(), $this->getStatusCode(), $previous);
    }

    /**
     * @return string The message that should be displayed to users because it shouldn't contain sensitive debug data
     */
    public function getPublicMessage(): string
    {
        return $this->context->getPublicMessage();
    }

    /**
     * @return string The full exception message that should be logged and can contain sensitive data
     */
    public function getDebugMessage(): string
    {
        return $this->context->getDebugMessage();
    }

    public function getStatusCode(): int
    {
        return $this->context->getStatusCode();
    }
}
