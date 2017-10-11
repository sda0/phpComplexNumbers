<?php
namespace Sda0\Complex\Form;


use Sda0\Complex\IAlgebraicForm;

class AlgebraicComplexNumber implements IAlgebraicForm {
	/** @var  float Real part of the complex number */
	private $real;

	/** @var float Imaginary part of the complex number */
	private $im;

	/**
	 * AlgebraicComplexNumber constructor.
	 * @param float $real
	 * @param float $im
	 */
	public function __construct(float $real = 0, float $im = 0) {
		$this->real = $real;
		$this->im = $im;
	}

	public function setReal($real) {
		$this->real = (float) $real;
		return $this;
	}

	public function setIm($im) {
		$this->im = (float) $im;
		return $this;
	}

	/** @inheritdoc */
	public function getReal() :float {
		return $this->real;
	}

	/** @inheritdoc */
	public function getIm() :float {
		return $this->im;
	}

}