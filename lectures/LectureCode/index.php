<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("HTMLView.php");


$htmlView = new \view\HTMLView("utf-8");


echo $htmlView->getHTMLPage("Hello", "<h2>hello world</h2>");
