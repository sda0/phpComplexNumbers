<?php
namespace Sda0\Complex\Form;


class TrigonometricComplexNumber extends ExponentialComplexNumber {
	public function __toString() {
		return sprintf('%f (cos(%f) + i sin(%f))', $this->abs, $this->angle, $this->angle);
	}
}