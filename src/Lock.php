<?php declare(strict_types=1);

namespace Src;

class Lock
{
    /**
     * @var string
     */
    private $keyString;

    public function __construct(string $keyString)
    {
        $this->keyString = $keyString;
    }

    public function isCorrectKey(Key $key): bool
    {
        return $this->keyString === (string) $key;
    }


}
