<?php

namespace Deg540\PHPTestingBoilerplate;

class Calculator
{
    function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    function multiply(int $number1, int $number2): int
    {
        return $number1 * $number2;
    }

    function division(float $number1, float $number2): float
    {
        return $number1 / $number2;
    }
}