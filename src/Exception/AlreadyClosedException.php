<?php declare(strict_types=1);

namespace Src\Exception;

use Src\Closeable;

class AlreadyClosedException extends DomainException
{
    use ShortClassNameGetter;

    public static function create(Closeable $openable): self
    {
        $typeName = self::getShortClassName($openable);

        return new self("The Closeable {$typeName} was already closed");
    }
}
