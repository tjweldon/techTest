<?php declare(strict_types=1);

namespace Src\Exception;

use Src\Lockable;

class AlreadyLockedException extends DomainException
{
    use ShortClassNameGetter;

    public static function create(Lockable $lockable): self
    {
        $typeName = self::getShortClassName($lockable);

        return new self("The Lockable {$typeName} was already locked");
    }
}
