<?php
  	session_start();
  
  	require_once("LikeView.php");
	require_once("LikeController.php");
	require_once("../Common/HTMLView.php");
	
	$xhtml = "";
	
	
	$likeController = new \controller\LikeController();

	$xhtml .= $likeController->doControll();

	$pageView = new common\view\HTMLView("utf-8");
	echo $pageView->getHTMLPage("I like it!", $xhtml);