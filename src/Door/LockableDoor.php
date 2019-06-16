<?php declare(strict_types=1);

namespace Src\Door;

abstract class LockableDoor extends AbstractDoor
{
    abstract function lock();

    abstract function unlock();

    abstract function isLocked(): bool;
}
