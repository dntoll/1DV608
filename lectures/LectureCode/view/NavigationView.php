<?php

namespace view;


class NavigationView {

	/**
	 * Used to build URLs to a certain product
	 * @var string
	 */
	private static $productURLID = "p";
	private static $adminURL = "admin";

	/**
	 * @return String HTML <a href...
	 */
	public function getLinkToCatalog() {
		return "<a href='?'>back</a>";
	}

	/**
	 * @param  String $unique
	 * @return String URL starting with ?
	 */
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

	/**
	 * @return String
	 */
	public function getProductID() {
		assert($this->customerWantsToSeeProduct());
		return $_GET[self::$productURLID];
	}

	public function inStore() {
		return isset($_GET[self::$adminURL]) == false;
	}
}