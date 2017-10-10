<?php
namespace Sda0\Complex;


interface IAlgebraicForm {
	/**
	 * Returns real part of complex number
	 * @return float */
	public function getReal() :float;

	/**
	 * Returns imaginary part of complex number
	 * @return float */
	public function getIm() :float;
}