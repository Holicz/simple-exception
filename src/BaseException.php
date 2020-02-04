<?php

declare(strict_types = 1);

namespace holicz\SimpleException;

use Throwable;

class BaseException extends \Exception
{
    private $context;

    public function __construct(ExceptionContext $context, ?Throwable $previous = null)
    {
        $this->context = $context;

        parent::__construct($this->getPublicMessage(), $this->getStatusCode(), $previous);
    }

    public function getContext(): ExceptionContext
    {
        return $this->context;
    }

    /**
     * @return string The message that can safely be displayed to end-users because it doesn't contain sensitive data
     */
    public function getPublicMessage(): string
    {
        return $this->context->getPublicMessage();
    }

    /**
     * @return string The full exception message that is logged and it can contain sensitive data
     */
    public function getDebugMessage(): ?String
    {
        return $this->context->getDebugMessage();
    }

    public function getParameters(): array
    {
        return $this->context->getParameters();
    }

    public function getStatusCode(): int
    {
        return $this->context->getStatusCode();
    }
}
