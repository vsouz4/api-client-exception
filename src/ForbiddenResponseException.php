<?php declare(strict_types=1);

namespace DoclerLabs\ApiClientException;

class ForbiddenResponseException extends UnexpectedResponseException
{
    const STATUS_CODE = 403;
}
