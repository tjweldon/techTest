<?php declare(strict_types=1);

namespace Src\Door;

abstract class AbstractDoor
{
    abstract public function open();

    abstract public function close();
}
