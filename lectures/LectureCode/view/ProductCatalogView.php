<?php

namespace view;


class ProductCatalogView {

	

	/**
	 * @var \model\ProductCatalog
	 */
	private $catalog;

	/**
	 * @var \view\NavigationView
	 */
	private $navigation;

	public function __construct(\model\ProductCatalog $catalog, NavigationView $nav) {
		$this->catalog = $catalog;
		$this->navigation = $nav;
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
			$url = $this->navigation->getURLToProduct($unique); 
			
			$ret .= "<li><a href='$url'>$title</a> $price</li>";
		}
		$ret .= "</ul>";

		return "<h2>Product Catalog</h2> $ret";
	}

	

	/**
	 * @throws Exception if the key is unkown
	 * @return \model\Product
	 */
	public function getSelectedProduct() {
		assert($this->navigation->customerWantsToSeeProduct());
		$unique = $this->navigation->getProductID();

		$product = $this->catalog->getProductFromUnique($unique);

		if ($product != null) {
			return $product;
		}
		throw new \Exception("unknown key");

	}
}