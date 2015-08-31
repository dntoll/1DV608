<?php

namespace model;


interface UserVisitor {
	function visitUser(\model\User $user);
	function visitNullUser();
}

class User {
	private $name;
	private $adress;

	public function __construct($name, $adress) {
		$this->name = $name;
		$this->adress = $adress;
	}

	public function getAddress() {
		return $this->adress;
	}


	public function getName() {
		return $this->name;
	}

	public function visit(UserVisitor $visitor) {
		return $visitor->visitUser($this);
	}
}

class NullUser extends User {

	public function __construct() {}

	public function visit(UserVisitor $visitor) {
		return $visitor->visitNullUser();
	}
}