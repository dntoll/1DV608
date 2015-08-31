<?php

namespace model;

class User {
	private $name;
	private $adress;

	public function __construct($name, $adress) {
		$this->name = $name;
		$this->adress = $adress;
	}


	public function getName() {
		return $this->name;
	}
}