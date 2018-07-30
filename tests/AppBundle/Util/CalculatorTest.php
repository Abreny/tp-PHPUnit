<?php

namespace Tests\AppBundle\Util;

use PHPUnit\Framework\TestCase;
use AppBundle\Util\Calculator;

class CalculatorTest
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(32, $calculator->add(20,12));
    }
}