<?php

namespace view;


class ProductCatalogView {

	private static $productURLID = "p";

	private $catalog;

	public function __construct(\model\ProductCatalog $catalog) {

		$this->catalog = $catalog;

	}

	public function getHTML() {

		$productArray = $this->catalog->getProducts();

		$ret = "<ul>";

		foreach ($productArray as $product) {

			$title = $product->getTitle();
			$price = $product->getPrice();
			$unique = $product->getUniqueString();

			$url = "?".self::$productURLID."=$unique";
			 
			$ret .= "<li><a href='$url'>$title</a> $price";
		}
		$ret .= "</ul>";

		return "<h2>Product Catalog</h2> $ret";
	}

	public function customerWantsToSeeProduct() {
		if (isset($_GET[self::$productURLID]) ) {
			return true;
		}
		return false;
	}

	public function getSelectedProduct() {
		assert($this->customerWantsToSeeProduct());
		$unique = $_GET[self::$productURLID];

		$product = $this->catalog->getProductFromUnique($unique);

		if ($product != null) {
			return $product;
		}
		throw new \Exception("unknown key");

	}
}