<?php

namespace model;

class Product {

	public function __construct($name, $price, $uniqueProductID) {
		$this->name = $name;
		$this->price = $price;
		$this->uniqueProductID = $uniqueProductID;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getUniqueProductID() {
		return $this->uniqueProductID;
	}
}