<?php
namespace Sda0\Complex;


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
	 * Calculates the exponential of a complex number: z = exp(c)
	 *
	 * @param IAlgebraicForm $c
	 * @return AlgebraicComplexNumber
	 */
	public static function exp(IAlgebraicForm $c) :AlgebraicComplexNumber {
		$r = exp($c->getReal()) * cos($c->getIm());
		$i = $r * sin($c->getIm());

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
		$i = ($a->getReal() * $b->getIm()) + ($a->getReal() * $b->getIm());

		$z = new AlgebraicComplexNumber();
		$z->setReal($r)
			->setIm($i);
		return $z;
	}
}