<?php

use App\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new App\Calculator;
    }
    public function testAdd()
    {
        $result = $this->calculator->add(20, 5);

        $this->assertEquals(25, $result);
    }


    public function testSubtract()
    {
        $result = $this->calculator->subtract(20, 5);

        $this->assertEquals(15, $result);
    }

    public function tearDown(): void
    {
        $this->calculator = null;
    }
}
