<?php

namespace view;

class ProductView {
	private static $productURLID = "p";


	public function __construct(URLView $view) {
		$this->url = $view;
	}

	public function getProductList(\model\ProductCatalog $catalog) {
		$ret = "<h1>Products</h1>

		<ul>";

		foreach ($catalog->getProducts() as $key => $product) {
			$name = $product->getName();
			$price = $product->getPrice();
			$unique = $product->getUniqueProductID();

			$url = $this->url->getURLWithArgument(self::$productURLID, $unique);
			$ret .= "<li>";
			$ret .= "<a href='$url'>$name</a> ";
			$ret .= "$price sek</li>";
		}

		$ret .= "</ul>";

		return $ret;
	}

	public function getProduct(\model\Product $product, LikeView $likeView) {
		
		$name = $product->getName();
		$price = $product->getPrice();
		$unique = $product->getUniqueProductID();

		$backUrl = $this->url->getURL();
		$this->url->addArgument(self::$productURLID, $unique);
		$likeHTML = $likeView->createLikeButton();

		$ret = "<h1>Product $name</h1>$likeHTML<br/>";
		$ret .= "";
		$ret .= "$price sek<br/>";

		
		$ret .= "<a href='$backUrl'>back</a> ";

		return $ret;
	}

	public function customerInspectsProduct() {
		if (isset($_GET[self::$productURLID])) {
			return true;
		}
		return false;
	}

	public function getSelectedProduct(\model\ProductCatalog $catalog) {
		if (isset($_GET[self::$productURLID])) {
			$item = $_GET[self::$productURLID];
			return $catalog->getProduct($item);
		}
		return false;
	}
}