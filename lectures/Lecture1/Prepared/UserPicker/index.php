<?php

error_reporting(-1);
ini_set('display_errors', 'On');


require_once("User.php");
require_once("../Common/HTMLView.php");
require_once("UserView.php");
require_once("PickUserController.php");
require_once("UserArray.php");
require_once("SelectedUserDAL.php");




//set up the model
$dal = new \model\SelectedUserDAL();
$users = new \model\UserArray($dal);
$users->add(new \model\User("Daniel", "Snöfallsvägen 13"));
$users->add(new \model\User("Tobias", "Tobias adress"));


//set up the view
$picker = new \view\UserView($users);

//start the controller
$pc = new \controller\PickUserController($users, $picker);

//let controller handle input
$pc->doPickUser();

//generate output
$body = $pc->getOutput();


//compose a page
$htmlView = new common\view\HTMLView("utf-8");
$httpContent = $htmlView->getHTMLPage("Pick a user", $body);
echo $httpContent;