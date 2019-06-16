<?php declare(strict_types=1);

namespace Src;

class Key
{
    private $keyString;

    /**
     * Key constructor.
     * @param $keyString
     */
    public function __construct(string $keyString)
    {
        $this->keyString = $keyString;
    }

    public function __toString()
    {
        return $this->keyString;
    }
}
