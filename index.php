<?php
require_once("Config/conf.php");
require_once("route.php");

use controllers\maincontroller;
use views\mainview;
use models\mainmodel;

$model = new MainModel();
$controller = new MainController($model);
$view = new MainView($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->$_GET['action']();
}
//comment
if(isset($routeController)){
	echo $routeController;
}
echo $view->output();
