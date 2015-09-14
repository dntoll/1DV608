<?php

namespace view;


class ProductCatalogView {

	/**
	 * Used to build URLs to a certain product
	 * @var string
	 */
	private static $productURLID = "p";

	/**
	 * @var \model\ProductCatalog
	 */
	private $catalog;

	public function __construct(\model\ProductCatalog $catalog) {
		$this->catalog = $catalog;
	}

	/**
	 * @return String HTML
	 */
	public function getHTML() {

		$productArray = $this->catalog->getProducts();

		$ret = "<ul>";

		foreach ($productArray as $product) {

			$title = $product->getTitle();
			$price = $product->getPrice();
			$unique = $product->getUniqueString();

			$url = "?".self::$productURLID."=$unique"; //TODO: Generate URL here
			 
			$ret .= "<li><a href='$url'>$title</a> $price</li>";
		}
		$ret .= "</ul>";

		return "<h2>Product Catalog</h2> $ret";
	}

	/**
	 * @return boolean
	 */
	public function customerWantsToSeeProduct() {
		if (isset($_GET[self::$productURLID]) ) {
			return true;
		}
		return false;
	}

	/**
	 * @throws Exception if the key is unkown
	 * @return \model\Product
	 */
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