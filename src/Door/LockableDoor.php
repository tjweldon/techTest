<?php declare(strict_types=1);

namespace Src\Door;

use Src\Key;

abstract class LockableDoor extends AbstractDoor
{
    abstract function lock(Key $key);

    abstract function unlock(Key $key);

    abstract function isLocked(): bool;
}
