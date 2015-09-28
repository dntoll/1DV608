<?php

namespace controller;


class MasterController {

	private $productCatalog;
	private $navigationView;

	public function __construct() {
		$this->productCatalog = new \model\ProductCatalog();

		//Some temporary code to get stuff up and running
		$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur vel quam eget sollicitudin. Nunc sed libero felis. Praesent a lacus quis ex semper sollicitudin. Aenean id urna at leo semper tincidunt. Nunc at tortor erat. Fusce scelerisque est dolor, non aliquam nunc tempus in. Mauris pellentesque, magna sed fringilla pellentesque, eros magna euismod sapien, eu vehicula ligula sem ut mi. Donec porttitor tempor ex ut aliquam. Aliquam luctus blandit sapien in fringilla. Donec pharetra mauris eu dui semper, a rutrum nunc mattis. Aliquam porta odio eget nulla posuere tempus. Integer pharetra felis nec ante commodo bibendum. Ut vehicula metus sed ligula condimentum, sit amet mollis ante rhoncus.";
		$product1 = new \model\Product("Sony 50\"  SuperWide Field", 15000, "sony_50", $description);
		$product2 = new \model\Product("Philips 22\"  Super fat", 150, "philips_22_fat", $description);
		$this->productCatalog->add($product1);
		$this->productCatalog->add($product2);

		$this->navigationView = new \view\NavigationView();
	}

	public function handleInput() {
		if ($this->navigationView->inStore() ) {
			$store = new \controller\StoreController($this->productCatalog);

			//Handle input
			$store->doStore();

			//Generate output
			$this->view = $store->getView();
		} else {
			$model = new \model\AdminFacade($this->productCatalog);
			$this->view = new \view\AdminView($model, $this->navigationView);
			$adc = new \controller\AdminController($model, $this->view, $this->navigationView);

			$adc->addProduct();	
		}
	}

	public function generateOutput() {
		return $this->view;

	}
}