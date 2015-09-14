<?php

namespace controller;


class StoreController {

	/**
	 * @var null | \model\Product
	 */
	private $selectedProduct = null;

	/**
	 * @var \model\ProductCatalog
	 */
	private $catalog;

	/**
	 * @var \view\ProductCatalogView
	 */
	private $productCatalogView;

	private $navigationView;

	public function __construct(\model\ProductCatalog $catalog) {
		$this->catalog = $catalog;
		$this->navigationView = new \view\NavigationView();
		$this->productCatalogView = new \view\ProductCatalogView($this->catalog, $this->navigationView);		
		
	}

	public function doStore() {
		if ($this->navigationView->customerWantsToSeeProduct()) {
			$this->selectedProduct = $this->productCatalogView->getSelectedProduct();
			
			$productLikes = new \model\ProductLikes($this->selectedProduct);
			$popularityView = new \view\PopularityView($this->navigationView, $this->selectedProduct, $productLikes);
			
			$likeController = new PopularityController($popularityView, $productLikes);

			$likeController->doLike();
		}
	}

	/**
	 * 
	 * @return View
	 */
	public function getView() {

		if ($this->selectedProduct != null) {
			$productView = new \view\ProductView($this->selectedProduct, $this->navigationView);

			return  $productView;
			
			
		} else {

			return $this->productCatalogView;
		}
	}
}