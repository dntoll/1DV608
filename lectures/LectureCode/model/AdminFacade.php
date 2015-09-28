<?php

namespace model;

class AdminFacade {
	private $products;

	public function __construct(ProductCatalog $p) {
		$this->products = $p;
	}

	public function add(Product $p) {
		$this->products->add($p);
	}

	public function getProducts() {
		return $this->products;
	}
}