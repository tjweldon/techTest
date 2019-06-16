<?php declare(strict_types=1);

namespace Test\Door;

use Src\Door\YaleHouseFrontDoor;
use PHPUnit\Framework\TestCase;

class YaleHouseFrontDoorTest extends TestCase
{
    /**
     * @var string
     */
    private $keyString;

    private function getYaleHouseFrontDoor(): YaleHouseFrontDoor
    {
        return new YaleHouseFrontDoor($this->keyString);
    }

    public function testClose()
    {
        
    }

    public function testLock()
    {

    }

    public function testOpen()
    {

    }

    public function testUnlock()
    {

    }
}
