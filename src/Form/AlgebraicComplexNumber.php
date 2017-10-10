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
	 */
	public function __construct() {
		$this->real = 0.0;
		$this->im = 0.0;
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