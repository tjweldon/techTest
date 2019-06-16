<?php declare(strict_types=1);

namespace Src;

use Src\Exception\AlreadyLockedException;
use Src\Exception\WrongKeyException;

interface Lockable
{
    /**
     * @throws AlreadyLockedException
     * @throws WrongKeyException
     */
    public function lock(Key $key);

    public function isLocked(): bool;
}
