<?php
use Sda0\Complex\Form\AlgebraicComplexNumber as Number;
use Sda0\Complex\ComplexNumbers as Operation;
use PHPUnit\Framework\TestCase;

class AddOperationTest extends TestCase {
	/**
	 * @param Number $a
	 * @param Number $b
	 * @param Number $expected
	 * @dataProvider dataProvider */
	public function testComplexNumbersAdd(Number $a, Number $b, Number $expected) {
		$this->assertEquals(Operation::add($a, $b), $expected, 'Not equal');
	}

	public function dataProvider() {
		return [
			[new Number(10, 10), new Number(0, 0), new Number(10, 10)],
			[new Number(0, 0), new Number(10, 10), new Number(10, 10)],
			[new Number(-10, -10), new Number(-5, 10), new Number(-15, 0)],
		];
	}
}