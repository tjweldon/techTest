<?php declare(strict_types=1);

namespace Src\Exception;

class CannotOpenLockedDoorException extends DomainException
{
    public static function create(): self
    {
        return new self("The door is locked");
    }
}
