<?php declare(strict_types=1);

namespace Src\Exception;

use Src\Openable;

class AlreadyOpenException extends DomainException
{
    use ShortClassNameGetter;

    public static function create(Openable $openable): self
    {
        $openableType = self::getShortClassName($openable);

        return new self("The Openable {$openableType} was already open");
    }
}
