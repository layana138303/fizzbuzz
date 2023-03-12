<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz {
    function convert(int $number1): int | String
    {
        if ($number1 % 15 == 0)
            return "FizzBuzz";
        if ($number1 % 3 == 0)
            return "Fizz";
        if ($number1 % 5 == 0)
            return "Buzz";
        return $number1;
    }
}