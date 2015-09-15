<?php

namespace view;

class PopularityView {

	private static $postLikeId = "like";

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

	/**
	 * @return string HTML
	 */
	public function getHTML() {

		$likes = $this->productLikes->getNumberOfLikes();
		$weLikeTheThing	= true;

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