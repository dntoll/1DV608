<?php

namespace controller;


class PopularityController {

	public function __construct(\view\PopularityView $view, 
								\model\ProductLikes $likes) {
		$this->popularityView = $view;
		$this->productLikes = $likes;
	}

	public function   doLike() {

		if ($this->popularityView->didCustomerPressLike()) {
			$this->productLikes->doLike();
		}
	}
}