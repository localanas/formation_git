<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_addition()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(3, 3));
    }

    public function test_subtraction()
    {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3, 2));
    }

}
