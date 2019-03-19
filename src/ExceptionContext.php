<?php

declare(strict_types = 1);

namespace holicz\SimpleException;

class ExceptionContext
{
    private $publicMessage;
    private $debugMessage;
    private $parameters;
    private $statusCode;

    public function __construct(string $publicMessage, ?string $debugMessage = null, array $parameters = [], int $statusCode = 500)
    {
        $this->publicMessage = $publicMessage;
        $this->debugMessage = $debugMessage;
        $this->parameters = $parameters;
        $this->statusCode = $statusCode;
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
}
