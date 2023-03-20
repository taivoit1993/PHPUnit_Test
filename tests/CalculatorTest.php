<?php

use App\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new App\Calculator;
    }

    public function addDataProvider(){
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-3)
        );
    }

     /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);

        $this->assertEquals($expected, $result);
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
