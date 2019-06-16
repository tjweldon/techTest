<?php declare(strict_types=1);

namespace Src;

use Src\Exception\AlreadyOpenException;

interface Openable
{
    /**
     * @throws AlreadyOpenException
     */
    public function open();

    public function isOpen(): bool;
}
