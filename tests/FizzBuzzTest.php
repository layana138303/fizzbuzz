<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returns_3_for_Fizz()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(3);

        $this->assertEquals("Fizz", $convertedNumber);
    }

    /**
     * @test
     */
    public function returns_5_for_Buzz()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(5);

        $this->assertEquals("Buzz", $convertedNumber);
    }

    /**
     * @test
     */
    public function returns_15_for_FizzBuzz()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(15);

        $this->assertEquals("FizzBuzz", $convertedNumber);
    }

    /**
     * @test
     */
    public function returns_1_for_1()
    {
        $fizzbuzz = new FizzBuzz();

        $convertedNumber = $fizzbuzz->convert(1);

        $this->assertEquals(1, $convertedNumber);
    }
}
