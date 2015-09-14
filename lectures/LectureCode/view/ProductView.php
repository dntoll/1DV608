<?php
namespace view;


class ProductView {

	/**
	 * @var \model\Product
	 */
	private $product;

	public function __construct(\model\Product $product) {
		$this->product = $product;
	}

	/**
	 * @return String HTML
	 */
	public function getHTML() {

		$title = $this->product->getTitle();
		$desciption = $this->product->getDescription();
		$price = $this->product->getPrice();
		$unique = $this->product->getUniqueString();

		$ret = "<div>
					<h2>$title</h2>
					<p>Price: $price sek</p>
					<p>$desciption</p>
				</div>";
		
		return $ret;
	}
}