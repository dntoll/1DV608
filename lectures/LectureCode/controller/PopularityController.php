<?php

namespace controller;

require_once("view/PopularityView.php");

class PopularityController {

	public function __construct(\view\PopularityView $view, 
								\model\ProductLikes $likes) {
		$this->popularityView = $view;
		$this->productLikes = $likes;
	}

	public function   doLike() {

		if ($this->popularityView->didCustomerPressLike()) {
			$uniqueUserId = $this->popularityView->getUserId(); //TODO make highlevel input to increase security...

			if ($this->productLikes->hasUserLiked($uniqueUserId) == false) {
				$this->productLikes->doLike($uniqueUserId);
			} else {
				$this->productLikes->doUnlike($uniqueUserId);
			}
		}
	}
}