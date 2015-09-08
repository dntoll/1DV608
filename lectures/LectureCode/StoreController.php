<?php

namespace controller;


class StoreController {


	private $selectedProduct = null;

	public function __construct(\model\ProductCatalog $catalog) {
		$this->catalog = $catalog;
		$this->productCatalogView = new \view\ProductCatalogView($this->catalog);		
	}

	public function doStore() {
		if ($this->productCatalogView->customerWantsToSeeProduct()) {
			$this->selectedProduct = $this->productCatalogView->getSelectedProduct();
		}
	}

	public function getStoreHTML() {

		if ($this->selectedProduct != null) {
			$productView = new \view\ProductView($this->selectedProduct);
			$html = $productView->getHTML();
			//$html .= "<a href='?'>back</a>";
			$html .= $navigationView->getLinkToProductView(); 
		} else {

			$html = $this->productCatalogView->getHTML();
		}
		return $html;
	}
}