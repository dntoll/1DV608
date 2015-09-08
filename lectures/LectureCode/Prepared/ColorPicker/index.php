<?php

require_once("SelectColor.php");

session_start();


$persistance = new \model\SessionColorPersistor("colorSessionLocation");

$controller = new \controller\SelectColor($persistance);

echo $controller->doSelectColor();
