<?php

namespace view;

class PopularityView {

	private static $postLikeId = "like";
	private static $cookieID = "view::PopularityView::userID";

	public function __construct(NavigationView $nav, 
								\model\Product $product,
								\model\ProductLikes $pl) {
		$this->navigationView = $nav;
		$this->product = $product;
		$this->productLikes = $pl;
	}

	/**
	 * @return boolean
	 */
	public function didCustomerPressLike() {
		return isset($_POST[self::$postLikeId]);
	}

	public function getUserId() {
		if (isset($_COOKIE[self::$cookieID])) {
			return $_COOKIE[self::$cookieID];
		} else {
			$unique = "uniqueStringInCookie" . sha1(rand());
			setcookie(self::$cookieID, $unique, time() + 60 * 60 * 24 * 365);
			$_COOKIE[self::$cookieID] = $unique;
			return $unique;
		}
	}

	/**
	 * @return string HTML
	 */
	public function getHTML() {

		$likes = $this->productLikes->getNumberOfLikes();
		$weLikeTheThing	= $this->productLikes->hasUserLiked(self::getUserId());

		$message = "";
		if($this->didCustomerPressLike()) {

			if ($weLikeTheThing)
				$message = "You just liked the thing...";
			else
				$message = "You removed your vote from it...";
		} 

		$value = "like";
		if ($weLikeTheThing)
			$value = "unlike";

		$url = $this->navigationView->getURLToProduct($this->product->getUniqueString());
		$form = "<form action='$url' method='post'>
					<input type='submit' value='$value' name='" . self::$postLikeId . "'>
				</form>";

		return "<div>
		<p>The number of likes for this product is $likes.</p>
		$form

		<p>$message</p>
		</div>";
	}
}