<?php declare(strict_types=1);

namespace Src\Exception;

class WrongKeyException extends DomainException
{
    public static function create(): self
    {
        return new self("The key provided does not fit the lock");
    }
}
