<?php

namespace view;


class NavigationView {

	/**
	 * Used to build URLs to a certain product
	 * @var string
	 */
	private static $productURLID = "p";

	public function getLinkToCatalog() {
		return "<a href='?'>back</a>";
	}

	public function getURLToProduct($unique) {
		return "?".self::$productURLID."=$unique";
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

	public function getProductID() {
		 return $_GET[self::$productURLID];
	}
}