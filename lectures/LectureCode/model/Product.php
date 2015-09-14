<?php

namespace model;

class Product {

	private $title;
	private $price;
	private $unique;
	private $description;

	public function __construct($title, $price, $unique, $description) {
		assert(is_string($title) && strlen($title) > 0);
		assert(is_string($description) && strlen($description) > 0);
		
		if (!is_numeric($price) || $price <= 0) {
			throw new \Exception("Price is too low!");
		}

		$this->title = $title;
		$this->description = $description;
		$this->price = $price;
		$this->unique = $unique;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getUniqueString() {
		return $this->unique;
	}
}