<?php

namespace controller;


class StoreController {

	/**
	 * @var \model\ProductCatalog
	 */
	private $catalog;

	/**
	 * @var \view\ProductCatalogView
	 */
	private $productCatalogView;

	/**
	 * @var \view\NavigationView
	 */
	private $navigationView;

	/**
	 * @var null | \view\ProductView
	 */
	private $productView = null;

	public function __construct(\model\ProductCatalog $catalog) {
		$this->catalog = $catalog;
		$this->navigationView = new \view\NavigationView();
		$this->productCatalogView = new \view\ProductCatalogView($this->catalog, $this->navigationView);		
	}

	public function doStore() {
		if ($this->navigationView->customerWantsToSeeProduct()) {

			//setup controller
			$selectedProduct = $this->productCatalogView->getSelectedProduct();
			$productLikes = new \model\ProductLikes($selectedProduct);
			$popularityView = new \view\PopularityView($this->navigationView, $selectedProduct, $productLikes);
			$likeController = new PopularityController($popularityView, $productLikes);

			//execute child controller
			$likeController->doLike();

			//initiate view
			$this->productView = new \view\ProductView($selectedProduct, $this->navigationView, $popularityView);
		}
	}

	/**
	 * 
	 * @return View
	 */
	public function getView() {

		if ($this->productView != null) {
			return  $this->productView;
		} else {
			return $this->productCatalogView;
		}
	}
}