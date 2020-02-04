<?php

declare(strict_types = 1);

namespace holicz\SimpleException;

class ExceptionContext
{
    private $publicMessage;
    private $debugMessage;
    private $parameters;
    private $statusCode;
    private $trace;

    public function __construct(string $publicMessage, ?string $debugMessage = null, array $parameters = [], int $statusCode = 500, array $trace = [])
    {
        $this->publicMessage = $publicMessage;
        $this->debugMessage = $debugMessage;
        $this->parameters = $parameters;
        $this->statusCode = $statusCode;
        $this->trace = $trace;
    }

    public function getPublicMessage(): string
    {
        return $this->publicMessage;
    }

    public function getDebugMessage(): ?string
    {
        return $this->debugMessage;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getTrace(): array
    {
        return $this->trace;
    }
}
