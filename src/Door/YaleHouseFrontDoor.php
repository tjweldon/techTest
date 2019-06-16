<?php declare(strict_types=1);

namespace Src\Door;

use Src\Exception\AlreadyClosedException;
use Src\Exception\AlreadyLockedException;
use Src\Exception\AlreadyOpenException;
use Src\Exception\WrongKeyException;
use Src\Key;

class YaleHouseFrontDoor extends LockableDoor
{
    public function __construct(string $keyString)
    {
        //TODO: Implement
    }

    /**
     * @throws AlreadyClosedException
     */
    public function close()
    {
        // TODO: Implement close() method.
    }

    /**
     * @throws AlreadyLockedException
     * @throws WrongKeyException
     */
    public function lock(Key $key)
    {
        // TODO: Implement lock() method.
    }

    public function isLocked(): bool
    {
        // TODO: Implement isLocked() method.
    }

    /**
     * @throws AlreadyOpenException
     */
    public function open()
    {
        // TODO: Implement open() method.
    }

    public function isOpen(): bool
    {
        // TODO: Implement isOpen() method.
    }

    /**
     * @throws AlreadyLockedException
     * @throws WrongKeyException
     */
    public function unlock(Key $key)
    {
        // TODO: Implement unlock() method.
    }
}
