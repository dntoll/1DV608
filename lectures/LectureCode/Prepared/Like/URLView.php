<?php

namespace view;

class URLView {

	private $arguments = array();

	public function addArgument($argument, $value) {
		$this->arguments[$argument] = $value;
	}


	public function getURL() {
		$ret = "?";
		foreach ($this->arguments as $argument => $value) {
			$ret .= "$argument=$value&";
		}

		return $ret;
	}

	public function getURLWithArgument($arg, $val) {
		$ret = "?$arg=$val&";

		foreach ($this->arguments as $argument => $value) {
			$ret .= "$argument=$value&";
		}

		return $ret;
	}
}