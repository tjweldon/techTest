<?php declare(strict_types=1);

namespace Src\Exception;

trait ShortClassNameGetter
{
    private static function getShortClassName(object $classInstance)
    {
        $namespace = explode('\\', get_class($classInstance));

        return array_pop($namespace);
    }
}
