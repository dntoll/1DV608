<?php
  	session_start();
  
    require_once("Product.php");
    require_once("ProductCatalog.php");
  	require_once("LikeView.php");
	require_once("LikeController.php");
	require_once("../Common/HTMLView.php");
	require_once("ProductView.php");
	require_once("URLView.php");
	require_once("Application.php");
	
	

	$app = new \controller\Application();
	$xhtml = $app->doRun();
	
	

	$pageView = new common\view\HTMLView("utf-8");
	echo $pageView->getHTMLPage("I like it!", $xhtml);