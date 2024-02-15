<?php

namespace Core;

class Math
{
    /**
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     */
    public function multiplication(int|float $a, int|float $b): float|int
    {
        return $a * $b;
    }

    /**
     * @param int|float $a
     * @param int|float $b
     * @return float|int
     */
    public function addition(int|float $a, int|float $b): float|int
    {
        return $a + $b;
    }
}