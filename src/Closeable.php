<?php declare(strict_types=1);

namespace Src;

use Src\Exception\AlreadyClosedException;

interface Closeable
{
    /**
     * @throws AlreadyClosedException
     */
    public function close();

    public function isClosed(): bool;
}
