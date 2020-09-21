<?php declare(strict_types=1);

namespace DoclerLabs\ApiClientException;

use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Throwable;

class UnexpectedResponseException extends Exception implements ClientExceptionInterface
{
    /** @var int */
    private $statusCode;

    public function __construct(
        int $statusCode,
        string $serializedErrors = '',
        int $code = 0,
        Throwable $previous = null
    ) {
        $this->statusCode = $statusCode;

        $message = \sprintf('Server replied with a non-200 status code: %s', $this->statusCode);
        if ($serializedErrors !== '') {
            $message = \sprintf('%s | %s', $message, $serializedErrors);
        }

        parent::__construct(
            $message,
            $code,
            $previous
        );
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
