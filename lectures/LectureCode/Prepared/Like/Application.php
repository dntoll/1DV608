<?php

namespace controller;


class Application  {

	private $productCatalog;

	public function __construct() {
		$this->productCatalog = new \model\ProductCatalog();
	
		//Add some data...
		$p = new \model\Product("Sony TV 32\"", 100, "sonyTV32");
		$this->productCatalog->add($p);
		$p = new \model\Product("Philips TV 100\"", 100, "sonyTV100");
		$this->productCatalog->add($p);
		$p = new \model\Product("Hitachi TV 50\"", 100, "hitachiTV50");
		$this->productCatalog->add($p);
	}

	public function doRun() {
		

		$urlView = new \view\URLView();

		$pv = new \view\ProductView($urlView);


		//Please note that this is "controller code..."
		if ($pv->customerInspectsProduct()) {

			$p = $pv->getSelectedProduct($this->productCatalog);

			$likeModel = new \model\LikeModel($p);
			$likeView = new \view\LikeView($likeModel, $urlView);
			$likeController = new \controller\LikeController($likeModel, $likeView);

			$likeController->doControll();
			$xhtml = $pv->getProduct($p, $likeView);
			
		} else {
			$xhtml = $pv->getProductList($this->productCatalog);	
		}
		return $xhtml;
	}
}