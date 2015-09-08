<?php
namespace view;


class ProductView {

	private $product;

	public function __construct(\model\Product $product) {
		$this->product = $product;
	}

	public function getHTML() {
		$ret = "<h2>" . $this->product->getTitle() . "</h2>";

		
		return $ret;
	}
}