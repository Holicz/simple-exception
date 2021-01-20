<?php

declare(strict_types = 1);

namespace holicz\SimpleException;

final class ExceptionContext
{
    private string $publicMessage;
    private string $debugMessage;
    private int $statusCode;

    public function __construct(
        string $publicMessage,
        string $debugMessage,
        int $statusCode = 500
    ) {
        $this->publicMessage = $publicMessage;
        $this->debugMessage = $debugMessage;
        $this->statusCode = $statusCode;
    }

    public function getPublicMessage(): string
    {
        return $this->publicMessage;
    }

    public function getDebugMessage(): string
    {
        return $this->debugMessage;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
