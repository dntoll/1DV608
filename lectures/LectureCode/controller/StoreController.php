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

	public function __construct(\model\ProductCatalog $catalog) {
		$this->catalog = $catalog;
		$this->productCatalogView = new \view\ProductCatalogView($this->catalog);		
	}

	public function doStore() {
		if ($this->productCatalogView->customerWantsToSeeProduct()) {
			$this->selectedProduct = $this->productCatalogView->getSelectedProduct();
		}
	}

	/**
	 * TODO: Move to its own class maybe
	 * 
	 * @return String HTML
	 */
	public function getStoreHTML() {

		if ($this->selectedProduct != null) {
			$productView = new \view\ProductView($this->selectedProduct);

			$html = $productView->getHTML();
			//$html .= "<a href='?'>back</a>";
			$html .= $navigationView->getLinkToCatalog(); //<-TODO: Work here, please note the . is a view thing
		} else {

			$html = $this->productCatalogView->getHTML();
		}
		return $html;
	}
}