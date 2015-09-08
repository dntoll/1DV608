<?php

namespace model;

class Product {

	private $title;
	private $price;
	private $unique;

	public function __construct($title, $price, $unique) {
		assert(is_string($title));
		if (!is_numeric($price) || $price <= 0) {
			throw new \Exception("Price is too low!");
		}

		$this->title = $title;
		$this->price = $price;
		$this->unique = $unique;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getUniqueString() {
		return $this->unique;
	}
}