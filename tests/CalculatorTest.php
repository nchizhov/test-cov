<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

  public function testAddOperation(): void {
    $adder = new Calculator("add");
    $value = $adder->evaluate(2, 3);
    $this->assertEquals(5, $value);
  }

  public function testSubtractOperation(): void {
    $subtract = new Calculator("subtract");
    $value = $subtract->evaluate(2, 3);
    $this->assertEquals(-1, $value);
  }
}
