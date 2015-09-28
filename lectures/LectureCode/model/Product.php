<?php

namespace model;

class NoTitleException extends \Exception {};
class NoDescriptionException extends \Exception {};
class NoUniqueException extends \Exception {};
class NoPriceException extends \Exception {};

class Product {
	private $title;
	private $price;
	private $unique;
	private $description;

	public function __construct($title, $price, $unique, $description) {
		if (is_string($title) == false || strlen($title) == 0)
			throw new NoTitleException();
		if (is_string($description) == false || strlen($description) == 0)
			throw new NoDescriptionException();
		if (is_string($unique) == false || strlen($unique) == 0)
			throw new NoUniqueException();
		
		if (!is_numeric($price) || $price <= 0) {
			throw new NoPriceException();
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