<?php

namespace model;

class AdminFacade {
	private $products;

	public function __construct( ProductDAL $db) {
		$this->dal = $db;
		//$this->products = $db->getProducts(); //extract cache
	}

	public function add(Product $p) {
		//$this->products->add($p);
		$this->dal->add($p);
		//$this->products = $db->getProducts(); //extract cache
	}

	public function getProducts() {
		return $this->dal->getProducts();
	}
}