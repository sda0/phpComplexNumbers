<?php
namespace Sda0\Complex\Form;

use Sda0\Complex\IAlgebraicForm;

class ExponentialComplexNumber implements IAlgebraicForm {
	/** @var  float Absolute value */
	protected $abs;

	/** @var  float Angle */
	protected $angle;

	/**
	 * ExponentialComplexNumber constructor.
	 */
	public function __construct() {
		$this->abs = 0.0;
		$this->angle = 0.0;
	}

	/** @param float $abs
	 * @return $this
	 */
	public function setAbs($abs) :ExponentialComplexNumber {
		$this->abs = (float) $abs;
		return $this;
	}

	/** @param float $angle
	 * @return $this
	 */
	public function setAngle($angle) :ExponentialComplexNumber {
		$this->angle = (float) $angle;
		return $this;
	}

	/** @inheritdoc */
	public function getReal() :float {
		return $this->abs * cos($this->angle);
	}

	/** @inheritdoc */
	public function getIm() :float {
		return $this->abs * sin($this->angle);
	}

	public function __toString() {
		return sprintf('%fEi%f', $this->abs, $this->angle);
	}

}