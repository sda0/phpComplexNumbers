<?php
use Sda0\Complex\Form\AlgebraicComplexNumber as Number;
use Sda0\Complex\ComplexNumbers as Operation;
use PHPUnit\Framework\TestCase;
use Sda0\Complex\Exception\DivisionByZeroException;

class DivOperationTest extends TestCase {

	public function testDivisionByZeroException() {
		$this->expectException(DivisionByZeroException::class);
		Operation::div(new Number(10, 10), new Number(0, 0));
	}

	/**
	 * @param Number $a
	 * @param Number $b
	 * @param Number $expected
	 * @dataProvider dataProvider */
	public function testComplexNumbersDivision(Number $a, Number $b, Number $expected) {
		$this->assertEquals(Operation::div($a, $b), $expected, 'Not equal');
	}

	public function dataProvider() {
		return [
			[new Number(10, 10), new Number(1, 1), new Number(10, 0)],
			[new Number(10, 10), new Number(0, 1), new Number(10, -10)],
			[new Number(10, 10), new Number(1, 0), new Number(10, 10)],
			[new Number(-10, -10), new Number(-5, 10), new Number(-0.4, 1.2)],
		];
	}
}