<?php declare(strict_types=1);

namespace Src;

use Src\Exception\AlreadyLockedException;
use Src\Exception\WrongKeyException;

interface Unlockable
{
    /**
     * @throws AlreadyLockedException
     * @throws WrongKeyException
     */
    public function unlock(Key $key);

    public function isLocked(): bool;
}
