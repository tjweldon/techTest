<?php declare(strict_types=1);

namespace Test\Door;

use Src\Door\YaleHouseFrontDoor;
use PHPUnit\Framework\TestCase;
use Src\Exception\AlreadyClosedException;
use Src\Exception\AlreadyOpenException;
use Src\Exception\WrongKeyException;
use Src\Key;

class YaleHouseFrontDoorTest extends TestCase
{
    /**
     * @var string
     */
    private $keyString = 'a';
    /**
     * @var string
     */
    private $wrongKeyString = 'b';

    private function getYaleHouseFrontDoor(bool $locked, bool $open): YaleHouseFrontDoor
    {
        $door = new YaleHouseFrontDoor($this->keyString);
        if ($open && !$door->isOpen()) {
            $door->open();
        }
        if ($locked && !$door->isLocked()) {
            $door->lock($this->getKey());
        }

        return $door;
    }

    private function getKey(): Key
    {
        return new Key($this->keyString);
    }

    private function getWrongKey(): Key
    {
        return new Key($this->wrongKeyString);
    }

    public function testClose()
    {
        $door = $this->getYaleHouseFrontDoor(false, true);
        $door->close();

        $this->assertFalse($door->isOpen());
    }

    public function testCloseAlreadyClosedDoor()
    {
        $door = $this->getYaleHouseFrontDoor(false, false);

        $this->expectException(AlreadyClosedException::class);
        $door->close();
    }

    public function testLock()
    {
        $door = $this->getYaleHouseFrontDoor(true, false);
        $door->lock($this->getKey());

        $this->assertTrue($door->isLocked());
    }

    public function testLockWithWrongKey()
    {
        $door = $this->getYaleHouseFrontDoor(true, false);

        $this->expectException(WrongKeyException::class);
        $door->lock($this->getWrongKey());
    }

    public function testOpen()
    {
        $door = $this->getYaleHouseFrontDoor(false, false);
        $door->open();

        $this->assertTrue($door->isOpen());
    }

    public function testOpenAlreadyOpenDoor()
    {
        $door = $this->getYaleHouseFrontDoor(false, true);

        $this->expectException(AlreadyOpenException::class);
        $door->open();
    }

    public function testUnlock()
    {
        $door = $this->getYaleHouseFrontDoor(true, false);
        $door->unlock($this->getKey());

        $this->assertFalse($door->isLocked());
    }

    public function testUnlockWithWrongKey()
    {
        $door = $this->getYaleHouseFrontDoor(true, false);

        $this->expectException(WrongKeyException::class);
        $door->unlock($this->getWrongKey());
    }
}
