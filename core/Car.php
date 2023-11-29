<?php

namespace Core;

class Car
{
    /**
     * @var int
     */
    protected static int $maxSpeed = 280;

    /**
     * @return int
     */
    public function get(): int
    {
        return self::$maxSpeed;
    }
}