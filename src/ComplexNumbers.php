<?php
namespace Sda0\Complex;


use Sda0\Complex\Exception\DivisionByZeroException;
use Sda0\Complex\Form\AlgebraicComplexNumber;

/**
 * Class ComplexNumbers
 * @package Sda0\Complex
 */
class ComplexNumbers {

	/**
	 * Returns the sum of two complex numbers: z = a + b
	 *
	 * @param IAlgebraicForm $a
	 * @param IAlgebraicForm $b
	 * @return AlgebraicComplexNumber
	 */
	public static function add(IAlgebraicForm $a, IAlgebraicForm $b)  :AlgebraicComplexNumber {
		$z = new AlgebraicComplexNumber();

		$z->setReal($a->getReal() + $b->getReal())
			->setIm($a->getIm() + $b->getIm());

		return $z;
	}

	/**
	 * Returns the difference of two complex numbers: z = a - b
	 *
	 * @param IAlgebraicForm $a
	 * @param IAlgebraicForm $b
	 * @return AlgebraicComplexNumber
	 */
	public static function subst(IAlgebraicForm $a, IAlgebraicForm $b)  :AlgebraicComplexNumber {
		return self::add($a, self::negative($b));
	}

	/**
	 * Calculates the negative of a complex number: z = -c
	 *
	 * @param IAlgebraicForm $c
	 * @return AlgebraicComplexNumber
	 */
	public static function negative(IAlgebraicForm $c) :AlgebraicComplexNumber {
		$z = new AlgebraicComplexNumber();
		$z->setReal(-1 * $c->getReal())
			->setIm(-1 * $c->getIm());
		return $z;
	}

	/**
	 * Returns the division of two complex numbers: z = c1 / c2
	 *
	 * @param IAlgebraicForm $a
	 * @param IAlgebraicForm $b
	 * @return AlgebraicComplexNumber
	 * @throws DivisionByZeroException
	 */
	public static function div(IAlgebraicForm $a, IAlgebraicForm $b) :AlgebraicComplexNumber {
		$ar = $a->getReal(); $ai = $a->getIm();
		$br = $b->getReal(); $bi = $b->getIm();

		$div = $br*$br + $bi*$bi;
		if ($div === 0.0) {
			throw new DivisionByZeroException(__METHOD__ . ': division by zero');
		}

		$r = ($ar*$br + $ai*$bi)/$div;
		$i = ($ai*$br - $ar*$bi)/$div;

		$z = new AlgebraicComplexNumber();
		$z->setReal($r)
			->setIm($i);
		return $z;
	}

	/**
	 * Returns the product of two complex numbers: z = a * b
	 *
	 * @param IAlgebraicForm $a
	 * @param IAlgebraicForm $b
	 * @return AlgebraicComplexNumber
	 */
	public static function mult(IAlgebraicForm $a, IAlgebraicForm $b) :AlgebraicComplexNumber {
		$r = ($a->getReal() * $b->getReal()) - ($a->getIm() * $b->getIm());
		$i = ($a->getReal() * $b->getIm()) + ($b->getReal() * $a->getIm());

		$z = new AlgebraicComplexNumber();
		$z->setReal($r)
			->setIm($i);
		return $z;
	}
}