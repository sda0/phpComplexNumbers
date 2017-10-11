<?php
use Sda0\Complex\Form\AlgebraicComplexNumber as Number;
use Sda0\Complex\ComplexNumbers as Operation;
use PHPUnit\Framework\TestCase;

class NegativeOperationTest extends TestCase {
	/**
	 * @param Number $a
	 * @param Number $expected
	 * @dataProvider dataProvider */
	public function testComplexNumberNegative(Number $a, Number $expected) {
		$this->assertEquals(Operation::negative($a), $expected, 'Not equal');
	}

	public function dataProvider() {
		return [
			[new Number(-5.1, -3), new Number(5.1, 3)],
			[new Number(1, 1), new Number(-1, -1)],
			[new Number(0, 0), new Number(0, 0)],
		];
	}
}