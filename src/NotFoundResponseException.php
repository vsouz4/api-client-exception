<?php

declare(strict_types=1);

namespace DoclerLabs\ApiClientException;

use Fig\Http\Message\StatusCodeInterface;

class NotFoundResponseException extends UnexpectedResponseException
{
    /** @deprecated */
    public const STATUS_CODE = StatusCodeInterface::STATUS_NOT_FOUND;
}
