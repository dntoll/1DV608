<?php

namespace model;

class ProductCatalog {
	private $products;


	public function __construct() {
		$this->products = array();
	}

	public function add(Product $p) {
		if (isset($this->products[$p->getUniqueProductID()])) {
			throw new \Exception("Product Unique ID already exist, no duplicated products please!");
		}

		$this->products[$p->getUniqueProductID()] = $p;
	}

	public function getProducts() {
		return $this->products;
	}

	public function getProduct($uniqueId) {
		if (isset($this->products[$uniqueId])) {
			return $this->products[$uniqueId];
		}

		throw new \Exception("No product with that id");
	}
}